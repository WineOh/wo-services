<?php


class WineTableMockSeeder extends Seeder {

  public function run()
  {
    DB::table('wine')->delete();
    DB::table('wine')->insert(array('name' => 'Whoop there it is Wine', 'country_id' => 1, 'region_id' => 1, 'subregion_id' => 1, 'vintage_id' => 1, 'grape_id' => 1, 'color_id' => 1, 'classification_id' => 1, 'varietal_id' => 1));
    DB::table('wine')->insert(array('name' => 'Jungle Juice', 'country_id' => 2, 'region_id' => 2, 'subregion_id' => 2, 'vintage_id' => 2, 'grape_id' => 2, 'color_id' => 2, 'classification_id' => 2, 'varietal_id' => 2));
    DB::table('wine')->insert(array('name' => 'Prison Punch', 'country_id' => 2, 'region_id' => 1, 'subregion_id' => 2, 'vintage_id' => 1, 'grape_id' => 2, 'color_id' => 1, 'classification_id' => 2, 'varietal_id' => 1));

  }

}
