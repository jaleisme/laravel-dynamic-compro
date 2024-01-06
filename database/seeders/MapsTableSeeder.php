<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MapsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('maps')->delete();
        
        \DB::table('maps')->insert(array (
            0 => 
            array (
                'id' => 1,
                'alias_name' => 'UIN Sunan Gunung Djati Bandung',
                'link' => 'https://www.google.com/maps/embed/v1/place?q=UIN+Sunan+Gunung+Djati+Bandung,+Jalan+A.H.+Nasution,+Cipadung+Wetan,+Bandung+City,+West+Java,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8',
                'is_active' => 1,
                'created_at' => '2024-01-05 06:47:25',
                'updated_at' => '2024-01-05 15:24:03',
            ),
        ));
        
        
    }
}