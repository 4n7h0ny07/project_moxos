<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActaEntregasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('acta_entregas')->delete();
        
        
        
    }
}