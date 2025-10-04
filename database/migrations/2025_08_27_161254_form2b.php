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
        Schema::create('tbl_form2b', function (Blueprint $table) {
            $table->string('form2BID')->primary();
            $table->string('user_ID'); // 👈 must exist before foreign key
            $table->string('protocol');
            $table->string('pi_contact');  
            $table->string('pi_name');
            $table->string('pi_email');
            $table->string('investigator_type');
            $table->string('college_institution');
            $table->string('submitted_by');
            $table->string('study_type');
            $table->string('study_type_text')->nullable();
            $table->string('protocol_description');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('settings_site');
            $table->string('study_participants');
            $table->string('funds')->nullable();
            $table->string('funds_details')->nullable();
            $table->boolean('tech_review')->default(false); // yes = true, no = false
            $table->boolean('erb_submit')->default(false); // yes = true, no = false
            $table->text('information_confidentiality')->nullable();
            $table->text('participants_vulnerability')->nullable();
            $table->text('study_risks')->nullable();
            $table->text('study_benefits')->nullable();
            $table->text('patient_related')->nullable();
            $table->text('informed_consent_process')->nullable();
            $table->text('community_considerations')->nullable();
            $table->text('dissemination')->nullable();
            $table->text('collaborative_terms')->nullable();
            $table->string('special_population')->nullable(); // Children, Elderly, etc.
            $table->string('special_population_others')->nullable(); // if "Others" is selected

            $table->timestamps();

            // Add foreign key after declaring column
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
        Schema::dropIfExists('tbl_form2b');
    }
};
