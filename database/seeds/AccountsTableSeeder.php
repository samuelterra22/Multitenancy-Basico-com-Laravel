<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory( \App\Accont::class, 1 )->create( [
			'subdomain' => 'client1'
		] );

		factory( \App\Accont::class, 1 )->create( [
			'subdomain' => 'client2'
		] );

		factory( \App\Accont::class, 1 )->create( [
			'subdomain' => 'master'
		] );

	}
}
