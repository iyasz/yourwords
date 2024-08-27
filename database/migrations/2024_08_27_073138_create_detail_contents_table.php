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
        Schema::create('detail_contents', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->uuid('content_id')->nullable();
            $table->foreign('content_id')->references('id')->on('contents');

            $table->string('text')->nullable();
            $table->string('translete_text')->nullable();
            $table->string('short_description')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_contents');
    }
};
