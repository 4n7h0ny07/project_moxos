<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GruposTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('grupos')->delete();
        
        \DB::table('grupos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => NULL,
                'code' => '81',
                'name' => 'Mtri-Personal',
                'description' => NULL,
                'created_at' => '2024-06-18 15:55:00',
                'updated_at' => '2024-06-18 18:56:57',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'image' => NULL,
                'code' => '90',
                'name' => 'Mscz-Personal',
                'description' => NULL,
                'created_at' => '2024-06-18 15:56:00',
                'updated_at' => '2024-06-18 18:57:24',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'image' => NULL,
                'code' => '84',
                'name' => 'Mrib-Personal',
                'description' => NULL,
                'created_at' => '2024-06-18 18:54:00',
                'updated_at' => '2024-06-18 18:56:44',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'image' => NULL,
                'code' => '82',
                'name' => 'Mgya-Personal',
                'description' => NULL,
                'created_at' => '2024-06-18 18:54:00',
                'updated_at' => '2024-06-18 18:56:28',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'image' => NULL,
                'code' => '83',
                'name' => 'Msta-Personal',
                'description' => NULL,
                'created_at' => '2024-06-18 18:56:08',
                'updated_at' => '2024-06-18 18:56:08',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'image' => NULL,
                'code' => '1',
                'name' => 'Clientes Trinidad',
                'description' => NULL,
                'created_at' => '2024-06-18 18:59:57',
                'updated_at' => '2024-06-18 18:59:57',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'image' => NULL,
                'code' => '2',
                'name' => 'Clientes Guayaramerin',
                'description' => NULL,
                'created_at' => '2024-06-18 19:01:11',
                'updated_at' => '2024-06-18 19:01:11',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'image' => NULL,
                'code' => '3',
                'name' => 'Clientes Riberalta',
                'description' => NULL,
                'created_at' => '2024-06-18 19:01:30',
                'updated_at' => '2024-06-18 19:01:30',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'image' => NULL,
                'code' => '4',
                'name' => 'Clientes Santa Ana',
                'description' => NULL,
                'created_at' => '2024-06-18 19:01:45',
                'updated_at' => '2024-06-18 19:01:45',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'image' => NULL,
                'code' => '5',
                'name' => 'Clientes Santa Cruz',
                'description' => NULL,
                'created_at' => '2024-06-18 19:02:12',
                'updated_at' => '2024-06-18 19:02:12',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}