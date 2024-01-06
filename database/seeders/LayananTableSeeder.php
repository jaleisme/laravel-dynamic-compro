<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LayananTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('layanan')->delete();
        
        \DB::table('layanan')->insert(array (
            0 => 
            array (
                'id' => 4,
                'image' => '1_1704439727.png',
                'title' => 'Web Development',
                'description' => 'Melalui web development, kami siap menyediakan solusi tepat guna untuk bisnis anda.',
                'is_active' => 1,
                'created_at' => '2024-01-05 07:28:47',
                'updated_at' => '2024-01-05 07:28:47',
            ),
            1 => 
            array (
                'id' => 5,
                'image' => '1_1704439755.png',
                'title' => 'UI/UX Design',
                'description' => 'Melalui UI/UX Design, kami siap menyediakan solusi tepat guna untuk bisnis anda.',
                'is_active' => 1,
                'created_at' => '2024-01-05 07:29:15',
                'updated_at' => '2024-01-05 07:29:15',
            ),
            2 => 
            array (
                'id' => 6,
                'image' => '1_1704439840.png',
                'title' => 'Mobile Development',
                'description' => 'Melalui mobile development, kami siap menyediakan solusi tepat guna untuk bisnis anda.',
                'is_active' => 1,
                'created_at' => '2024-01-05 07:30:40',
                'updated_at' => '2024-01-05 07:30:40',
            ),
        ));
        
        
    }
}