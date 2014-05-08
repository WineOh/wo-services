<?php

class UserTableMockSeeder extends Seeder {

  public function run()
  {
    DB::table('user')->delete();
    DB::table('user')->insert(array('first_name' => 'Nick', 'last_name' => 'Cassidy', 'email' => 'nicholascassidy@gmail.com', 'password' => 'test'));
		DB::table('user')->insert(array('first_name' => 'Paul', 'last_name' => 'Lee', 'email' => 'creativeleep@gmail.com', 'password' => 'test2'));
  }

}
