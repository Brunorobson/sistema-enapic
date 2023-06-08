<?php

namespace App\Filament\Resources\InscriptionResource\Pages;

use App\Filament\Resources\InscriptionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInscription extends EditRecord
{
    protected static string $resource = InscriptionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
