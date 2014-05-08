<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wine', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->unique();
			$table->integer('country_id')->unsigned();
			$table->integer('region_id')->unsigned();
			$table->integer('subregion_id')->unsigned();
			$table->integer('vintage_id')->unsigned();
			$table->integer('grape_id')->unsigned();
			$table->integer('color_id')->unsigned();
			$table->integer('classification_id')->unsigned();
			$table->integer('varietal_id')->unsigned();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wine');
	}

}
