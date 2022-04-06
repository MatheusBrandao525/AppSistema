<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_audio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_id');
            $table->foreign('card_id')->references('id')->on('cards');
            $table->enum('audio_align', [
                'end_of_card',
                'before_the_buttons',
                'after_the_buttons',
                'before_the_products',
                'after_the_products'
            ]);
            $table->string('audio_title_text');
            $table->string('audio_title_text_color');
            $table->string('audio_text_text_background_color');
            $table->string('audio_path');
            $table->integer('position');
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
        Schema::dropIfExists('card_audio');
    }
};
