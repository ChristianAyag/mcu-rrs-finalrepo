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
        Schema::create('tbl_tickets_table', function (Blueprint $table) {
            $table->id('Ticket_ID');
            $table->string('User_ID');
            $table->string('Ticket_Subject');
            $table->string('User_Concern');
            $table->text('Ticket_Description');
            $table->timestamps();

            $table->foreign('User_ID')->references('user_ID')->on('tbl_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_tickets_table');
    }
};
