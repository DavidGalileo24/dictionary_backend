<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Company;
use Illuminate\Database\Seeder;
use \App\Models\Country;
use App\Models\State;
use App\Models\UserCustomer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Country::factory(7)->create();
        State::factory(7)->create();
        Company::factory(25)->create();
        UserCustomer::factory(100)->create();
    }
}
