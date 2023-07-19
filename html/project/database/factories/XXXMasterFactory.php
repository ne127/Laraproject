<?php

namespace Database\Factories;

use App\Models\XXXMaster;

use Illuminate\Database\Eloquent\Factories\Factory;

class XXXMasterFactory extends Factory
{
    protected $model = XXXMaster::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->firstName,
            'title' => $this->faker->city,

        ];
    }
}
