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
         \App\Models\city::factory(5)->create();
         \App\Models\commune::factory(25)->create();
         \App\Models\hospital::factory(25)->create();
         \App\Models\father::factory(5)->create();
         \App\Models\mother::factory(5)->create();
         \App\Models\child::factory(5)->create();
         \App\Models\mayor::factory(25)->create();
         \App\Models\claimant::factory(10)->create();
         \App\Models\document::factory(10)->create();
        //  \App\Models\request::factory(50)->create();
    }
}
