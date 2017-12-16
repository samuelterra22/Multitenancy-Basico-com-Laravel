<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAccountsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'user_accounts', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->string( 'name' );
			$table->string( 'email' )->unique();
			$table->string( 'password' );
			$table->integer( config( 'tenant.foreign_key' ) )->unsigned();
			$table->foreign( config( 'tenant.foreign_key' ) )->references( 'id' )->on( 'acconts' );
			$table->rememberToken();
			$table->timestamps();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'user_accounts' );
	}
}
