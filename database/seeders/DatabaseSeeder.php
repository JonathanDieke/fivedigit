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
         \App\Models\city::factory(10)->create();
         \App\Models\commune::factory(100)->create();
         \App\Models\hospital::factory(100)->create();
         \App\Models\father::factory(50)->create();
         \App\Models\mother::factory(50)->create();
         \App\Models\child::factory(50)->create();
         \App\Models\mayor::factory(100)->create();
         \App\Models\claimant::factory(10)->create();
         \App\Models\document::factory(50)->create();
        //  \App\Models\request::factory(50)->create();
    }
}
