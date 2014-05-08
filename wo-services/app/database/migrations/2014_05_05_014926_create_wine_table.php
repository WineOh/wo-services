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
		Schema::create('country', function(Blueprint $table)
		{
			$table->increments('id')->primary();
			$table->string('name')->unique();
			$table->timestamps();
		});

		Schema::create('region', function(Blueprint $table)
		{
			$table->increments('id')->primary();
			$table->string('name')->unique();
			$table->timestamps();
		});

		Schema::create('subregion', function(Blueprint $table)
		{
			$table->increments('id')->primary();
			$table->string('name')->unique();
			$table->timestamps();
		});

		Schema::create('vintage', function(Blueprint $table)
		{
			$table->increments('id')->primary();
			$table->integer('name')->unsigned()->unique();
			$table->timestamps();
		});

		Schema::create('grape', function(Blueprint $table)
		{
			$table->increments('id')->primary();
			$table->string('name')->unique();
			$table->timestamps();
		});

		Schema::create('color', function(Blueprint $table)
		{
			$table->increments('id')->primary();
			$table->string('name')->unique();
			$table->timestamps();
		});

		Schema::create('classification', function(Blueprint $table)
		{
			$table->increments('id')->primary();
			$table->string('name')->unique();
			$table->timestamps();
		});

		Schema::create('varietal', function(Blueprint $table)
		{
			$table->increments('id')->primary();
			$table->string('name')->unique();
			$table->timestamps();
		});

		Schema::create('wine', function(Blueprint $table)
		{
			$table->increments('id')->primary();
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
		Schema::drop('country');
		Schema::drop('region');
		Schema::drop('subregion');
		Schema::drop('vintage');
		Schema::drop('grape');
		Schema::drop('color');
		Schema::drop('classification');
		Schema::drop('varietal');
	}

}
