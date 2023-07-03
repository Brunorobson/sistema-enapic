<?php

namespace App\Filament\Resources\AvaliationResource\Pages;

use App\Filament\Resources\AvaliationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAvaliation extends CreateRecord
{
    protected static string $resource = AvaliationResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
