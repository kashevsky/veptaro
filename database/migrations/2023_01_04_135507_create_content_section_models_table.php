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
        Schema::create('main_content_section_models', function (Blueprint $table) {
            $table->id();
            $table->string('h2')->nullable();
            $table->text('text')->nullable();
            $table->string('left_image')->nullable();
            $table->string('right_image')->nullable();
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
        Schema::dropIfExists('content_section_models');
    }
};
