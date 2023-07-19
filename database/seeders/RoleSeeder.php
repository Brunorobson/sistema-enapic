<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'Suporte',
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'Administrador',
        ]);
        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'Avaliador',
        ]);
        DB::table('roles')->insert([
            'id' => 4,
            'name' => 'Comissão',
        ]);
        DB::table('roles')->insert([
            'id' => 5,
            'name' => 'Participante',
        ]);
        DB::table('roles')->insert([
            'id' => 6,
            'name' => 'Pré-inscrito',
        ]);
    }
}
