<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Filament\Resources\EventResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEvents extends ListRecords
{
    protected static string $resource = EventResource::class;
    protected static ?string $title = 'Listagem de Eventos';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Novo Evento'),
        ];
    }
}
