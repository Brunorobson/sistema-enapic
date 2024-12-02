<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Avaliation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'submission_id',
        'total',
        'status',
        'comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    public function items()
    {
        return $this->hasMany(AvaliationItem::class);
    }

    public function criterias(): BelongsToMany
    {
        return $this->belongsToMany(Criteria::class, 'avaliation_items', 'avaliation_id', 'criteria_id');
    }

    public function criteriasByAxis()
    {

        $selected = AvaliationItem::where('avaliation_id', $this->id)
            ->get()->pluck('criteria_id')->toArray();

        return Criteria::where('axis_id', $this->submission->axis_id)
            ->whereNotIn('id', $selected)->get()->pluck('name', 'id')->toArray();

    }

    public static function calculateAverage($submissionId)
    {
        $avaliations = self::where('submission_id', $submissionId)->get();
        $total = $avaliations->sum('total');
        $count = $avaliations->count();

        return $count ? $total / $count : 0;
    }

    public static function getStatus()
    {
        $array = [
            'EA' => 'Em Avaliação',
            'AP' => 'Aprovado',
            'AC' => 'Aprovado com Correções',
            'RE' => 'Reprovado',
        ];

        return $array;
    }

}
