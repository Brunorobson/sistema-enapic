<?php

namespace App\Filament\Resources\InscriptionResource\Pages;

use App\Filament\Resources\InscriptionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewInscription extends ViewRecord
{
    protected static string $resource = InscriptionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
