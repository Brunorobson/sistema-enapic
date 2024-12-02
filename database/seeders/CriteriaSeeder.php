<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('criterias')->insert([
            ['id' => 1, 'axle_id' => 1, 'name' => 'Como você avalia a clareza e relevância do Problema Pesquisado?', 'created_at' => date('y-m-d h:i:s')],
            ['id' => 2, 'axle_id' => 1, 'name' => 'Como você avalia a metodologia de pesquisa utilizada?', 'created_at' => date('y-m-d h:i:s')],
            ['id' => 3, 'axle_id' => 1, 'name' => 'Como você avalia o desenvolvimento e os resultados alcançados na pesquisa?', 'created_at' => date('y-m-d h:i:s')],
            ['id' => 4, 'axle_id' => 1, 'name' => 'Como você avalia as considerações finais apresentadas?', 'created_at' => date('y-m-d h:i:s')],
            ['id' => 5, 'axle_id' => 1, 'name' => 'Como você avalia o domínio do pesquisador em relação ao tema pesquisado?', 'created_at' => date('y-m-d h:i:s')],
            ['id' => 6, 'axle_id' => 1, 'name' => 'Como você avalia a apresentação oral do pesquisador?', 'created_at' => date('y-m-d h:i:s')],
            ['id' => 7, 'axle_id' => 2, 'name' => 'Como você avalia a relevância da temática sendo pesquisada?', 'created_at' => date('y-m-d h:i:s')],
            ['id' => 8, 'axle_id' => 2, 'name' => 'Como você avalia a clareza textual do banner?', 'created_at' => date('y-m-d h:i:s')],
            ['id' => 9, 'axle_id' => 2, 'name' => 'Como você avalia os resultados parciais apresentados na pesquisa?', 'created_at' => date('y-m-d h:i:s')],
            ['id' => 10, 'axle_id' => 2, 'name' => 'Como você avalia a apresentação visual do banner?', 'created_at' => date('y-m-d h:i:s')],
            ['id' => 11, 'axle_id' => 2, 'name' => 'Como você avalia o domínio dos pesquisadores sobre o tema?', 'created_at' => date('y-m-d h:i:s')],
        ]);
    }
}
