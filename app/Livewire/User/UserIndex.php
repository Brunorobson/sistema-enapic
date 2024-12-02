<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\{Component, WithPagination};

class UserIndex extends Component
{
    use AuthorizesRequests;
    use WithPagination;

    public $filter = '';

    public bool $isShowModelDelete = false;

    public array $getType = [];
    public function updatingFilter()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->authorize('read_submissions');

        $this->getType = User::getType();
    }

    public function render()
    {
        $user = new User();

        return view('livewire.user.user-index', ['users' => $user->search($this->filter)]);
    }

    public function activateUser($id)
    {
        $this->authorize('write_users');

        $user         = User::find($id);
        $user->active = true;
        $user->save();

        return redirect()->route('settings/users')
            ->with('success', 'Usuário Ativado!');
    }

    public function deactivateUser($id)
    {
        $this->authorize('write_users');

        $user         = User::find($id);
        $user->active = false;
        $user->save();

        return redirect()->route('settings/users')
            ->with('success', 'Usuário Desativado!');
    }
}
