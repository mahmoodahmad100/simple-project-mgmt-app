<?php

namespace Core\Tracker\Database\Factories;

use Core\Tracker\Models\Project as Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
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
            'name'        => $this->faker->text(100),
            'description' => $this->faker->text(100),
            'deadline'    => date('Y-m-d'),
        ];
    }
}
