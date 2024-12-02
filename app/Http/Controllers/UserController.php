<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Laravel\Fortify\Contracts\{CreatesNewUsers, RegisterViewResponse};
use Laravel\Fortify\Fortify;

class UserController extends Controller
{
    public function create(Request $request): RegisterViewResponse
    {
        return app(RegisterViewResponse::class);
    }

    public function store(
        Request $request,
        CreatesNewUsers $creator
    ): \Illuminate\Http\RedirectResponse {
        if (config('fortify.lowercase_usernames')) {
            $request->merge([
                Fortify::username() => Str::lower($request->{Fortify::username()}),
            ]);
        }
        $user = $creator->create($request->all());

        $user->roles()->sync([6]);

        DB::transaction(function () use ($user) {
            $inscription = new Inscription();
            $inscription->user_id = $user->id;
            $inscription->uuid = Str::uuid();
            $inscription->event_id = 1;
            $inscription->status = 'P';
            $inscription->save();
        });

        return redirect::route('login');
    }
}