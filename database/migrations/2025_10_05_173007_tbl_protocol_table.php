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
        Schema::create('tbl_protocol', function (Blueprint $table) {
            $table->string('protocol_ID')->primary(); // VARCHAR PK
            $table->string('user_ID')->unique();
            $table->string('review_type')->nullable();
            $table->timestamps();

            $table->foreign('user_ID')->references('user_ID')->on('tbl_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        {
            Schema::dropIfExists('tbl_protocol');
        }
    }
};
