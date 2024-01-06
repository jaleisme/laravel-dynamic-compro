<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_category')->delete();
        
        \DB::table('project_category')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Web Programming',
                'created_at' => '2024-01-05 15:18:28',
                'updated_at' => '2024-01-05 15:33:47',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Mobile Development',
                'created_at' => '2024-01-05 15:27:19',
                'updated_at' => '2024-01-05 15:34:00',
            ),
        ));
        
        
    }
}