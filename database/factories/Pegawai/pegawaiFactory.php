<?php

namespace Database\Factories\Pegawai;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai\pegawai>
 */
class pegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $id_pegawai = 'P' . $this->faker->randomNumber(4);
        return [
            'id' => Str::uuid(), 
            'id_pegawai' => $id_pegawai,
            'nama_pegawai' => $this->faker->name(),
            'penempatan' => $this->faker->randomElement([1,2]),
            'jabatan' => $this->faker->randomElement(['manager', 'supervisor', 'staff']),
        ];
    }
}
