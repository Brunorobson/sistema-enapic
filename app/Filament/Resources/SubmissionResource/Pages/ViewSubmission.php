<?php

namespace App\Filament\Resources\SubmissionResource\Pages;

use App\Filament\Resources\SubmissionResource;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\ViewRecord;

class ViewSubmission extends ViewRecord
{
    protected static string $resource = SubmissionResource::class;
    protected static ?string $title = 'Visualização de Subimissão';

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['file_path'] = $data['file'];    
        return $data;
    }


    protected function getActions(): array
    {
        return [
            Action::make('voltar')
            ->url(route('filament.resources.submissions.index'))
        ];
    }
}
