<?php

namespace App\Livewire\Avaliation;

use App\Livewire\Forms\AvaliationForm;
use App\Models\{Avaliation, AvaliationItem, Criteria, Event, Submission};
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class AvaliationMake extends Component
{
    use AuthorizesRequests;

    public AvaliationForm $form;

    public function mount(?string $id = null): void
    {
        $this->authorize('write_avaliantions');
        $this->form->init($id);
    }

    public function render()
    {
        $avaliation = $this->form->object;

        if ($avaliation) {
            $submission = Submission::find($avaliation->submission_id);
        } else {
            return view('livewire.avaliation.avaliation-make')->withErrors(['avaliation' => 'Avaliação não encontrada.']);
        }

        return view('livewire.avaliation.avaliation-make');
    }

    public function store(): void
    {
        $this->authorize('write_avaliantions');

        $this->form->store();

        $this->showModal = false;

        session()->flash('title', 'Sucesso');
        session()->flash('status', 'Submissão Avaliada com sucesso!');

        $this->redirectRoute('dashboard/avaliations');
    }
}