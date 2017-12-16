<?php

use App\UserAccount;
use Illuminate\Database\Seeder;

class UserAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    factory(UserAccount::class, 1)->create([
		    'name'          => 'Cliente 1',
		    'email'         => 'client1@user.com',
		    'password'      => bcrypt('senha123'),
		    'account_id'    => 1
	    ]);

	    factory(UserAccount::class, 1)->create([
		    'name'          => 'Cliente 2',
		    'email'         => 'client2@user.com',
		    'password'      => bcrypt('senha123'),
		    'account_id'    => 2
	    ]);

	    factory(UserAccount::class, 1)->create([
		    'name'          => 'Master',
		    'email'         => 'client2@user.com',
		    'password'      => bcrypt('senha123'),
		    'account_id'    => 3
	    ]);
    }
}
