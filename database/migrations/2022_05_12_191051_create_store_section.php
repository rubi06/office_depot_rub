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
		Schema::create('store_section', function (Blueprint $table) {
			$table->unsignedBigInteger('store_id');
			$table->unsignedBigInteger('section_id');
			$table->foreign('store_id')->references('id')->on('stores');
			$table->foreign('section_id')->references('id')->on('sections');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('store_section');
	}
};
