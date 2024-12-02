<?php

namespace App\Livewire\Inscription;

use App\Livewire\Forms\InscriptionForm;
use App\Models\Inscription;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class InscriptionModal extends Component
{
    use AuthorizesRequests;

    public InscriptionForm $form;

    public bool $showModal = false;

    protected $listeners = ['addNew' => 'toShowModal', 'editObject' => 'toShowModalEdit'];

    public function render()
    {
        return view('livewire.inscription.inscription-modal');
    }

    public function toShowModal()
    {
        $this->form->init();
        $this->form->object = new Inscription();
        $this->showModal    = true;
    }

    public function toShowModalEdit($id)
    {
        $object = Inscription::find($id);
        $this->form->setObject($object);
        $this->showModal = true;
    }

    public function store()
    {
        $this->authorize('write_inscriptions');

        $this->form->store();

        $this->showModal = false;

        return redirect()->route('dashboard/inscriptions')
            ->with('title', 'Sucesso')
            ->with('status', 'Inscrição salva com sucesso!');
    }
}
