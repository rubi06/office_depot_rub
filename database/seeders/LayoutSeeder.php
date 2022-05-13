<?php

namespace Database\Seeders;

use App\Models\Layout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayoutSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$options = [
			'root' => [
				'total_sections' => '2',
				'css' => [
					"layout.css",
				],
				'bk_image' => 'back.png'
			],
			'section1' => [
				'num_prices' => 5,
			],
			'section2' => [
				'num_prices' => 3,
			]
		];

		Layout::create([
			'name' => 'Layout 1x1',
			'options' => json_encode($options)
		]);
	}
}
