<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suppliers = [
            [
                'name' => 'Shein',
                'phone' => '098123123123'
            ],
            [
                'name' => 'Gucci',
                'phone' => '098123123123'
            ],
            [
                'name' => 'Zara',
                'phone' => '098123123123'
            ],
            [
                'name' => 'Nike',
                'phone' => '098123123123'
            ],
            [
                'name' => 'Adidas',
                'phone' => '098123123123'
            ],
        ];

        Supplier::insert($suppliers);
    }
}
