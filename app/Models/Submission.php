<?php

namespace App\Models;

use Filament\Forms\Components\Builder;
use Illuminate\Database\Eloquent\Concerns\HasEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;

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
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withoutGlobalScopes();
    }

    public static function boot()
{
    parent::boot();
    Gate::before(function (User $user, $ability) {
    if (auth()->check()) {
        $user = auth()->user();
        
        // Verifica se o usuário tem permissão de administrador ou suporte
        if ($user->isSupport() or $user->isAdmin()) {
            static::getEloquentQuery('default', fn ($query) => $query);
        } else {
            // Filtra as submissões apenas para o usuário logado
            static::getEloquentQuery('default', fn ($query) => $query->where('user_id', $user->id));
        }
    } else {
        // Filtra para não exibir nenhuma submissão quando o usuário não estiver logado
        static::getEloquentQuery('default', fn ($query) => $query->whereRaw('1 = 0'));
        
    }
});
}
}


