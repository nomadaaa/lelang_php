<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
					'no_product'  => '01AB',
					'nama' 			  => 'DA Gaming keyboard',
          'stok' 			  => '5',
					'category_id' => '1',
					'harga' 			=> '200000',
					'gambar'			=> 'keyboard.jpg'
				]);
    }
}
