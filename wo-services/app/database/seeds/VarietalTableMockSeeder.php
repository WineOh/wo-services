<?php


class VarietalTableMockSeeder extends Seeder {

  public function run()
  {
    DB::table('varietal')->delete();
    DB::table('varietal')->insert(array('name' => 'Pinot Noir'));
    DB::table('varietal')->insert(array('name' => 'Champagne'));
    DB::table('varietal')->insert(array('name' => 'Merlot'));
  }

}
