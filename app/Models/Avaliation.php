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


    public function updateTotal(){
        $sum = AvaliationItem::where('avaliation_id', $this->id)->sum('value');

        $this->total = intVal($sum);
        $this->save();
    }



}
