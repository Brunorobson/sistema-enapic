<?php

namespace App\Livewire\User;

use App\Models\ACL\Role;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\{Auth, Hash, Validator};
use Illuminate\Validation\{Rule, ValidationException};
use Laravel\Fortify\Rules\Password;
use Livewire\{Component, WithFileUploads};

class UserEdit extends Component
{
    use AuthorizesRequests;
    use WithFileUploads;

    public User $object;

    public string $name = '';

    public string $cpf = '';

    public string $email = '';

    public string $password = '';

    public string $current_password = '';

    public string $password_confirmation = '';

    public $photo;

    public array $roles = [];

    public array $selectedRoles = [];

    public $removeProfilePhoto = false;

    protected function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'cpf'  => [
                'required',
                'cpf',
                Rule::unique('users')->ignore($this->object->id),
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($this->object->id),
            ],
            'photo'                 => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'password'              => ['required_with:password_confirmation', 'string', new Password(), 'confirmed'],
            'password_confirmation' => 'required_with:password',
            'selectedRoles'         => 'required',
        ];
    }

    protected $validationAttributes = [
        'name'                  => 'nome',
        'cpf'                   => 'CPF',
        'email'                 => 'e-mail',
        'password'              => 'senha',
        'password_confirmation' => 'confirmação de senha',
        'photo'                 => 'foto',
        'selectedRoles'         => 'funções',
    ];

    public function messages()
    {
        return [
            'cpf.unique' => 'O :attribute já está sendo utilizado.',
        ];
    }

    public function mount(string $id)
    {
        $this->authorize('write_users');

        $this->object = User::findOrFail($id);

        $this->name  = $this->object->name;
        $this->cpf   = $this->object->cpf;
        $this->email = $this->object->email;

        $user = Auth::user();

        if ($user->isSupport()) {
            $this->roles = Role::all()->pluck('name', 'id')->toArray();
        } else {
            $this->roles = Role::where('id', '>', 1)->get()->pluck('name', 'id')->toArray();
        }

        $this->selectedRoles = $this->object->roles->pluck('id')->toArray();
    }

    public function render()
    {
        return view('livewire.user.user-edit');
    }

    public function deleteProfilePhoto()
    {
        $this->removeProfilePhoto         = true;
        $this->photo                      = null;
        $this->object->profile_photo_path = null;
    }

    public function store()
    {
        $this->authorize('write_users');

        $this->validate();

        $userData = [
            'name'  => $this->name,
            'cpf'   => $this->cpf,
            'email' => $this->email,
        ];

        if ($this->password) {
            $userData['password'] = Hash::make($this->password);
        }

        if ($this->photo) {
            $this->object->updateProfilePhoto($this->photo);
        }

        $this->object->forceFill($userData)->save();

        if ($this->removeProfilePhoto) {
            $this->object->deleteProfilePhoto();
        }

        $this->object->roles()->sync($this->selectedRoles);

        return redirect()->route('settings/users')
            ->with('status', 'Usuário Atualizado!');
    }

}
