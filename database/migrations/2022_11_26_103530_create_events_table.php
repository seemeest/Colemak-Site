<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
			$table->char('name', 255);
			$table->char('description', 255);
			$table->dateTime('time_end');
			$table->foreignId('group_id')->constrained('groups');
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
