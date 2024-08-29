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
        Schema::table('detail_contents', function (Blueprint $table) {
            $table->dropColumn('short_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detail_contents', function (Blueprint $table) {
            $table->string('short_description', 100)->nullable()->after('answer_text');
        });
    }
};
