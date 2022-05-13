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
			ProductSection::class,
		]);
	}
}
