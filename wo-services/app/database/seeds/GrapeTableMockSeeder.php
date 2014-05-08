<?php

class GrapeTableMockSeeder extends Seeder {

  public function run()
  {
    DB::table('grape')->delete();
    DB::table('grape')->insert(array('name' => 'Monastrell'));
    DB::table('grape')->insert(array('name' => 'Aglianico'));
  }

}
