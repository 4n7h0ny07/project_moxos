<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BajasActivosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bajas_activos')->delete();
        
        
        
    }
}