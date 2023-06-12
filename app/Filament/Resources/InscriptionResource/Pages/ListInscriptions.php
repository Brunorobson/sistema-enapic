<?php

namespace App\Filament\Resources\InscriptionResource\Pages;

use App\Filament\Resources\InscriptionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInscriptions extends ListRecords
{
    protected static string $resource = InscriptionResource::class;

    protected function getActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }
}
