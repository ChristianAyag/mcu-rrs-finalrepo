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
        Schema::create('tbl_initial_review', function (Blueprint $table) {
            $table->id();
            $table->string('protocol_ID');
            $table->string('user_ID');
            $table->string('reviewer1_ID')->nullable();
            $table->string('reviewer2_ID')->nullable();
            $table->unsignedBigInteger('form_ID');
            $table->timestamps();

            $table->foreign('protocol_ID')->references('protocol_ID')->on('tbl_protocol')->onDelete('cascade');
            $table->foreign('user_ID')->references('user_ID')->on('tbl_users')->onDelete('cascade');
            $table->foreign('reviewer1_ID')->references('user_ID')->on('tbl_users')->onDelete('cascade');
            $table->foreign('reviewer2_ID')->references('user_ID')->on('tbl_users')->onDelete('cascade');
            $table->foreign('form_ID')->references('form_id')->on('tbl_forms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_initial_review');
    }
};
