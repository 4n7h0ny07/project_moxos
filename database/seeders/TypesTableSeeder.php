<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('types')->delete();
        
        \DB::table('types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'images' => NULL,
                'marca_id' => 1,
                'type' => 'Motocicleta',
                'color' => '#00ff00',
                'observaciones' => NULL,
                'user_id' => 1,
                'created_at' => '2024-10-03 20:45:08',
                'updated_at' => '2024-10-03 20:47:45',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'images' => NULL,
                'marca_id' => 2,
                'type' => 'Moto Deportiva',
                'color' => '#008000',
                'observaciones' => NULL,
                'user_id' => 1,
                'created_at' => '2024-10-03 20:47:17',
                'updated_at' => '2024-10-03 21:15:06',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'images' => NULL,
                'marca_id' => 1,
                'type' => 'Trabajo',
                'color' => '#000000',
                'observaciones' => NULL,
                'user_id' => 1,
                'created_at' => '2024-10-04 14:37:45',
                'updated_at' => '2024-10-04 14:37:45',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'images' => NULL,
                'marca_id' => 1,
                'type' => 'Serna - Trabajo',
                'color' => '#000000',
                'observaciones' => NULL,
                'user_id' => 1,
                'created_at' => '2024-10-04 14:38:14',
                'updated_at' => '2024-10-04 14:38:14',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}