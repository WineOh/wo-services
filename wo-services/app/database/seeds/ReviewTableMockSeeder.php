<?php

class ReviewTableMockSeeder extends Seeder {

  public function run()
  {
    DB::table('review')->delete();
    DB::table('review')->insert(array('user_id' => 1, 'wine_id' => 1, 'rating' => 3, 'comment' => 'This wine was aight!'));
    DB::table('review')->insert(array('user_id' => 2, 'wine_id' => 2, 'rating' => 1, 'comment' => 'This wine was poo. :('));
  }

}
