<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class XXXMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\XXXMaster::factory()->count(10)->create();
    }
}
