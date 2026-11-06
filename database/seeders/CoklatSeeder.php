<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class CoklatSeeder extends Seeder
{
    public function run(): void
    {
        // Kategori = kolom "Jenis" di dashboard
        $cat = [];
        foreach (['White', 'Spesial', 'Milk', 'Dark', 'Praline', 'Kuverture & Bubuk'] as $name) {
            $cat[$name] = Category::create(['name' => $name])->id;
        }

        // [Jenis, Menu, Harga, Stok]
        $items = [
            ['White', 'White Chocolate Raspberry', 29000, 0],
            ['Spesial', 'Choco Almond', 30000, 0],
            ['Milk', 'Milk Caramel', 27000, 3],
            ['Dark', 'Extra Bitter 100%', 38000, 4],
            ['Praline', 'Truffle Dark', 52000, 5],
            ['Spesial', 'Ruby Chocolate', 45000, 6],
            ['Kuverture & Bubuk', 'Kuverture Callets', 60000, 7],
            ['Spesial', 'Gianduja', 42000, 8],
            ['Dark', 'Dark Chocolate 85%', 32000, 9],
            ['Praline', 'Praline Hazelnut', 48000, 10],
            ['White', 'White Chocolate Vanilla', 24000, 11],
            ['Dark', 'Dark Chocolate 70%', 25000, 12],
            ['Milk', 'Milk Hazelnut', 28000, 14],
            ['Kuverture & Bubuk', 'Cocoa Powder', 35000, 18],
            ['Milk', 'Milk Chocolate', 20000, 20],
        ];

        foreach ($items as [$c, $name, $price, $stock]) {
            Product::create([
                'category_id' => $cat[$c],
                'name' => $name,
                'price' => $price,
                'stock' => $stock,
            ]);
        }
    }
}