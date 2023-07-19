<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class XXXTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\XXXTransaction::factory()->count(10)->create();
    }
}
