<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FooterLinkTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('footer_link')->delete();
        
        \DB::table('footer_link')->insert(array (
            0 => 
            array (
                'id' => 2,
                'image' => '1_1704508386.png',
                'title' => 'Instagram',
                'link' => 'https://instagram.com',
                'footer_id' => 1,
                'created_at' => '2024-01-06 02:33:06',
                'updated_at' => '2024-01-06 02:33:06',
            ),
        ));
        
        
    }
}