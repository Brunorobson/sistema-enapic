<?php

namespace App\Livewire\Role;

use App\Models\ACL\Role;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithPagination;

class RoleIndex extends Component
{
    use AuthorizesRequests;
    use WithPagination;

    public $filter = '';

    public bool $isShowModelDelete = false;
    public int $idBeingDeleted;

    public function updatingFilter()
    {
        $this->resetPage();
    }

    public function render()
    {
        $roles = new Role();

        return view('livewire.role.role-index', ['roles' => $roles->search($this->filter)]);
    }

    public function toConfirmDeletion($id)
    {
        $this->isShowModelDelete = true;
        $this->idBeingDeleted    = $id;
    }

    public function destroy()
    {
        $this->isShowModelDelete = false;
        $role                    = Role::find($this->idBeingDeleted);
        $role->delete();

        session()->flash('title', 'Sucesso');
        session()->flash('status', 'Registro Excluído!');

        $this->redirectRoute('settings/roles');
    }
}
