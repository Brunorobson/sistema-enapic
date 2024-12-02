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
            ['id' => 1, 'module_id' => 1, 'name' => 'Ver', 'guard_name' => 'read_dashboard'],
            ['id' => 2, 'module_id' => 2, 'name' => 'Ver', 'guard_name' => 'read_profile'],

            ['id' => 3, 'module_id' => 3, 'name' => 'Ver', 'guard_name' => 'read_users'],
            ['id' => 4, 'module_id' => 3, 'name' => 'Criar/Editar', 'guard_name' => 'write_users'],

            ['id' => 5, 'module_id' => 4, 'name' => 'Ver', 'guard_name' => 'read_roles'],
            ['id' => 6, 'module_id' => 4, 'name' => 'Criar/Editar', 'guard_name' => 'write_roles'],

            ['id' => 7, 'module_id' => 5, 'name' => 'Ler Inscrições', 'guard_name' => 'read_inscriptions'],
            ['id' => 8, 'module_id' => 5, 'name' => 'Escrever Inscrições', 'guard_name' => 'write_inscriptions'],

            ['id' => 9, 'module_id' => 6, 'name' => 'Ler Submissões', 'guard_name' => 'read_submissions'],
            ['id' => 10, 'module_id' => 6, 'name' => 'Escrever Submissões', 'guard_name' => 'write_submissions'],

            ['id' => 11, 'module_id' => 7, 'name' => 'Ler Avaliações', 'guard_name' => 'read_avaliantions'],
            ['id' => 12, 'module_id' => 7, 'name' => 'Escrever Avaliações', 'guard_name' => 'write_avaliantions'],

            ['id' => 13, 'module_id' => 8, 'name' => 'Ler Eventos', 'guard_name' => 'read_events'],
            ['id' => 14, 'module_id' => 8, 'name' => 'Escrever Eventos', 'guard_name' => 'write_events'],

            ['id' => 15, 'module_id' => 9, 'name' => 'Ler Critérios', 'guard_name' => 'read_criterias'],
            ['id' => 16, 'module_id' => 9, 'name' => 'Escrever Critérios', 'guard_name' => 'write_criterias'],
        ]);

        //permission_role
        //Administrador = 2
        DB::table('permission_role')->insert([
            ['permission_id' => 1, 'role_id' => 2],
            ['permission_id' => 2, 'role_id' => 2],
            ['permission_id' => 3, 'role_id' => 2],
            ['permission_id' => 5, 'role_id' => 2],
            ['permission_id' => 6, 'role_id' => 2],
            ['permission_id' => 7, 'role_id' => 2],
            ['permission_id' => 8, 'role_id' => 2],
            ['permission_id' => 9, 'role_id' => 2],
            ['permission_id' => 10, 'role_id' => 2],
            ['permission_id' => 11, 'role_id' => 2],
            ['permission_id' => 12, 'role_id' => 2],
            ['permission_id' => 13, 'role_id' => 2],
            ['permission_id' => 14, 'role_id' => 2],
            ['permission_id' => 15, 'role_id' => 2],
            ['permission_id' => 16, 'role_id' => 2],
        ]);

        //Comisssão = 3
        DB::table('permission_role')->insert([
            ['permission_id' => 1, 'role_id' => 3],
            ['permission_id' => 2, 'role_id' => 3],
            ['permission_id' => 5, 'role_id' => 3],
            ['permission_id' => 7, 'role_id' => 3],
            ['permission_id' => 8, 'role_id' => 3],
            ['permission_id' => 9, 'role_id' => 3],
            ['permission_id' => 10, 'role_id' => 3],
            ['permission_id' => 11, 'role_id' => 3],
            ['permission_id' => 12, 'role_id' => 3],
            ['permission_id' => 13, 'role_id' => 3],
            ['permission_id' => 15, 'role_id' => 3],
            ['permission_id' => 16, 'role_id' => 3],
        ]);

        //Avaliador = 4
        DB::table('permission_role')->insert([//Ler Submissões
            ['permission_id' => 1, 'role_id' => 4],
            ['permission_id' => 2, 'role_id' => 4],
            ['permission_id' => 11, 'role_id' => 4],//Ler Avaliações
            ['permission_id' => 12, 'role_id' => 4],
            ['permission_id' => 15, 'role_id' => 4],
        ]);

        //Participante = 5
        DB::table('permission_role')->insert([
            ['permission_id' => 1, 'role_id' => 5],
            ['permission_id' => 2, 'role_id' => 5],
            ['permission_id' => 7, 'role_id' => 5], //Ler Inscrições
            ['permission_id' => 9, 'role_id' => 5], //Ler Submissões
            ['permission_id' => 10, 'role_id' => 5],
        ]);

        //Pré-inscrito = 6
        DB::table('permission_role')->insert([
            ['permission_id' => 1, 'role_id' => 6],
            ['permission_id' => 2, 'role_id' => 6],
            ['permission_id' => 7, 'role_id' => 6],  //Ler Inscrições
            ['permission_id' => 9, 'role_id' => 6]
        ]);

    }
}
