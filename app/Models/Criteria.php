<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
        return $this->belongsTo(Axle::class);
    }

    public function avaliations(): BelongsToMany
    {
        return $this->belongsToMany(Avaliation::class, 'avaliation_items', 'criteria_id', 'avaliation_id');
    }
}
