<?php

namespace App\Livewire\Components;

use Livewire\Attributes\Modelable;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class InputSelect extends Component
{
    #[Modelable]
    public $value = null;

    public $multiple = false;

    public $placeholder;

    public $disabled = false;

    #[Reactive]
    public $options;

    public function mount($options, $multiple = false, $placeholder = null, $disabled = false)
    {
        $this->options     = $options;
        $this->multiple    = $multiple;
        $this->placeholder = $placeholder;
        $this->disabled    = $disabled;
    }

    public function render()
    {
        return view('livewire.components.input-select');
    }

    public function getSelected()
    {
        if ($this->value) {
            if (is_array($this->value)) {
                return array_values($this->value);
            }

            return $this->value;
        }

        return $this->multiple ? [] : '';
    }
}
