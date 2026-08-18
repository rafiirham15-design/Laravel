<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PelangganFactory extends Factory
{
    protected $model = \App\Models\Pelanggan::class;

    public function definition()
    {
        return [
            'nama_lengkap' => $this->faker->name(),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'no_hp' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),
        ];
    }
}