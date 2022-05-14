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
		// *********************************************************************
		// **                        Layout 01
		// *********************************************************************
		
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
			],
			'section3' => [
				'num_prices' => 1,
			],
			'section4' => [
				'num_prices' => 1,
			],
			'section5' => [
				'num_prices' => 1,
			],
			'section6' => [
				'num_prices' => 1,
			],
			'section7' => [
				'num_prices' => 1,
			],
			'section8' => [
				'num_prices' => 1,
			],
			'section9' => [
				'num_prices' => 1,
			],
			'section10' => [
				'num_prices' => 1,
			],
			'section11' => [
				'num_prices' => 4,
			],
			'section12' => [
				'num_prices' => 3,
			],
			'section13' => [
				'num_prices' => 3,
			],
			'section14' => [
				'num_prices' => 4,
			],
			'section15' => [
				'num_prices' => 3,
			],
			'section16' => [
				'num_prices' => 7,
			],
			'section17' => [
				'num_prices' => 2,
			],
			'section18' => [
				'num_prices' => 2,
			],
			'section19' => [
				'num_prices' => 2,
			],
			'section20' => [
				'num_prices' => 2,
			],
			'section21' => [
				'num_prices' => 2,
			],
			'section22' => [
				'num_prices' => 3,
			],
			'section23' => [
				'num_prices' => 3,
			],
			'section24' => [
				'num_prices' => 6,
			],
			'section24' => [
				'num_prices' => 2,
			],
		];

		Layout::create([
			'name' => 'Layout 1x1',
			'options' => json_encode($options)
		]);
	}
}
