<?php

namespace Database\Seeders;

use App\Models\Tasks;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('tasks')->insert([
            'title' => 'Lupita Smith',
            'description' => 'lupita@gmail.com description description',
        ]);


    }
}
