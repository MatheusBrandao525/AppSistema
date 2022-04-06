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
        Schema::create('card_buttons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_id');
            $table->foreign('card_id')->references('id')->on('cards');
            $table->unsignedBigInteger('button_type_id');
            $table->foreign('button_type_id')->references('id')->on('button_types');
            $table->enum('button-size', ['small', 'large', 'extra_large']);
            $table->integer('position');
            $table->string('button_text');
            $table->string('button_value');
            $table->string('button_icon_color');
            $table->string('button_image_path')->nullable();
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
        Schema::dropIfExists('card_buttons');
    }
};
