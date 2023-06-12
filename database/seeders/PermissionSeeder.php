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
            'id' => 1,
            'name' => 'Ler Usuários',
            'guard_name' => 'read_users',
        ]);
        DB::table('permissions')->insert([
            'id' => 2,
            'name' => 'Escrever Usuários',
            'guard_name' => 'write_users',
        ]);

        DB::table('permissions')->insert([
            'id' => 3,
            'name' => 'Ler Inscrições',
            'guard_name' => 'read_inscriptions',
        ]);
        DB::table('permissions')->insert([
            'id' => 4,
            'name' => 'Escrever Inscrições',
            'guard_name' => 'write_inscriptions',
        ]);

        DB::table('permissions')->insert([
            'id' => 5,
            'name' => 'Ler Submissões',
            'guard_name' => 'read_submissions',
        ]);
        DB::table('permissions')->insert([
            'id' => 6,
            'name' => 'Escrever Submissões',
            'guard_name' => 'write_submissions',
        ]);

        DB::table('permissions')->insert([
            'id' => 7,
            'name' => 'Ler Avaliações',
            'guard_name' => 'read_avaliantions',
        ]);
        DB::table('permissions')->insert([
            'id' => 8,
            'name' => 'Escrever Avaliações',
            'guard_name' => 'write_avaliantions',
        ]);

        //permission_role
        //Administrador = 2
        DB::table('permission_role')->insert([
            'permission_id' => 1,
            'role_id' => 2,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 2,
            'role_id' => 2,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 3, //Ler Inscrições
            'role_id' => 2,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 4,
            'role_id' => 2,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 5,
            'role_id' => 2,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 7,
            'role_id' => 2,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 8,
            'role_id' => 2,
        ]);

        //Avaliador = 3
        DB::table('permission_role')->insert([
            'permission_id' => 5, //Ler Submissões
            'role_id' => 3,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 7, //Ler Avaliações
            'role_id' => 3,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 8,
            'role_id' => 3,
        ]);

        //Pesquisador = 4

        DB::table('permission_role')->insert([
            'permission_id' => 3, //Ler Inscrições
            'role_id' => 4,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 5, //Ler Submissões
            'role_id' => 4,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 6,
            'role_id' => 4,
        ]);

        //Ouvinte = 5

        DB::table('permission_role')->insert([
            'permission_id' => 3, //Ler Inscrições
            'role_id' => 5,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 4,
            'role_id' => 5,
        ]);

    }
}
