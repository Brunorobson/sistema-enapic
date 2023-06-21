<?php

namespace App\Filament\Resources\InscriptionResource\Pages;

use App\Filament\Resources\InscriptionResource;
use App\Models\User;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInscription extends EditRecord
{
    protected static string $resource = InscriptionResource::class;

    protected function getActions(): array
    {
        return [
            //Actions\ViewAction::make(),
            //Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Inscrição atualizada com sucesso!';
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $user = User::find($data['user_id']);
        if($data['status'] == 'A'){
            $user->setRole(4); //Pesquisador
        }else{
            $user->setRole(5); //Ouvinte
        }
    
        return $data;
    }

}
