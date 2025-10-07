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
        Schema::create('tbl_classification_review', function (Blueprint $table) {
            $table->id('classifyID'); // Primary key
            $table->string('user_ID'); // Link to principal investigator
            $table->string('reviewClassification')->nullable();
            $table->date('classificationDate')->nullable();
            $table->string('classificationStatus')->nullable();
            $table->timestamps();

            $table->foreign('user_ID')
                ->references('user_ID')
                ->on('tbl_users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_classification_review', function (Blueprint $table) {
            $table->dropForeign(['user_ID']);
        });
        Schema::dropIfExists('tbl_classification_review');
    }
};
