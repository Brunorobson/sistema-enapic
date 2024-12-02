<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            'id' => 1,
            'name' => 'ENAPIC 2023',
            'description' => 'Um evento onde VOCÊ ESTUDANTE pode submeter e apresentar trabalhos científicos, mostrando o resultado das suas pesquisas. Além disso, você participa de diversas palestras e aumenta ainda mais seu conhecimento.',
            'active' => true,
            'created_at' => date('y-m-d h:i:s')
        ]);
    }
}
