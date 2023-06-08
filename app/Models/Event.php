<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'active',
    ];

    /**
     * Get the inscriptions for the event.
     */
    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }
}
