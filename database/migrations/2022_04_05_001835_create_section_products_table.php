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
        Schema::create('section_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('section_id');
            $table->foreign('section_id')->references('id')->on('sections');
            $table->integer('position');
            $table->string('title_text');
            $table->integer('title_text_font_size');
            $table->enum('title_text_align', ['left', 'center', 'right']);
            $table->string('title_text_color');
            $table->string('title_text_background_color');
            $table->string('image_path');
            $table->enum('image_align', ['left', 'center', 'right']);
            $table->enum('image_width', ['small', 'large']);
            $table->decimal('price', 19,2);
            $table->integer('price_text_font_size');
            $table->string('sale_link')->nullable();
            $table->longText('description_text')->nullable();
            $table->integer('description_text_font_size');
            $table->enum('description_text_align', ['left', 'center', 'right']);
            $table->string('button_background_color');
            $table->string('button_text');
            $table->string('button_image_path');
            $table->integer('addons_limit');
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
        Schema::dropIfExists('section_products');
    }
};
