<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call([
			ProductSeeder::class,
			SectionSeeder::class,
			StoreSeeder::class,
			LayoutSeeder::class,
			//ProductSectionSeeder::class,
		]);

		/*DB::table('product_section')->insert(['product_id' => 1,'section_id' => 1]);
		DB::table('product_section')->insert(['product_id' => 2,'section_id' => 1]);
		DB::table('product_section')->insert(['product_id' => 3,'section_id' => 1]);
		DB::table('product_section')->insert(['product_id' => 4,'section_id' => 1]);
		DB::table('product_section')->insert(['product_id' => 5,'section_id' => 1]);*/


	}
}
