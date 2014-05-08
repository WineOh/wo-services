<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('UserTableMockSeeder');
		$this->call('ReviewTableMockSeeder');
		$this->call('FavoriteTableMockSeeder');
		$this->call('NoteTableMockSeeder');
		$this->call('CountryTableMockSeeder');
		$this->call('RegionTableMockSeeder');
		$this->call('SubregionTableMockSeeder');
		$this->call('VintageTableMockSeeder');
		$this->call('GrapeTableMockSeeder');
		$this->call('ColorTableMockSeeder');
		$this->call('ClassificationTableMockSeeder');
		$this->call('VarietalTableMockSeeder');
		$this->call('WineTableMockSeeder');
	}

}
