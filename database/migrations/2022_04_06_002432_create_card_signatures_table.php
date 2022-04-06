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
        Schema::create('card_signatures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_id');
            $table->foreign('card_id')->references('id')->on('cards');
            $table->unsignedBigInteger('font_id');
            $table->foreign('font_id')->references('id')->on('fonts');
            $table->enum('signature_align', ['left', 'center', 'right']);
            $table->string('signature_text');
            $table->string('signature_link_text');
            $table->string('signature_text_font_size');
            $table->string('signature_text_color');
            $table->string('signature_link_text_color');
            $table->string('signature_background_color');
            $table->string('link_url');
            $table->integer('margin_top');
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
        Schema::dropIfExists('card_signatures');
    }
};
