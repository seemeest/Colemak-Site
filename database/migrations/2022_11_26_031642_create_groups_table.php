<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
			$table->char('name', 60)->unique();
			$table->integer('limit_money')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
