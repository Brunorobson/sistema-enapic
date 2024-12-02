<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\{Hash, Validator};
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name'     => ['required', 'string', 'max:255'],
            'cpf'      => ['required', 'string', 'unique:users,cpf', 'regex:/^\d{3}\.\d{3}\.\d{3}-\d{2}$/'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms'    => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name'        => $input['name'],
            'cpf'         => $input['cpf'],
            'email'       => $input['email'],
            'type'        => $input['type'],
            'institution' => $input['type'] === 'PE' ? $input['institution'] : null,
            'password'    => Hash::make($input['password']),
        ]);

    }
}
