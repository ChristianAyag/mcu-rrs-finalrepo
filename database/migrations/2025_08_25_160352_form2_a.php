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
        Schema::create('tbl_form2a', function (Blueprint $table) {
            $table->string('form2AID')->primary();
            $table->string('protocol');
            $table->string('pi_name');
            $table->string('coi_name')->nullable();
            
            //Basic Documents
            $table->boolean('cover_letter')->default(false);
            $table->boolean('enrollment_proof')->default(false);
            $table->boolean('letter')->default(false);
            $table->boolean('complete_form2b')->default(false);
            $table->boolean('complete_form2a')->default(false);
            $table->boolean('complete_form2d')->default(false);
            
            //Protocol Package
            $table->boolean('study_protocol')->default(false);
            $table->boolean('form2c_eng')->default(false);
            $table->boolean('form2c_fil')->default(false);
            $table->boolean('data_collection')->default(false);
            $table->boolean('cert_validator')->default(false);
            $table->boolean('eng_7_12_yrs')->default(false);
            $table->boolean('fil_7_12_yrs')->default(false);
            $table->boolean('eng_13_17_yrs')->default(false);
            $table->boolean('fil_13_17_yrs')->default(false);
            $table->boolean('advertisement')->default(false);
            $table->boolean('vitae')->default(false);
            $table->boolean('gcp')->default(false);
            $table->boolean('gantt_chart')->default(false);
            
            //Seniors
            $table->boolean('sen_ic')->default(false);
            $table->text('informed_consent')->nullable();
            $table->boolean('sen_ca')->default(false);
            $table->text('cognitive_assessment')->nullable();
            $table->boolean('sen_phr')->default(false);
            $table->text('physical_risks')->nullable();
            $table->boolean('sen_raa')->default(false);
            $table->text('respect_autonomy')->nullable();
            $table->boolean('sen_pac')->default(false);
            $table->text('privacy_confidentiality')->nullable();
            $table->boolean('sen_is')->default(false);
            $table->text('intervention_suitability')->nullable();
            
            //Minors
            $table->boolean('min_pgc')->default(false);
            $table->text('parent_consent')->nullable();
            $table->boolean('min_ap')->default(false);
            $table->text('assent_process')->nullable();
            $table->boolean('min_pfh')->default(false);
            $table->text('harm_protection')->nullable();
            $table->boolean('min_eb')->default(false);
            $table->text('educational_balance')->nullable();
            $table->boolean('min_mr')->default(false);
            $table->text('mandatory_reporting')->nullable();
            $table->boolean('min_ei')->default(false);
            $table->text('equitable_inclusion')->nullable();
            
            //Persons with Disabilities
            $table->boolean('pwd_ac')->default(false);
            $table->text('accessible_comm')->nullable();
            $table->boolean('pwd_cc')->default(false);
            $table->text('consent_capacity')->nullable();
            $table->boolean('pwd_rm')->default(false);
            $table->text('risk_mitigation')->nullable();
            $table->boolean('pwd_nd')->default(false);
            $table->text('non_discrimination')->nullable();
            $table->boolean('pwd_ra')->default(false);
            $table->text('reasonable_accommodations')->nullable();
            $table->boolean('pwd_m')->default(false);
            $table->text('monitoring')->nullable();
            
            //Person Deprived of Liberty
            $table->boolean('pdol_vp')->default(false);
            $table->text('voluntary_participation')->nullable();
            $table->boolean('pdol_es')->default(false);
            $table->text('equitable_selection')->nullable();
            $table->boolean('pdol_pac2')->default(false);
            $table->text('privacy_confidentiality_2')->nullable();
            $table->boolean('pdol_bara')->default(false);
            $table->text('benefit_risk_analysis')->nullable();
            $table->boolean('pdol_io')->default(false);
            $table->text('independent_oversight')->nullable();
            $table->boolean('pdol_pss')->default(false);
            $table->text('post_study_support')->nullable();

            //General Principles for All Groups
            $table->boolean('gpfag_ej')->default(false);
            $table->text('ethical_justification')->nullable();
            $table->boolean('gpfag_sv')->default(false);
            $table->text('scientific_validity')->nullable();
            $table->boolean('gpfag_rba')->default(false);
            $table->text('risk_benefit_assessment')->nullable();
            $table->boolean('gpfag_cs')->default(false);
            $table->text('cultural_sensitivity')->nullable();
            $table->boolean('gpfag_c')->default(false);
            $table->text('compensation')->nullable();
            
            //Process of Participant Recruitment
            $table->boolean('popr_pp')->default(false);
            $table->text('potential_participants')->nullable();
            $table->boolean('popr_cc')->default(false);
            $table->text('conditions_characteristics')->nullable();
            $table->boolean('popr_str')->default(false);
            $table->text('susceptible_to_risks')->nullable();
            $table->boolean('popr_sv')->default(false);
            $table->text('special_vulnerability')->nullable();
            $table->boolean('popr_pi')->default(false);
            $table->text('possible_indication')->nullable();
            $table->boolean('popr_p')->default(false);
            $table->text('procedure')->nullable();

            //Sample size and suitable determination procedure
            $table->text('sample_size_1')->nullable();
            $table->text('sample_size_2')->nullable();

            //Site of data collection
            $table->boolean('sodc_ac')->default(false);
            $table->text('anonymity_confidentiality')->nullable();
            $table->boolean('sodc_pc')->default(false);
            $table->text('procedures_confidentiality')->nullable();
            $table->boolean('sodc_fd')->default(false);
            $table->text('final_disposition')->nullable();
            
            //Last Part
            $table->text('thesisadviser');
            $table->text('notedby');
            $table->text('coordinator');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_form2a');
    }
};
