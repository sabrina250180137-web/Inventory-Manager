<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Buat Kategori Dummy
        $elektronik = Category::create(['name' => 'Elektronik']);
        $pakaian = Category::create(['name' => 'Pakaian']);

        // Buat Produk Dummy
        Product::create([
            'category_id' => $elektronik->id,
            'name' => 'Laptop Asus',
            'stock' => 10,
            'price' => 8500000.00,
        ]);

        Product::create([
            'category_id' => $pakaian->id,
            'name' => 'Kaos Polos Cotton',
            'stock' => 50,
            'price' => 45000.00,
        ]);
    }
}