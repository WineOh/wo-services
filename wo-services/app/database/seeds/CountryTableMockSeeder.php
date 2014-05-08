<?php

class CountryTableMockSeeder extends Seeder {

  public function run()
  {
    DB::table('country')->delete();
    DB::table('country')->insert(array('name' => 'United States'));
    DB::table('country')->insert(array('name' => 'Italy'));
    DB::table('country')->insert(array('name' => 'France'));
  }

}
