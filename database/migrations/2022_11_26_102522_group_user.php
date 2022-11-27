<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GroupUser extends Migration
{
    public function up()
    {
        Schema::create('group_user', function (Blueprint $table) {
            $table->id();
			$table->foreignId('user_id')->constrained('users');
			$table->foreignId('group_id')->constrained('groups');
			$table->foreignId('to_user_id')->constrained('users');
            $table->string('wish')->nullable();
            $table->boolean('is_owner')->default(false);
        });
    }

    public function down()
    {
        Schema::dropIfExists('group_user');
    }
}
