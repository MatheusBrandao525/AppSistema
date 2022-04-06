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
        Schema::create('professions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_id');
            $table->foreign('card_id')->references('id')->on('cards');
            $table->unsignedBigInteger('font_id');
            $table->foreign('font_id')->references('id')->on('fonts');
            $table->string('photo_path');
            $table->integer('photo_width');
            $table->boolean('round_photo')->default(false);
            $table->string('name_text');
            $table->string('name_text_font_size');
            $table->string('name_text_color');
            $table->string('name_text_background_color');
            $table->enum('name_text_align', ['left','center','right']);
            $table->string('occupation_text');
            $table->integer('occupation_text_font_size');
            $table->string('register_number_text')->nullable();
            $table->integer('register_number_text_font_size');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professions');
    }
};
