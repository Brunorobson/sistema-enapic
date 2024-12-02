<?php

namespace App\Livewire\Forms;

use App\Helpers\AppHelper;
use App\Models\Event;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EventForm extends Form
{
    public ?Event $object;

    #[Validate('required|min:3', as: 'name')]
    public ?string $name = null;

    #[Validate('nullable', as: 'ativo')]
    public ?bool $active = true;

    #[Validate('required', as: 'description')]
    public ?string $description = null;

    public function init()
    {
        $this->reset();
    }

    public function setObject(Event $object)
    {
        $this->object   = $object;
        $this->name    = $object->name;
        $this->active   = $object->active == 1 ? true : false;
        $this->description     = $object->description;
        $this->value    = AppHelper::formatCurrency($object->value);
    }

    public function store()
    {
        $data = $this->validate();

        if (empty($this->object->id)) {
            Event::create($data);
        } else {
            $this->object->update($data);
        }

        $this->reset();
    }
}
