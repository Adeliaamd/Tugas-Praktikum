<?php

namespace Database\Factories;

use App\Models\dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DosenfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = dosen::class;
    public function definition(): array
    {
        return [
            'nip' => $this->faker->numerify('##########'),
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->sentence(),
            'jabatan' => $this->faker->sentence(),
        ];
    }
}
