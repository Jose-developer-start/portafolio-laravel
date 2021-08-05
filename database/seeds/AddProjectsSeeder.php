<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('projects')->insert([
            'title' => 'Mi primer proyecto',
            'url' => 'Descripcion-del-primer-proyecto',
            'description' => 'Descripcion del primer proyecto'
        ]);
        DB::table('projects')->insert([
            'title' => 'Mi segundo proyecto',
            'url' => 'Descripcion-del-segundo-proyecto',
            'description' => 'Descripcion del segundo proyecto'
        ]);
        DB::table('projects')->insert([
            'title' => 'Mi tercer proyecto',
            'url' => 'Descripcion-del-tercero-proyecto',
            'description' => 'Descripcion del tercer proyecto'
        ]);
    }
}
