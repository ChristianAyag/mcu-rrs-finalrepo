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
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->string('user_ID')->primary();
            $table->string('user_Fname');
            $table->string('user_Lname');
            $table->string('user_MI');
            $table->string('user_Email')->unique();
            $table->string('user_Access');
            $table->string('user_Password');
            $table->rememberToken();
            $table->timestamps();
        });
        
        /*Schema::create('password_reset_tokens', function (Blueprint $table) {
            
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
            
        });*/
        
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};