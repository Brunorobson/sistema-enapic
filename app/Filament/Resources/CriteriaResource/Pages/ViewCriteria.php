<?php

namespace App\Filament\Resources\CriteriaResource\Pages;

use App\Filament\Resources\CriteriaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCriteria extends ViewRecord
{
    protected static string $resource = CriteriaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
