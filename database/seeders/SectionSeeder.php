<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Section::truncate();

		$csvFile = fopen(base_path("storage/app/public/secciones.csv"), "r");

		$firstline = true;
		while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
			if (!$firstline) {
				Section::create([
					"name" => $data['0'],
					"description" => $data['1']
				]);
			}
			$firstline = false;
		}

		fclose($csvFile);
	}
}
