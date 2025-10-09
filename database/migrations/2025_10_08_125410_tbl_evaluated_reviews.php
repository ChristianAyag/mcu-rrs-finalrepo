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
        Schema::create('tbl_evaluated_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('protocol_ID');
            $table->string('reviewer_ID')->nullable();
            $table->string('status')->default('Pending');
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();

            $table->foreign('protocol_ID')->references('protocol_ID')->on('tbl_protocol')->onDelete('cascade');
            $table->foreign('reviewer_ID')->references('user_ID')->on('tbl_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_evaluated_reviews');
    }
};
