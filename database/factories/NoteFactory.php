<?php

namespace Database\Factories;

use App\Models\Note;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * The name of the factory corresponding model.
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->numberBetween(1, 999),
            'user_id' => User::query()->firstOr(
                fn () => User::factory()->create(),
            ),
            'is_public' => $this->faker->numberBetween(1, 0),
            'title' => $this->faker->word(),
            'content' => $this->faker->sentence($this->faker->numberBetween(4, 10)),
            'created_at' => Carbon::now()->format('Y-m-d H:m:i'),
            'updated_at' => Carbon::now()->format('Y-m-d H:m:i'),
        ];
    }
}
