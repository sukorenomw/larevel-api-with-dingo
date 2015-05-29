<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('DataSeeder');
	}

}

Class DataSeeder extends Seeder{

	public function run(){
		$user1 = User::create([
			'email' => 'sukorenomw@gmail.com',
			'username' => 'smw94flynn',
			'password' => '1234'
			]);
	}
}