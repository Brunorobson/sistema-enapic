<?php

namespace App\Livewire\Role;

use App\Models\ACL\Module;
use App\Models\ACL\Role;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class RoleCreate extends Component
{
    public string $name = '';
    public Collection $modules;
    public array $permissions = [];

    protected $rules = [
        'name'        => 'required|string|min:3|max:255',
        'permissions' => 'required|array',
    ];

    public function mount()
    {
        $this->modules = Module::all();
    }

    public function render()
    {
        return view('livewire.role.role-create');
    }

    public function store()
    {
        $this->authorize('write_roles');

        $this->validate();

        $role = Role::create([
            'name' => $this->name,
        ]);

        $role->permissions()->sync($this->permissions);

        return redirect()->route('settings/roles')
            ->with('title', 'Sucesso')
            ->with('status', 'Registro criado!');
    }
}
