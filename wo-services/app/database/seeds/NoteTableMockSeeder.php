<?php

class NoteTableMockSeeder extends Seeder {

  public function run()
  {
    DB::table('note')->delete();
    DB::table('note')->insert(array('user_id' => 1, 'wine_id' => 1, 'comment' => 'This is a test note!'));
    DB::table('note')->insert(array('user_id' => 2, 'wine_id' => 1, 'comment' => 'This is another test note!'));
  }

}
