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
            $table->increments('id')->comment('自動採番される番号');
            $table->string('user_id')->comment('半角英数字で構成されるユーザーのID')->unique();
            $table->string('password')->comment('パスワードのハッシュ値');
            $table->string('user_name')->comment('スクリーンネーム');
            $table->boolean('authority')->comment('管理者権限の有無')->default(false);
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
