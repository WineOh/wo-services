<?php

class FavoriteTableMockSeeder extends Seeder {

  public function run()
  {
    DB::table('favorite')->delete();
    DB::table('favorite')->insert(array('user_id' => 1, 'wine_id' => 1));
    DB::table('favorite')->insert(array('user_id' => 2, 'wine_id' => 1));
  }

}
