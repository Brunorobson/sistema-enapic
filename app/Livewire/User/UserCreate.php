<?php

namespace App\Livewire\User;

use App\Actions\Fortify\CreateNewUser;
use App\Models\ACL\Role;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\{Auth, Validator};
use Illuminate\Validation\ValidationException;
use Livewire\{Component, WithFileUploads};

class UserCreate extends Component
{
    use AuthorizesRequests;
    use WithFileUploads;

    public string $name = '';

    public string $cpf = '';

    public string $email = '';

    public string $password = '';

    public string $password_confirmation = '';

    public string $type = '';

    public string $institution = '';

    public $photo;

    public array $roles = [];

    public array $selectedRoles = [];

    protected $rules = [
        'name'                  => 'required',
        'cpf'                   => 'required|string|cpf|unique:users,cpf',
        'email'                 => 'required|email|unique:users,email',
        'password'              => 'required|confirmed',
        'password_confirmation' => 'required',
        'photo'                 => 'nullable|mimes:jpg,jpeg,png|max:1024',
        'selectedRoles'         => 'required',
    ];

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

    public function mount()
    {
        $this->authorize('write_users');
        $user = Auth::user();

        if ($user->isSupport()) {
            $this->roles = Role::all()->pluck('name', 'id')->toArray();
        } else {
            $this->roles = Role::where('id', '>', 1)->get()->pluck('name', 'id')->toArray();
        }
    }

    public function render()
    {
        return view('livewire.user.user-create');
    }

    public function store()
    {
        $this->authorize('write_users');

        // $validator = Validator::make([
        //     'cpf' => $this->cpf,
        //     'email' => $this->email,
        // ], [
        //     'cpf' => [
        //         'required|cpf',
        //         'unique:users,cpf'
        //     ],
        //     'email' => [
        //         'required',
        //         'email',
        //         'unique:users,email'
        //     ],
        // ], [
        //     'cpf.unique' => 'O CPF já está sendo utilizado.',
        //     'email.unique' => 'O e-mail já está sendo utilizado.',
        // ]);

        // if ($validator->fails()) {
        //     throw new ValidationException($validator);
        // }

        $this->validate();

        $type    = $this->type ?: 'UB';
        $newUser = new CreateNewUser();
        $user    = $newUser->create([
            'name'                  => $this->name,
            'cpf'                   => $this->cpf,
            'email'                 => $this->email,
            'password'              => $this->password,
            'type'                  => $type,
            'institution'           => $this->type === 'PE' ? $this->institution : null,
            'password_confirmation' => $this->password_confirmation,
            'terms'                 => true,
        ]);

        if ($this->photo) {
            $user->updateProfilePhoto($this->photo);
        }

        $user->roles()->sync($this->selectedRoles);

        return redirect()->route('settings/users')
            ->with('status', 'Usuário Criado!');
    }

}
