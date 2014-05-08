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
		DB::table('review')->insert(array('user_id' => '1', 'wine_id' => '1', 'rating' => '3', 'comment' => 'This wine was aight!'));
		DB::table('review')->insert(array('user_id' => '2', 'wine_id' => '2', 'rating' => '1', 'comment' => 'This wine was poo. :('));
	}

}

class FavoriteTableSeeder extends Seeder {

	public function run()
	{
		DB::table('favorite')->delete();
		DB::table('favorite')->insert(array('user_id' => '1', 'wine_id' => '1'));
		DB::table('favorite')->insert(array('user_id' => '2', 'wine_id' => '1'));
	}

}

class NoteTableSeeder extends Seeder {

	public function run()
	{
		DB::table('note')->delete();
		DB::table('note')->insert(array('user_id' => '1', 'wine_id' => '1', 'comment' => 'This is a test note!'));
		DB::table('note')->insert(array('user_id' => '2', 'wine_id' => '1', 'comment' => 'This is another test note!'));
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
