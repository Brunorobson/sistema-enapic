<?php

namespace App\Livewire\Submission;

use App\Models\Submission;
use Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class SubmissionIndex extends Component
{
    use AuthorizesRequests;

    //public bool $showModalDelete = false;
    //public int $deleteId;

    public array $searchOptions = [];

    public array $getStatus = [];

    public string $filter = '';

    public function mount()
    {
        $this->authorize('read_submissions');

        $this->getStatus = Submission::getStatus();
    }

    public function render()
    {
        $user = Auth::id();

        if (!auth()->user()->hasRole(5)) {
                // Ele pode ver todas as submissões
                $objects = Submission::search($this->filter);
            } else {
                // Caso contrário, se for outro tipo de usuário, mostramos apenas suas próprias submissões
                $objects = Submission::where('user_id', $user)->paginate();
            }

        return view('livewire.submission.submission-index', ['objects' => $objects]);
    }

    public function clearFilters()
    {
        $this->searchOptions = [];
    }

}