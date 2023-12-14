<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    use HasFactory;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $aw = Team::count();
        $r = [
            'Warrior',
            'Elite',
            'Master',
            'Grandmaster',
            'Epic',
            'Legend',
            'Mythic',
            'Mythical Glory'
        ];
        $ro = [
            'Gold lane',
            'Roamer',
            'Exp lane',
            'Mid lane',
            'Jungler'
        ];
        return [
           'team_id' => fake()->numberBetween(1,$aw),
           'name' => fake()->firstName(),
           'ingame_name' => fake()->name(),
           'rank' => fake()->randomElement($r),
           'role' => fake()->randomElement($ro)
        ];
    }
}
