<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blog_category')->delete();
        
        \DB::table('blog_category')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Technology',
                'created_at' => '2024-01-05 22:35:59',
                'updated_at' => '2024-01-05 22:35:59',
            ),
        ));
        
        
    }
}