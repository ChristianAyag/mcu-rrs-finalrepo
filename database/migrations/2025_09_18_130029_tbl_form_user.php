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
        Schema::create('tbl_form_user', function (Blueprint $table) {
            $table->id('id');

            // Foreign keys
            $table->string('user_ID');
            $table->unsignedBigInteger('form_id');

            $table->timestamps();

            // Constraints
            $table->foreign('form_id')
                ->references('form_id')->on('tbl_forms')
                ->onDelete('cascade');

            $table->foreign('user_ID')
                ->references('user_ID')->on('tbl_users')
                ->onDelete('cascade');

            // Prevent duplicates
            $table->unique(['form_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_form_user');
    }
};
