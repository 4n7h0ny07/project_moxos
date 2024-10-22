<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'site',
                'created_at' => '2024-10-02 22:12:55',
                'updated_at' => '2024-10-02 22:13:09',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'site_fotter',
                'created_at' => '2024-10-04 14:50:16',
                'updated_at' => '2024-10-04 14:50:16',
            ),
        ));
        
        
    }
}