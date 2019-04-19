<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username', 50)->default('')->comment('用户名');
			$table->string('nickname', 50)->default('')->comment('姓名');
			$table->string('password', 100)->default('')->comment('bcrypt密码');
			$table->integer('created_at')->unsigned()->default(0)->comment('创建时间戳');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_users');
	}

}
