<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('answer_quality_of_work')->nullable();
            $table->tinyInteger('answer_quality_of_handover')->nullable();
            $table->tinyInteger('answer_communicating_well')->nullable();
            $table->tinyInteger('answer_being_a_good_listener')->nullable();
            $table->tinyInteger('answer_following_though')->nullable();
            $table->tinyInteger('answer_enjoying_indie')->nullable();
            $table->tinyInteger('answer_overseeing_work')->nullable();
            $table->tinyInteger('answer_being_a_mentor')->nullable();
            $table->tinyInteger('answer_engaging_in_learning')->nullable();
            $table->tinyInteger('answer_sharing_knowledge')->nullable();
            $table->text('comment_quality_of_work')->nullable();
            $table->text('comment_quality_of_handover')->nullable();
            $table->text('comment_communicating_well')->nullable();
            $table->text('comment_being_a_good_listener')->nullable();
            $table->text('comment_following_though')->nullable();
            $table->text('comment_enjoying_indie')->nullable();
            $table->text('comment_overseeing_work')->nullable();
            $table->text('comment_being_a_mentor')->nullable();
            $table->text('comment_engaging_in_learning')->nullable();
            $table->text('comment_sharing_knowledge')->nullable();
            $table->dateTime('answered_for');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
