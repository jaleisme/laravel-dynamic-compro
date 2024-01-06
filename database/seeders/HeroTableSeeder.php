<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HeroTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('hero')->delete();
        
        \DB::table('hero')->insert(array (
            0 => 
            array (
                'id' => 2,
                'image' => '1_1704472904.png',
                'title' => 'Perfeksionalitas Tanpa Batas',
                'subtitle' => 'Kami Menyediakan Layanan Konsultasi IT,  Pembuatan Web, Aplikasi Mobile Dll.',
                'is_active' => 1,
                'created_at' => '2024-01-05 07:16:38',
                'updated_at' => '2024-01-05 16:41:44',
            ),
        ));
        
        
    }
}