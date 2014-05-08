<?php

class ColorTableMockSeeder extends Seeder {

  public function run()
  {
    DB::table('color')->delete();
    DB::table('color')->insert(array('name' => 'Red'));
    DB::table('color')->insert(array('name' => 'White'));
  }

}
