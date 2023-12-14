<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hero>
 */
class HeroFactory extends Factory
{
    use HasFactory;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $d = Player::count();
        $he = [
            'Layla',
    'Zilong',
    'Balmond',
    'Nana',
    'Saber',
    'Alice',
    'Gord',
    'Franco',
    'Miya',
    'Eudora',
    'Karina',
    'Minotaur',
    'Sun',
    'Aurora',
    'Roger',
    'Alucard',
    'Lapu-Lapu',
    'Lolita',
    'Hayabusa',
    'Freya',
    'Karrie',
    'Johnson',
    'Martis',
    'Lesley',
    'Chou',
    'Gatotkaca',
    'Vexana',
    'Kagura',
    'Hilda',
        ];
    $ty = [
        'Tank',
        'Mage',
        'Marksman',
        'Fighter',
        'Support',
        'Assassin'
    ];
        return [
            'player_id' => fake()->numberBetween(1,$d),
            'hero_name' => fake()->randomElement($he),
            'hero_type' => fake()->randomElement($ty),
        ];
    }
}
