<?php

namespace App\Filament\Resources\CriteriaResource\Pages;

use App\Filament\Resources\CriteriaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCriteria extends EditRecord
{
    protected static string $resource = CriteriaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Critério atualizado com sucesso!';
    }
}
