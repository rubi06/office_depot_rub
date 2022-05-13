<?php

namespace Database\Seeders;

use App\Models\ProductSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Product::truncate();

		$csvFile = fopen(base_path("storage/secciones-productos.csv"), "r");

		$firstline = true;
		while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
			if (!$firstline) {
				ProductSection::create([
					"section_id" => $data['0'],
					"product_id" => $data['1']
				]);
			}
			$firstline = false;
		}

		fclose($csvFile);
    }
}
