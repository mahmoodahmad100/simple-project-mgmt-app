<?php

namespace Core\Tracker\Database\Factories;

use Core\Tracker\Models\Record as Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project_id' => 1,
            'time'       => '01:30:00',
            'comment'    => $this->faker->text(100),
            'via'        => $this->faker->randomElement(['stopwatch','manually']),
        ];
    }
}