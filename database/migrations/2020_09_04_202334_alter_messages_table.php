<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMessagesTable extends Migration
{

    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->integer('user_id')->nullable();
        });
    }


    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
}
