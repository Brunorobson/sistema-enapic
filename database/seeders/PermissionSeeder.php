<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert([
            ['id' => 1, 'name' => 'Ler Usuários', 'guard_name' => 'read_users'],
            ['id' => 2, 'name' => 'Escrever Usuários', 'guard_name' => 'write_users'],

            ['id' => 3, 'name' => 'Ler Inscrições', 'guard_name' => 'read_inscriptions'],
            ['id' => 4, 'name' => 'Escrever Inscrições', 'guard_name' => 'write_inscriptions'],

            ['id' => 5, 'name' => 'Ler Submissões', 'guard_name' => 'read_submissions'],
            ['id' => 6, 'name' => 'Escrever Submissões', 'guard_name' => 'write_submissions'],
            
            ['id' => 7, 'name' => 'Ler Avaliações', 'guard_name' => 'read_avaliantions'],
            ['id' => 8, 'name' => 'Escrever Avaliações', 'guard_name' => 'write_avaliantions'],

            ['id' => 9, 'name' => 'Ler Eventos', 'guard_name' => 'read_events'],
            ['id' => 10, 'name' => 'Escrever Eventos', 'guard_name' => 'write_events'],

            ['id' => 11, 'name' => 'Ler Critérios', 'guard_name' => 'read_criterias'],
            ['id' => 12, 'name' => 'Escrever Critérios', 'guard_name' => 'write_criterias'],
        ]);

        //permission_role
        //Administrador = 2
        DB::table('permission_role')->insert([
            ['permission_id' => 1, 'role_id' => 2],
            ['permission_id' => 3, 'role_id' => 2], //Ler Inscrições
            ['permission_id' => 4, 'role_id' => 2],
            ['permission_id' => 5, 'role_id' => 2],
            ['permission_id' => 6, 'role_id' => 2],
            ['permission_id' => 7, 'role_id' => 2],
            ['permission_id' => 8, 'role_id' => 2],
            ['permission_id' => 9, 'role_id' => 2],
            ['permission_id' => 10, 'role_id' => 2],
            ['permission_id' => 11, 'role_id' => 2],
            ['permission_id' => 12, 'role_id' => 2],
        ]);

        //Avaliador = 3
        DB::table('permission_role')->insert([//Ler Submissões
            ['permission_id' => 7, 'role_id' => 3],//Ler Avaliações
            ['permission_id' => 8, 'role_id' => 3],
            ['permission_id' => 11, 'role_id' => 3],
        ]);

        //Pesquisador = 4
        DB::table('permission_role')->insert([
            ['permission_id' => 3, 'role_id' => 4], //Ler Inscrições
            ['permission_id' => 4, 'role_id' => 4],
            ['permission_id' => 5, 'role_id' => 4], //Ler Submissões
            ['permission_id' => 6, 'role_id' => 4],
        ]);

        //Ouvinte = 5
        DB::table('permission_role')->insert([
            ['permission_id' => 3, 'role_id' => 5],  //Ler Inscrições
            ['permission_id' => 4, 'role_id' => 5]
        ]);

    }
}
