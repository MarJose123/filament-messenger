<?php

namespace MarJose123\FilamentMessenger\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use MarJose123\FilamentMessenger\Models\MessengerMessages;

class MessengerMessagesFactory extends Factory
{
    protected $model = MessengerMessages::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'from_id' => $this->faker->randomNumber(),
            'to_id' => $this->faker->randomNumber(),
            'message' => $this->faker->word(),
            'attachment' => $this->faker->word(),
            'seen' => $this->faker->boolean(),
        ];
    }
}
