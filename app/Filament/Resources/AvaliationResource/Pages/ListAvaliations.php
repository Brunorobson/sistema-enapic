<?php

namespace App\Filament\Resources\AvaliationResource\Pages;

use App\Filament\Resources\AvaliationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAvaliations extends ListRecords
{
    protected static string $resource = AvaliationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Avaliar Submissão'),
        ];
    }
}
