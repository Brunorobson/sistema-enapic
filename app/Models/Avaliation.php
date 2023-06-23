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
        'total'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    public function avaliationItems()
    {
        return $this->hasMany(AvaliationItem::class);
    }

    public function criterias(): BelongsToMany
    {
        return $this->belongsToMany(Criteria::class, 'avaliation_items', 'avaliation_id', 'criteria_id');
    }
}
