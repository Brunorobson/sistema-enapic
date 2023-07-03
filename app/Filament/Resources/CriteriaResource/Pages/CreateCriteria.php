<?php

namespace App\Filament\Resources\CriteriaResource\Pages;

use App\Filament\Resources\CriteriaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCriteria extends CreateRecord
{
    protected static string $resource = CriteriaResource::class;
    protected static ?string $title = 'Críterios de Avaliação';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
