<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consultation_sections', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('h2');
            $table->text('content');
            $table->unsignedBigInteger('page_id');
            $table->index('page_id');
            $table->foreign('page_id')->on('consultation_contents')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_sections');
    }
};
