<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFromUserIdToAnswersTable extends Migration
{
    public function up()
    {
        Schema::table('answers', function (Blueprint $table) {
            $table->renameColumn('user_id', 'for_user_id');
            $table->unsignedBigInteger('from_user_id');
        });
    }

    public function down()
    {
        Schema::table('answers', function (Blueprint $table) {
            $table->renameColumn('for_user_id', 'user_id');
            $this->dropColumn('from_user_id');
        });
    }
}
