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
        Schema::create('tbl_forms', function (Blueprint $table){
            $table->id('form_id');
            $table->string('form_code')->unique();
            $table->string('form_name')->nullable();
            $table->string('form_type')->nullable();
            $table->string('form_view')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_forms');
    }
};
