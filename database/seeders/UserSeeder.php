<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'id' => 1,
                'name' => 'Suporte',
                'cpf' => '00000000000',
                'email' => 'suporte@enapic.com.br',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'), // password
                'remember_token' => Str::random(10)
            ]
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);
    }
}
