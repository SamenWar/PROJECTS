<?php

namespace Database\Factories;

use App\Models\task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'title'=>$this->faker->name(),
            'project_id'=>$this->faker->numberBetween(1,9),
            'deskription'=>$this->faker->text()
        ];
    }
}
