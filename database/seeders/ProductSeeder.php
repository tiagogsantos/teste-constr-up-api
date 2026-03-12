<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Notebook Dell Inspiron 15',
                'description' => 'Notebook com processador Intel Core i7, 16GB RAM, SSD 512GB.',
                'brand' => 'Dell',
                'price' => 4599.90,
                'stock' => 15,
            ],
            [
                'name' => 'Smartphone Samsung Galaxy S23',
                'description' => 'Smartphone com tela AMOLED 6.1", 128GB, câmera 50MP.',
                'brand' => 'Samsung',
                'price' => 3299.00,
                'stock' => 30,
            ],
            [
                'name' => 'Teclado Mecânico Redragon',
                'description' => 'Teclado mecânico gamer com switch blue, RGB, ABNT2.',
                'brand' => 'Redragon',
                'price' => 299.90,
                'stock' => 50,
            ],
            [
                'name' => 'Monitor LG 27" 4K',
                'description' => 'Monitor IPS 4K UHD, 60Hz, HDR10, USB-C.',
                'brand' => 'LG',
                'price' => 2199.00,
                'stock' => 10,
            ],
            [
                'name' => 'Mouse Logitech MX Master 3',
                'description' => 'Mouse sem fio ergonômico, 4000 DPI, recarga USB-C.',
                'brand' => 'Logitech',
                'price' => 599.00,
                'stock' => 25,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
