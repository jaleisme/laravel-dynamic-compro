<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AboutTableSeeder::class);
        $this->call(AlasanTableSeeder::class);
        $this->call(BlogCategoryTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(ClientTableSeeder::class);
        $this->call(GalleryTableSeeder::class);
        $this->call(HeroTableSeeder::class);
        $this->call(LayananTableSeeder::class);
        $this->call(MapsTableSeeder::class);
        $this->call(ProjectCategoryTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(FooterTableSeeder::class);
        $this->call(FooterLinkTableSeeder::class);
    }
}
