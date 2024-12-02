<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AxlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('axles')->insert([
            'id' => 1,
            'name' => 'EIXO 1 – Seminário de Iniciação Científica',
            'description' => 'Ciclo de apresentações orais (presenciais ou virtuais) de trabalhos produzidos a partir de pesquisas de estudantes, professores e/ou pesquisadores.',
            'created_at' => date('y-m-d h:i:s')
        ]);
        DB::table('axles')->insert([
            'id' => 2,
            'name' => 'EIXO 2 – Mostra de Trabalhos de Iniciação Científica',
            'description' => 'Apresentação de trabalhos produzidos a partir de pesquisas em desenvolvimento por professores, pesquisadores e estudantes.',
            'created_at' => date('y-m-d h:i:s')
        ]);
        DB::table('axles')->insert([
            'id' => 3,
            'name' => 'EIXO 3 – Mostra de Projetos Integradores de Graduação',
            'description' => 'Apresentação de trabalhos desenvolvidos no âmbito dos Projetos Integradores de graduação dos cursos da Faculdade de Balsas ou de projetos integradores ou de extensão de outras IES, os quais tenham gerado alguma produção acadêmica.',
            'created_at' => date('y-m-d h:i:s')
        ]);
    }
}
