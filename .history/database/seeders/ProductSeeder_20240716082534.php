<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    // php artisan db:seed --class=ProductSeeder

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Sample Product 1',
            'description' => 'This is a sample product.',
            'price' => 9.99,
            'stock' => 100
        ]);

        Product::create([
            'name' => 'Sample Product 2',
            'description' => 'This is another sample product.',
            'price' => 19.99,
            'stock' => 50
        ]);
    }
}
