<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('firstname')->default('John');
			$table->string('lastname')->default('Doe');
			$table->string('email')->unique();
			$table->enum('type', ['guest', 'user', 'admin'])->default('user');
			$table->string('password');
			$table->string('address')->nullable();
			$table->string('postcode')->nullable();
			$table->string('phone')->nullable();
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}
}
