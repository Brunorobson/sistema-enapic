<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvaliationItem extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function avaliation()
    {
        return $this->belongsTo(Avaliation::class);
    }
}
