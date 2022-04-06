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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('background_id');
            $table->foreign('background_id')->references('id')->on('background_images');
            $table->string('solid_color')->nullable();
            $table->boolean('repeat_background')->default(false);
            $table->unsignedBigInteger('logo_id');
            $table->foreign('logo_id')->references('id')->on('logo_images');
            $table->enum('button_shape', ['normal', 'rounded']);
            $table->enum('button_direction', ['vertical', 'horizontal']);
            $table->enum('button_align', ['left', 'center', 'right']);
            $table->boolean('show_button_text')->default(true);
            $table->unsignedBigInteger('font_id');
            $table->foreign('font_id')->references('id')->on('fonts');
            $table->boolean('activate_button_border')->default(false);
            $table->string('button_text_color');
            $table->string('button_background_color');
            $table->string('button_border_color')->nullable();
            $table->integer('button_margin_top')->default(0);
            $table->integer('button_margin_bottom')->default(0);
            $table->boolean('is_template')->default(false);
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
        Schema::dropIfExists('cards');
    }
};
