<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Store::truncate();

		$csvFile = fopen(base_path("storage/app/public/prices.csv"), "r");

		$firstline = true;
		while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
			if (!$firstline) {
				Store::create([
					"product" => $data['0'],
					"price" => $data['1']
				]);
			}
			$firstline = false;
		}

		fclose($csvFile);
	}
}
