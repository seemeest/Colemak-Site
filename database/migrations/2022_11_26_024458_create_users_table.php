<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
			$table->string('name', 60);
			$table->string('surname', 60)->nullable();
			$table->string('email', 255)->unique();
			$table->binary('password');
			$table->char('token', 60)->unique();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
