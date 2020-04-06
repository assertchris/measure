<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeFromUserIdNullable extends Migration
{
    public function up()
    {
        Schema::table('answers', function (Blueprint $table) {
            $table->unsignedBigInteger('from_user_id')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('answers', function (Blueprint $table) {
            $table->unsignedBigInteger('from_user_id')->change();
        });
    }
}
