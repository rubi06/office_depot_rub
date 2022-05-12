<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('section_price', function (Blueprint $table) {
			$table->unsignedBigInteger('section_id');
			$table->unsignedBigInteger('price_id');
			$table->foreign('section_id')->references('id')->on('sections');
			$table->foreign('price_id')->references('id')->on('prices');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}
};
