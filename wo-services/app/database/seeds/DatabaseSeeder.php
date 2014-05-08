<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('UserTableSeeder');
		$this->call('ReviewTableSeeder');
		$this->call('FavoriteTableSeeder');
		$this->call('NoteTableSeeder');
		$this->call('CountryTableSeeder');
		$this->call('RegionTableSeeder');
		$this->call('SubregionTableSeeder');
		$this->call('VintageTableSeeder');
		$this->call('GrapeTableSeeder');
		$this->call('ColorTableSeeder');
		$this->call('ClassificationTableSeeder');
		$this->call('VarietalTableSeeder');
		$this->call('WineTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

  public function run()
  {
    DB::table('user')->delete();
    DB::table('user')->insert(array('first_name' => 'Nick', 'last_name' => 'Cassidy', 'email' => 'nicholascassidy@gmail.com', 'password' => 'test'));
		DB::table('user')->insert(array('first_name' => 'Paul', 'last_name' => 'Lee', 'email' => 'creativeleep@gmail.com', 'password' => 'test2'));
  }

}

class ReviewTableSeeder extends Seeder {

	public function run()
	{
		DB::table('review')->delete();
		DB::table('review')->insert(array('user_id' => 1, 'wine_id' => 1, 'rating' => 3, 'comment' => 'This wine was aight!'));
		DB::table('review')->insert(array('user_id' => 2, 'wine_id' => 2, 'rating' => 1, 'comment' => 'This wine was poo. :('));
	}

}

class FavoriteTableSeeder extends Seeder {

	public function run()
	{
		DB::table('favorite')->delete();
		DB::table('favorite')->insert(array('user_id' => 1, 'wine_id' => 1));
		DB::table('favorite')->insert(array('user_id' => 2, 'wine_id' => 1));
	}

}

class NoteTableSeeder extends Seeder {

	public function run()
	{
		DB::table('note')->delete();
		DB::table('note')->insert(array('user_id' => 1, 'wine_id' => 1, 'comment' => 'This is a test note!'));
		DB::table('note')->insert(array('user_id' => 2, 'wine_id' => 1, 'comment' => 'This is another test note!'));
	}

}

class CountryTableSeeder extends Seeder {

	public function run()
	{
		DB::table('country')->delete();
		DB::table('country')->insert(array('name' => 'United States'));
		DB::table('country')->insert(array('name' => 'Italy'));
		DB::table('country')->insert(array('name' => 'France'));
	}

}

class RegionTableSeeder extends Seeder {

	public function run()
	{
		DB::table('region')->delete();
		DB::table('region')->insert(array('name' => 'Jumilla'));
		DB::table('region')->insert(array('name' => 'Jumanji'));
	}

}

class SubregionTableSeeder extends Seeder {

	public function run()
	{
		DB::table('subregion')->delete();
		DB::table('subregion')->insert(array('name' => 'Flume'));
		DB::table('subregion')->insert(array('name' => 'Cordune'));
	}

}

class VintageTableSeeder extends Seeder {

	public function run()
	{
		DB::table('vintage')->delete();
		DB::table('vintage')->insert(array('name' => 2012));
		DB::table('vintage')->insert(array('name' => 1999));
	}

}

class GrapeTableSeeder extends Seeder {

	public function run()
	{
		DB::table('grape')->delete();
		DB::table('grape')->insert(array('name' => 'Monastrell'));
		DB::table('grape')->insert(array('name' => 'Aglianico'));
	}

}

class ColorTableSeeder extends Seeder {

	public function run()
	{
		DB::table('color')->delete();
		DB::table('color')->insert(array('name' => 'Red'));
		DB::table('color')->insert(array('name' => 'White'));
	}

}

class ClassificationTableSeeder extends Seeder {

	public function run()
	{
		DB::table('classification')->delete();
		DB::table('classification')->insert(array('name' => 'Misc Red'));
		DB::table('classification')->insert(array('name' => 'Sweet White'));
	}

}

class VarietalTableSeeder extends Seeder {

	public function run()
	{
		DB::table('varietal')->delete();
		DB::table('varietal')->insert(array('name' => 'Pinot Noir'));
		DB::table('varietal')->insert(array('name' => 'Champagne'));
		DB::table('varietal')->insert(array('name' => 'Merlot'));
	}

}

class WineTableSeeder extends Seeder {

	public function run()
	{
		DB::table('wine')->delete();
		DB::table('wine')->insert(array('name' => 'Whoop there it is Wine', 'country_id' => 1, 'region_id' => 1, 'subregion_id' => 1, 'vintage_id' => 1, 'grape_id' => 1, 'color_id' => 1, 'classification_id' => 1, 'varietal_id' => 1));
		DB::table('wine')->insert(array('name' => 'Jungle Juice', 'country_id' => 2, 'region_id' => 2, 'subregion_id' => 2, 'vintage_id' => 2, 'grape_id' => 2, 'color_id' => 2, 'classification_id' => 2, 'varietal_id' => 2));
		DB::table('wine')->insert(array('name' => 'Prison Punch', 'country_id' => 2, 'region_id' => 1, 'subregion_id' => 2, 'vintage_id' => 1, 'grape_id' => 2, 'color_id' => 1, 'classification_id' => 2, 'varietal_id' => 1));

	}

}
