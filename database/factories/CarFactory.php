<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    private function generateRandomImage($path)
    {
        $files = scandir($path);
        $files = array_diff($files, array('.', '..'));
        return fake()->randomElement($files);
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'carTitle' => fake()->randomElement(['BMW', 'SuprAaa', 'nobelSmart']),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(1),
            'pub' => fake()->numberBetween(0, 1),
            #'image' => basename(fake()->image(public_path('assets/images/product'))),
            'image' => $this->generateRandomImage(public_path('assets/images/')),
            'catID' => fake()->numberBetween(1, 10),
        ];
        }
}
