<?php

namespace App\Filament\Resources\SubmissionResource\Pages;

use App\Filament\Resources\SubmissionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubmission extends EditRecord
{
    protected static string $resource = SubmissionResource::class;
    protected static ?string $title = 'Editar Submissão';


    protected function getActions(): array
    {
        return [
            //Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Trabalho atualizado com sucesso!';
    }


    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['file_path'] = $data['file'];
        return $data;
    }

}
