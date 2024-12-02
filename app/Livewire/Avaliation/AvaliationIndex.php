<?php

namespace App\Livewire\Avaliation;

use App\Models\{Avaliation, Submission};
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AvaliationIndex extends Component
{
    use AuthorizesRequests;

    public array $searchOptions = [];

    public array $getStatus = [];

    #[Url]
    public string $filter = '';

    public function mount()
    {
        $this->authorize('read_avaliantions');

        $this->getStatus = Avaliation::getStatus();
    }

    public function render()
    {
        $user = Auth::user();
        $objects = $user->hasRole(4)
            ? Avaliation::where('user_id', $user->id)->paginate()
            : Avaliation::paginate();

        foreach ($objects as $object) {
            $object->average = Avaliation::calculateAverage($object->submission_id);
            $object->status = $object->status;
        }

        return view('livewire.avaliation.avaliation-index', ['objects' => $objects]);
    }

    public function updatingFilter(): void
    {
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->searchOptions = [];
    }
}
