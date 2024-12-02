<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'id' => 1,
            'uuid' => Str::uuid(),
            'name' => 'Suporte',
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'uuid' => Str::uuid(),
            'name' => 'Administrador',
        ]);
        DB::table('roles')->insert([
            'id' => 3,
            'uuid' => Str::uuid(),
            'name' => 'Comissão',
        ]);

        DB::table('roles')->insert([
            'id' => 4,
            'uuid' => Str::uuid(),
            'name' => 'Avaliador',
        ]);

        DB::table('roles')->insert([
            'id' => 5,
            'uuid' => Str::uuid(),
            'name' => 'Participante',
        ]);

        DB::table('roles')->insert([
            'id' => 6,
            'uuid' => Str::uuid(),
            'name' => 'Pré-inscrito',
        ]);
    }
}
