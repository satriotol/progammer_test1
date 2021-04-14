<?php

use App\product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        product::create([
            'barcode' => 1111,
            'name' => 'APPLE'
        ]);
        product::create([
            'barcode' => 1122,
            'name' => 'PINAPPLE'
        ]);
    }
}
