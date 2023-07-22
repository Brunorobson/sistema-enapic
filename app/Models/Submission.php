<?php

namespace App\Models;

use App\Models\Scopes\SubmissionScope;
use Filament\Facades\Filament;
use Filament\Forms\Components\Builder;
use Illuminate\Database\Eloquent\Concerns\HasEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class Submission extends Model
{
    use HasFactory;
    use HasEvents;

    protected static function booted(): void
    {
        static::addGlobalScope(new SubmissionScope);
    }

    protected $fillable = [
        'user_id',
        'event_id',
        'axis_id',
        'title',
        'resume',
        'status',
        'file'
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

    public function evaluators(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'avaliations', 'submission_id', 'user_id');
    }

    public static function getStatus($state){
        $array = array(
            'AA' => 'Aguardando Avaliação',
            'EA' => 'Em Avaliação',
            'AV' => 'Avaliado',
            'AP' => 'Aprovado',
            'AC' => 'Aprovado com Correções',
            'RE' => 'Reprovado'
        );
        return $array[$state];
    }

    public function scopeAccessibleByCurrentUser(Builder $query)
    {
        return $query->where('user_id', Auth::id());
    }

}


