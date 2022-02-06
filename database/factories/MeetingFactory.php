<?php

namespace Database\Factories;

use App\Models\Meeting;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MeetingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Meeting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $startDate = $this->faker->dateTimeThisDecade();

        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraphs(4, true),
            'short_description' => $this->faker->paragraph(2),

            'image_url' => $this->faker->imageUrl(),
            'start_date' => $startDate,
            'end_date' => $startDate,

            'location_description' => $this->faker->sentence(),
            'lat' => $this->faker->latitude(),
            'lng' => $this->faker->longitude(),

            'author_id' => User::query()
                ->inRandomOrder()
                ->limit(1)
                ->first()
        ];
    }
}
