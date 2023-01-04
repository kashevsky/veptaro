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
        Schema::create('index_page_models', function (Blueprint $table) {
            $table->id();
            $table->text('text_section_1');
            $table->text('text_section_2');
            $table->text('text_section_3');
            $table->text('text_section_4');
            $table->text('text_section_5');
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
        Schema::dropIfExists('index_page_models');
    }
};
