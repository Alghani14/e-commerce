<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelanggan>
 */
class PelangganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_lengkap' => fake()->firstName(),
            'jenis_kelamin'=> fake()->randomElement(['laki-laki', 'perempuan']),
            'no_hp' => $this->faker->numerify('08##########'),
            'alamat_email' => fake()->freeEmail(),
        ];

    }
}
