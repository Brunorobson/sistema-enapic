<?php

namespace App\Livewire\Forms;

use App\Models\{Event, Inscription, User};
use Illuminate\Support\Facades\{Auth, DB};
use Livewire\Attributes\Validate;
use Livewire\Form;

class InscriptionForm extends Form
{
    public ?Inscription $object;

    #[Validate('required', as: 'Participante')]
    public ?string $user_id = null;

    #[Validate('required', as: 'Evento')]
    public ?string $event_id = null;

    #[Validate('required', as: 'Status')]
    public ?string $status = null;

    public $listEvents = [];

    public $statusOptions = [];

    public function init()
    {
        $this->statusOptions = Inscription::getStatus();
        $this->listEvents    = Event::all()->pluck('name', 'id')->toArray();
    }

    public function getUserName($userId)
    {
        $user = User::find($userId);

        return $user ? $user->name : 'Usuário não encontrado';
    }

    public function setObject(Inscription $object)
    {
        $this->init();
        $this->object   = $object;
        $this->user_id  = $object->user_id;
        $this->event_id = $object->event_id;
        $this->status   = $object->status;
    }

    public function store()
    {
        $data = $this->validate();

        if (empty($this->object->id)) {
            $this->object = Inscription::create($data);
        } else {
            $this->object->update($data);
        }

        if ($data['status'] === 'I') {
            $user = User::find($data['user_id']);

            if ($user) {
                DB::table('role_user')->updateOrInsert(
                    ['user_id' => $user->id],
                    ['role_id' => 5]
                );
            }
        }

        $this->reset();
    }
}
