<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('client')->delete();
        
        \DB::table('client')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '1_1704436941.png',
                'name' => 'KEMENPORA',
                'is_active' => 1,
                'created_at' => '2024-01-05 06:42:21',
                'updated_at' => '2024-01-05 06:42:21',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => '1_1704436965.png',
                'name' => 'PEMDA Lombok Barat',
                'is_active' => 1,
                'created_at' => '2024-01-05 06:42:45',
                'updated_at' => '2024-01-05 15:32:01',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => '1_1704436980.png',
                'name' => 'Bintan Education',
                'is_active' => 1,
                'created_at' => '2024-01-05 06:43:00',
                'updated_at' => '2024-01-05 06:43:00',
            ),
            3 => 
            array (
                'id' => 4,
                'image' => '1_1704436995.png',
                'name' => 'UNRAM',
                'is_active' => 1,
                'created_at' => '2024-01-05 06:43:15',
                'updated_at' => '2024-01-05 06:43:15',
            ),
            4 => 
            array (
                'id' => 5,
                'image' => '1_1704437008.png',
                'name' => 'KEMENPAREKRAF',
                'is_active' => 1,
                'created_at' => '2024-01-05 06:43:28',
                'updated_at' => '2024-01-05 06:43:28',
            ),
        ));
        
        
    }
}