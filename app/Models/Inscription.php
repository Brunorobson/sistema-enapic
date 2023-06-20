<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

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

    public static function getStatus($state){
        $array = array(
            'P' => 'Pendente',
            'A' => 'Ativa',
            'C' => 'Cancelada'
        );
        return $array[$state];
    }

}
