<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /** @var string * */
    protected $model = Project::class;

    /**
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => strtoupper($this->faker->bothify('???-#####')),
            'description' => $this->faker->realText(50),
        ];
    }
}

