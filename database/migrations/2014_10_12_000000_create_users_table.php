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
			$table->string('name');
			$table->string('firstname')->default('');
			$table->string('lastname')->default('');
			$table->string('address')->nullable()->default('');
			$table->string('postcode')->nullable()->default('');
			$table->string('phone')->nullable()->default('');
			$table->string('username')->unique();
			$table->string('email')->unique();
			$table->enum('type', ['user', 'admin'])->default('user');
			$table->string('password');
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
