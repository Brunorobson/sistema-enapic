<?php

namespace App\Livewire\Event;

use App\Models\Event;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class EventIndex extends Component
{
    use AuthorizesRequests;
    use WithPagination;

    public bool $showModalDelete = false;
    public ?string $deleteId;

    public array $searchOptions = [];

    #[Url]
    public string $filter = '';

    public function render()
    {
        return view('livewire.event.event-index', ['objects' => Event::search($this->filter)]);
    }

    public function updatingFilter(): void
    {
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->searchOptions = [];
    }

    public function toDelete($value): void
    {
        $this->deleteId = $value;

        $this->dispatch('app::confirm', [
            'text'   => 'Realmente deseja excluir este Evento?',
            'action' => 'onDelete',
        ]);
    }

    #[On('onDelete')]
    public function onDelete(): void
    {
        $this->authorize('write_events');
        Event::find($this->deleteId)->delete();
        $this->deleteId = null;
    }
}
