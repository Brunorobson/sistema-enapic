<?php

namespace App\Livewire\Event;

use App\Livewire\Forms\EventForm;
use App\Models\Event;
use Livewire\Component;

class EventModal extends Component
{
    public EventForm $form;

    public bool $showModal = false;

    protected $listeners = ['addNew' => 'toShowModal', 'editObject' => 'toShowModalEdit'];
    public function render()
    {
        return view('livewire.event.event-modal');
    }

    public function toShowModal()
    {
        $this->form->init();
        $this->showModal = true;
    }

    public function toShowModalEdit($id)
    {
        $object = Event::find($id);
        $this->form->setObject($object);
        $this->showModal = true;
    }

    public function store()
    {
        $this->authorize('write_events');

        $this->form->store();

        $this->showModal = false;

        session()->flash('title', 'Sucesso');
        session()->flash('status', 'Evento salvo com sucesso!');

        $this->redirectRoute('dashboard/events');
    }
}
