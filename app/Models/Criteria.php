<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory;

    protected $fillable = [
        'axes_id',
        'name',
        'active'
    ];


    public function axis()
    {
        return $this->belongsTo(Axe::class);
    }
}
