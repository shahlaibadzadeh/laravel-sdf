<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->string('text1');
            $table->string('text2');
            $table->string('titleHours');
            $table->string('closedDays');
            $table->string('openHourWen');
            $table->string('openHourThu');
            $table->string('openHourFri');
            $table->string('openHourSat');
            $table->string('closedSun');
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
        Schema::dropIfExists('tasks');
    }
}
