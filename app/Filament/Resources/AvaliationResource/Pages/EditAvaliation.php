<?php

namespace App\Filament\Resources\AvaliationResource\Pages;

use App\Filament\Resources\AvaliationResource;
use App\Models\Avaliation;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAvaliation extends EditRecord
{
    protected static string $resource = AvaliationResource::class;
    protected static ?string $title = 'Avaliação de Submissão';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
