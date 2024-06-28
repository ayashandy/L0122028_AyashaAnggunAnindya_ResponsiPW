<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kucing>
 */
class KucingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jenisKucing = [
            'Siamese',
            'Maine Coon',
            'Bengal',
            'Sphynx',
            'Savannah',
            'Ragdoll',
            'Birman',
            'Russian Blue',
            'Anggora',
        ];


        return [
            'nama' => fake()->firstName(),
            'umur' => fake()->numberBetween(1, 5),
            'jenis' => fake()->randomElement($jenisKucing),
        ];
    }
}
