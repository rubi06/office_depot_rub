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
		Schema::create('section_store', function (Blueprint $table) {
			$table->unsignedBigInteger('section_id');
			$table->unsignedBigInteger('store_id');
			$table->foreign('section_id')->references('id')->on('sections');
			$table->foreign('store_id')->references('id')->on('stores');
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
