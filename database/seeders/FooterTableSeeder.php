<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FooterTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('footer')->delete();
        
        \DB::table('footer')->insert(array (
            0 => 
            array (
                'id' => 1,
                'contact_detail' => '<div>Ini contact detail</div>',
                'created_at' => '2024-01-06 01:42:27',
                'updated_at' => '2024-01-06 02:29:43',
            ),
        ));
        
        
    }
}