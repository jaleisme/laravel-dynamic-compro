<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gallery')->delete();
        
        \DB::table('gallery')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '1_1704437057.png',
                'title' => 'Bareng anak-anak',
                'is_active' => 1,
                'created_at' => '2024-01-05 06:44:17',
                'updated_at' => '2024-01-05 06:44:17',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => '1_1704437075.png',
                'title' => 'Brainstorm',
                'is_active' => 1,
                'created_at' => '2024-01-05 06:44:35',
                'updated_at' => '2024-01-05 06:44:35',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => '1_1704437100.png',
                'title' => 'Gantian Presentasi',
                'is_active' => 1,
                'created_at' => '2024-01-05 06:45:00',
                'updated_at' => '2024-01-05 06:45:00',
            ),
            3 => 
            array (
                'id' => 4,
                'image' => '1_1704437121.png',
                'title' => 'UI/UX Designer',
                'is_active' => 1,
                'created_at' => '2024-01-05 06:45:21',
                'updated_at' => '2024-01-05 06:45:21',
            ),
            4 => 
            array (
                'id' => 5,
                'image' => '1_1704437139.png',
                'title' => 'Masih UI/UX Designer',
                'is_active' => 1,
                'created_at' => '2024-01-05 06:45:39',
                'updated_at' => '2024-01-05 06:45:39',
            ),
            5 => 
            array (
                'id' => 6,
                'image' => '1_1704437161.png',
                'title' => 'Lagi-lagi UI/UX',
                'is_active' => 1,
                'created_at' => '2024-01-05 06:46:01',
                'updated_at' => '2024-01-05 06:46:01',
            ),
            6 => 
            array (
                'id' => 7,
                'image' => '1_1704437190.png',
                'title' => 'Ngoding Bray',
                'is_active' => 1,
                'created_at' => '2024-01-05 06:46:30',
                'updated_at' => '2024-01-05 06:46:30',
            ),
            7 => 
            array (
                'id' => 8,
                'image' => '1_1704437210.png',
                'title' => 'Ngoding lagi bray',
                'is_active' => 1,
                'created_at' => '2024-01-05 06:46:50',
                'updated_at' => '2024-01-05 06:46:50',
            ),
            8 => 
            array (
                'id' => 9,
                'image' => '1_1704437226.png',
                'title' => 'Dashboard',
                'is_active' => 1,
                'created_at' => '2024-01-05 06:47:06',
                'updated_at' => '2024-01-05 06:47:06',
            ),
        ));
        
        
    }
}