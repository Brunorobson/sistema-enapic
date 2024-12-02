<?php

namespace App\Models;

use App\Models\Scopes\SubmissionScope;
use Illuminate\Database\Eloquent\Concerns\HasEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsToMany, HasManyThrough};
use Illuminate\Support\Facades\{Auth, Gate};

class Submission extends Model
{
    use HasFactory;
    use HasEvents;

    protected $fillable = [
        'user_id',
        'event_id',
        'axle_id',
        'title',
        'resume',
        'status',
        'file',
        'file_new',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function axle()
    {
        return $this->belongsTo(Axle::class);
    }

    public function avaliations()
    {
        return $this->hasMany(Avaliation::class);
    }

    public function evaluators(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'avaliations', 'submission_id', 'user_id');
    }

    public static function getStatus()
    {
        $array = [
            'AA' => 'Aguardando Avaliação',
            'EA' => 'Em Avaliação',
            'AP' => 'Aprovado',
            'AC' => 'Aprovado com Correções',
            'RE' => 'Reprovado',
        ];

        return $array;
    }

    public static function search($filter = null)
    {
        if (!$filter) {
            return self::paginate(10);
        }

        return self::where('title', 'LIKE', "%$filter%")
            ->paginate(10);
    }

    public function atualizarStatus()
    {
        $avaliacoes = $this->avaliations; // Relacionamento com as avaliações

        $statusFinal = 'AP'; // Default para Aprovado
        $todasAprovadas = true;
        $temEmAvaliacao = false;

        foreach ($avaliacoes as $avaliacao) {
            if ($avaliacao->status == 'EA') {
                $temEmAvaliacao = true;
            }

            if ($avaliacao->status == 'RE') {
                $this->status = 'RE'; // Reprovado
                $this->save();
                return;
            }

            if ($avaliacao->status == 'AC') {
                $statusFinal = 'AC'; // Aprovado com Correções
            }

            if ($avaliacao->status != 'AP') {
                $todasAprovadas = false;
            }
        }

        if ($temEmAvaliacao) {
            $this->status = 'EA'; // Em Avaliação
        } elseif ($todasAprovadas) {
            $this->status = 'AP'; // Aprovado
        } else {
            $this->status = $statusFinal; // Aprovado com Correções, se houver
        }

        $this->save();
    }
}
