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
        Schema::create('tbl_approved', function (Blueprint $table) {
            $table->id();
            $table->string('user_ID');
            $table->string('Protocol_ID');
            $table->timestamps();
            $table->enum('Decision', ['Approved', 'Resubmission'])->nullable();

            $table->foreign('user_ID')->references('user_ID')->on('tbl_users')->onDelete('cascade');
            $table->foreign('Protocol_ID')->references('protocol_ID')->on('tbl_protocol')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_approved');
    }
};
