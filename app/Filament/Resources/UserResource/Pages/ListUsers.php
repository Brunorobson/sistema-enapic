<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected static ?string $title = 'Listagem de Usúarios';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Novo Usúario'),
        ];
    }
}
