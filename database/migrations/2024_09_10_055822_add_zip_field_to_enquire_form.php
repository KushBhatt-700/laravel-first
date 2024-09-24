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
        Schema::table('enquire_form', function (Blueprint $table) {
            $table->string('zip')->nullable()->after('state');
            $table->integer('privacy')->default(0)->after('zip');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('enquire_form', function (Blueprint $table) {
            $table->dropColumn('zip');
            $table->dropcolumn('privacy');
        });
    }
};
