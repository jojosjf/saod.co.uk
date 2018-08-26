<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('local_msg_id');
            $table->integer('sender_id')->unsigned();
            $table->foreign('sender_id')->references('id')->on('users');
            $table->integer('receiver_id')->unsigned();
            $table->foreign('receiver_id')->references('id')->on('users');
            $table->integer('conversation_id')->unsigned();
            $table->foreign('conversation_id')->references('id')->on('chat_conversations');
            $table->integer('msg_type_id')->unsigned();            
            $table->foreign('msg_type_id')->references('id')->on('chat_messages_types');            
            $table->text('msg_body');
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
        Schema::dropIfExists('chat_messages');
        $table->dropForeign('sender_id');
        $table->dropForeign('receiver_id');
        $table->dropForeign('conversation_id');
        $table->dropForeign('msg_type_id');
    }
}
