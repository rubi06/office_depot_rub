<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
		//Product::truncate();

		$csvFile = fopen(base_path("storage/productos.csv"), "r");

		$firstline = true;
		while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
			if (!$firstline) {
				Product::create([
					"name" => $data['0'],
					"price" => $data['1']
				]);
			}
			$firstline = false;
		}

		fclose($csvFile);
	}
}
