<?php

namespace Database\Factories;
use App\Models\XXXTransaction;
use App\Models\XXXMaster;

use Illuminate\Database\Eloquent\Factories\Factory;

class XXXTransactionFactory extends Factory
{
    protected $model = XXXTransaction::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = XXXMaster::all()->random(1)[0]->id;
        return [
            //
            'up_id'=> $id,
            'content' => $this->faker->firstName,
            'date_time' => now(),
        ];
    }
}
