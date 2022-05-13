<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Section;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSection extends Seeder
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
				// $product = Product::findOrFail($data['1']);
				// $product->sections()->attach($data['0']);

				$section = Section::findorFail($data[0]);
				$section->products()->attach($data[1]);

				// DB::table('product_section')->insert(['product_id' => $data['1'],'section_id' => $data['0']]);
			}
			$firstline = false;
		}

		fclose($csvFile);
	}
}
