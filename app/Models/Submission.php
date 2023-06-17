<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;
    use HasEvents;

    protected $fillable = [
        'user_id',
        'event_id',
        'axis_id',
        'title',
        'resume',
        'status',
        'file',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function axis()
    {
        return $this->belongsTo(Axis::class);
    }

    public function avaliations()
    {
        return $this->hasMany(Avaliation::class);
    }
    public static function getStatus($state){
        $array = array(
            "P" => "Pendente",
            "A" => "Aprovada",
            "R" => "Reprovada"
        );
        return $array[$state];
    }
}
