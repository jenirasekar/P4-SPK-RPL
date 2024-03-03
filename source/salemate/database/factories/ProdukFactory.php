<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_produk' => $this->faker->bothify('Product-???-###'),
            'stok' => $this->faker->numberBetween(500, 1000),
            'harga' => $this->faker->numberBetween(1000,  50000),
            'id_kategori' => Kategori::factory(),
            'gambar' => $this->faker->imageUrl
        ];
    }
}
