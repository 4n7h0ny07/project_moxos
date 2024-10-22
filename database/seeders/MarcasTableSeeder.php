<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MarcasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('marcas')->delete();
        
        \DB::table('marcas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'images' => NULL,
                'marca' => 'Serna',
                'observaciones' => NULL,
                'user_id' => 1,
                'created_at' => '2024-10-03 19:55:37',
                'updated_at' => '2024-10-03 19:55:37',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'images' => NULL,
                'marca' => 'Benelli',
                'observaciones' => NULL,
                'user_id' => 1,
                'created_at' => '2024-10-03 19:55:53',
                'updated_at' => '2024-10-03 19:55:53',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'images' => NULL,
                'marca' => 'Kymco',
                'observaciones' => NULL,
                'user_id' => 1,
                'created_at' => '2024-10-03 19:56:08',
                'updated_at' => '2024-10-03 19:56:08',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'images' => NULL,
                'marca' => 'Kayo',
                'observaciones' => NULL,
                'user_id' => 1,
                'created_at' => '2024-10-03 19:56:29',
                'updated_at' => '2024-10-03 19:56:29',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'images' => NULL,
                'marca' => 'Aodes',
                'observaciones' => NULL,
                'user_id' => 1,
                'created_at' => '2024-10-03 19:56:49',
                'updated_at' => '2024-10-03 19:56:49',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'images' => NULL,
                'marca' => 'Keeway',
                'observaciones' => NULL,
                'user_id' => 1,
                'created_at' => '2024-10-03 19:57:18',
                'updated_at' => '2024-10-03 19:57:18',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}