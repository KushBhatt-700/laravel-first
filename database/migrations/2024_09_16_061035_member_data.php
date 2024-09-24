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
        Schema::create('member_data', function(Blueprint $table){
            $table->id('form_id');
            $table->string('name', 60);
            $table->string('email', 100);
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('group_id')->on('group_data');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
