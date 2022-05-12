<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Price::truncate();

		$csvFile = fopen(base_path("storage/app/public/precios.csv"), "r");

		$firstline = true;
		while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
			if (!$firstline) {
				Price::create([
					"product" => $data['0'],
					"price" => $data['1']
				]);
			}
			$firstline = false;
		}

		fclose($csvFile);
	}
}
