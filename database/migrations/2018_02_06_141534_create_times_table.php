<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('times', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->unsignedInteger('date')->comment('出勤日');
            $table->unsignedInteger('hour');
            $table->unsignedInteger('minute');
            $table->unsignedInteger('fee')->comment('交通費');
            $table->string('form')->comment('出勤形態');
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
        Schema::dropIfExists('times');
    }
}
