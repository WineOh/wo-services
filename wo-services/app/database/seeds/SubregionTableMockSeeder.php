<?php

class SubregionTableMockSeeder extends Seeder {

  public function run()
  {
    DB::table('subregion')->delete();
    DB::table('subregion')->insert(array('name' => 'Arrakis'));
    DB::table('subregion')->insert(array('name' => 'Cordune'));
  }

}
