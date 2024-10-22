<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'RRHH',
                'display_name' => 'recursos humanso',
                'created_at' => '2024-09-04 12:46:24',
                'updated_at' => '2024-09-04 12:46:24',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Cobranza',
                'display_name' => 'recuperacion',
                'created_at' => '2024-10-02 19:41:58',
                'updated_at' => '2024-10-02 19:41:58',
            ),
        ));
        
        
    }
}