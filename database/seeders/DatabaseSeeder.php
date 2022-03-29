<?php

namespace Database\Seeders;

use App\Models\Comments;
use App\Models\Posts;
use App\Models\Tasks;
use App\Models\Dogs;
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
        //$this->call(TasksTableSeeder::class); // single record
        Tasks::factory()->count(3)->create();
        Posts::factory()->count(3)->create();
        Comments::factory()->count(3)->create();
        Dogs::factory()->count(3)->create();
    }
}
