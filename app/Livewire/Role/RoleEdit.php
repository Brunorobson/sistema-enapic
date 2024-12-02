<?php

namespace App\Livewire\Role;

use App\Models\ACL\Module;
use App\Models\ACL\Role;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class RoleEdit extends Component
{
    public Role $role;
    public string $name = '';

    public Collection $modules;
    public array $permissions = [];

    protected $rules = [
        'role.name'   => 'required|string|min:3|max:255',
        'permissions' => 'required|array',
    ];

    public function mount(string $uuid)
    {
        $this->role = Role::where('uuid', $uuid)->first();

        $this->name        = $this->role->name;
        $this->modules     = Module::with(['permissions'])->get();
        $this->permissions = $this->role->permissions()->pluck('permissions.id')->toArray();
    }

    public function render()
    {
        return view('livewire.role.role-edit');
    }

    public function store()
    {
        $this->authorize('write_roles');

        $this->validate();

        $this->role->update(['name' => $this->name]);
        $this->role->permissions()->sync($this->permissions);

        return redirect()->route('settings/roles')
            ->with('title', 'Sucesso')
            ->with('status', 'Registro Atualizado!');
    }
}
