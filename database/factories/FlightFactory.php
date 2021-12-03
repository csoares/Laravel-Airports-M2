<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Flight;
use App\Models\Airport;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;


class FlightFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Flight::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reference' => Str::upper(Str::random(3)),
            'brand' => Arr::random(array("Boeing","Airbus")),
            'capacity'=> rand(0, 250),
            'airport_id'=> Airport::all()->random()->id,
        ];
    }
}
