<?php

namespace App\Models;

use App\Models\Scopes\InscriptionScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    protected static function booted(): void
    {
        static::addGlobalScope(new InscriptionScope);
    }

    protected $fillable = [
        'uuid',
        'user_id',
        'event_id',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public static function getStatus()
    {
        $array = [
            'P' => 'Aguardando Confirmação',
            'I' => 'Inscrito',
            'C' => 'Cancelada'
        ];
        return $array;
    }

    public static function search($filter = null)
    {
        if (!$filter) {
            return self::paginate(10);
        }

        return self::where('user_id', 'LIKE', "%$filter%")
            ->paginate(10);
    }

}
