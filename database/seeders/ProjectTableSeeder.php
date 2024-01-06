<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project')->delete();
        
        \DB::table('project')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '1_1704470015.png',
                'title' => 'Laracom-pro',
                'description' => '<div>A dynamic company profile</div>',
                'category_id' => 3,
                'created_at' => '2024-01-05 15:53:36',
                'updated_at' => '2024-01-05 16:39:49',
            ),
        ));
        
        
    }
}