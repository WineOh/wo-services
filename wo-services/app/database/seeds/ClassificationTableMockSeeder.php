<?php

class ClassificationTableMockSeeder extends Seeder {

  public function run()
  {
    DB::table('classification')->delete();
    DB::table('classification')->insert(array('name' => 'Misc Red'));
    DB::table('classification')->insert(array('name' => 'Sweet White'));
  }

}
