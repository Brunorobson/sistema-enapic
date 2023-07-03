<?php

namespace App\Filament\Resources\CriteriaResource\Pages;

use App\Filament\Resources\CriteriaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCriterias extends ListRecords
{
    protected static string $resource = CriteriaResource::class;
    protected static ?string $title = 'Critérios de Avaliação';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Novo Critério'),
        ];
    }
}
