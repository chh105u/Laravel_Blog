<?php

namespace Database\Factories;

use App\Models\CRUD;
use Illuminate\Database\Eloquent\Factories\Factory;

class CRUDFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CRUD::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->name,
            'content'=>$this->faker->title,
        ];
    }
}
