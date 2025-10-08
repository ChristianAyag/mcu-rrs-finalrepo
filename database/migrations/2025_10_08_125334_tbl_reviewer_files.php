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
        Schema::create('tbl_reviewer_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_id');
            $table->string('protocol_ID');
            $table->string('reviewer_ID');
            $table->string('file_name');
            $table->string('file_path');
            $table->timestamps();

            $table->foreign('form_id')->references('form_id')->on('tbl_forms')->onDelete('cascade');
            $table->foreign('protocol_ID')->references('protocol_ID')->on('tbl_protocol')->onDelete('cascade');
            $table->foreign('reviewer_ID')->references('user_ID')->on('tbl_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_reviewer_files');
    }
};
