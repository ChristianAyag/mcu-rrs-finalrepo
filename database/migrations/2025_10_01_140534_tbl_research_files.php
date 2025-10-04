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
        Schema::create('tbl_research_files', function (Blueprint $table){
            $table->id();
            $table->string('user_ID')->nullable();
            $table->unsignedBigInteger('form_id');
            $table->string('file_name')->nullable();
            $table->string('file_path');
            $table->timestamp('submitted_at')->nullable();
            $table->timestamps();

            $table->foreign('user_ID')->references('user_ID')->on('tbl_users')->onDelete('cascade');
            $table->foreign('form_id')->references('form_id')->on('tbl_forms')->onDelete('cascade');

            // prevent duplicate submissions (one submission per user+form)
            //$table->unique(['user_ID', 'form_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_research_files');
    }
};
