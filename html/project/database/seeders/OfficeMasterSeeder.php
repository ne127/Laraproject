<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OfficeMaster;


class OfficeMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\OfficeMaster::factory()->count(10)->create();

    }
}
