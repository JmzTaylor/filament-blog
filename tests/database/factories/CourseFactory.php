<?php

namespace Stephenjude\FilamentBlog\Tests\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Stephenjude\FilamentBlog\Models\Course;

class CourseFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Course::class;

    public function definition(): array
    {
        return [
            'title' => $title = $this->faker->unique()->sentence(4),
            'slug' => Str::slug($title),
            'content' => $this->faker->realText(),
            'published_at' => $this->faker->dateTimeBetween('-6 month', '+1 month'),
            'created_at' => $this->faker->dateTimeBetween('-1 year', '-6 month'),
            'updated_at' => $this->faker->dateTimeBetween('-5 month', 'now'),
        ];
    }
}
