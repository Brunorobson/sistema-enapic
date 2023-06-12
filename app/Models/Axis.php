<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Axis extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];


    public function criterias()
    {
        return $this->hasMany(Criteria::class);
    }

    public function submission()
    {
        return $this->hasMany(Submission::class);
    }

    public function avaliations()
    {
        return $this->hasMany(Avaliation::class);
    }





}
