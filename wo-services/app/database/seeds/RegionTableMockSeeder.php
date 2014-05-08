<?php

class RegionTableMockSeeder extends Seeder {

  public function run()
  {
    DB::table('region')->delete();
    DB::table('region')->insert(array('name' => 'Jumilla'));
    DB::table('region')->insert(array('name' => 'Jumanji'));
  }

}
