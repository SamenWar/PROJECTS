<?php

namespace Database\Seeders;

use App\Models\project;
use App\Models\task;
use App\Models\User;
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
        //User::factory(10)->create();
        //project::factory(50)->create();
        task::factory(100)->create();
    }
}
