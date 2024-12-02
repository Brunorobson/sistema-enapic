<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            ['id' => 1, 'name' => 'Dashboard', 'route_name' => 'dashboard'],
            ['id' => 2, 'name' => 'Meu Perfil', 'route_name' => 'profile'],
            ['id' => 3, 'name' => 'Usuários', 'route_name' => 'users'],
            ['id' => 4, 'name' => 'Tipos de Usuários', 'route_name' => 'roles'],

            ['id' => 5, 'name' => 'Inscrições', 'route_name' => 'inscriptions'],
            ['id' => 6, 'name' => 'Submissões', 'route_name' => 'submissions'],
            ['id' => 7, 'name' => 'Avaliações', 'route_name' => 'avaliantions'],

            ['id' => 8, 'name' => 'Eventos', 'route_name' => 'events'],
            ['id' => 9, 'name' => 'Critérios', 'route_name' => 'criterias'],
        ]);
    }
}
