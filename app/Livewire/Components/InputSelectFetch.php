<?php

namespace App\Livewire\Components;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class InputSelectFetch extends Component
{
    #[Modelable]
    public $value = null;

    public $placeholder;

    public $disabled = false;

    public $route = null;

    public $params = null;

    public $valueField = 'id';
    public $labelField = 'name';

    public function mount($route, $params = null, $valueField = 'id', $labelField = 'name', $placeholder = null, $disabled = false)
    {
        $this->route       = $route;
        $this->params      = $params;
        $this->valueField  = $valueField;
        $this->labelField  = $labelField;
        $this->placeholder = $placeholder;
        $this->disabled    = $disabled;
    }

    public function render()
    {
        return view('livewire.components.input-select-fetch');
    }

    public function getSelected()
    {
        if ($this->value) {
            return $this->value;
        }

        return '';
    }
}
