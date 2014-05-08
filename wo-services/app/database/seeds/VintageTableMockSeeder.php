<?php

class VintageTableMockSeeder extends Seeder {

  public function run()
  {
    DB::table('vintage')->delete();
    DB::table('vintage')->insert(array('name' => 2012));
    DB::table('vintage')->insert(array('name' => 1999));
  }

}
