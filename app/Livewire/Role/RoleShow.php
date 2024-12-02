<?php

namespace App\Livewire\Role;

use App\Models\ACL\Module;
use App\Models\ACL\Role;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class RoleShow extends Component
{
    public Role $role;

    public Collection $modules;
    public array $permissions = [];

    public function mount(string $uuid)
    {
        $this->role        = Role::where('uuid', $uuid)->first();
        $this->modules     = Module::with(['permissions'])->get();
        $this->permissions = $this->role->permissions()->pluck('permissions.id')->toArray();
    }

    public function render()
    {
        return view('livewire.role.role-show');
    }
}
