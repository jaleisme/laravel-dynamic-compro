<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrator',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$w0ART0Ch3jroUqs1e2tIH.Zhebnw5n9mHYix7Fe7ielHFH8/3j5jm',
                'remember_token' => NULL,
                'created_at' => '2024-01-05 06:31:49',
                'updated_at' => '2024-01-05 06:31:49',
            ),
        ));
        
        
    }
}