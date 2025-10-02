<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_forms')->insert([
            [
                'form_code' => 'FORM 2(A)',
                'form_name' => 'STUDY PROTOCOL REVIEW CHECKLIST',
                'form_view' => 'student/forms/form2a',
                'form_type' => 'Forms',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'form_code' => 'FORM 2(B)',
                'form_name' => 'APPLICATION FOR INITIAL REVIEW',
                'form_view' => 'student/forms/form2b',
                'form_type' => 'Forms',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'form_code' => 'FORM 2(C)',
                'form_name' => 'INFORMED CONSENT FORM',
                'form_view' => 'student/forms/form2c',
                'form_type' => 'Forms',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'form_code' => 'FORM 2(D)',
                'form_name' => 'INFORMED CONSENT FORM FOR P.I.',
                'form_view' => 'student/forms/form2d',
                'form_type' => 'Forms',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'FORM 5(E)',
                'form_name' => 'DOCUMENT HISTORY',
                'form_view' => 'student/forms/form5e',
                'form_type' => 'Forms',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'FORM 2(E)',
                'form_name' => 'PROTOCOL EVALUATION CHECKLIST',
                'form_view' => 'reviewer/forms/form2e',
                'form_type' => 'Forms',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'FORM 2(J)',
                'form_name' => 'INFORMED CONSENT EVALUATION CHECKLIST',
                'form_view' => 'reviewer/forms/form2j',
                'form_type' => 'Forms',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'FORM 2(A) Soft Copy',
                'form_name' => 'Completed MCUERB FORM 2(A)-2022-PROTOCOL REVIEW CKECKLIST',
                'form_view' => 'student/submit-form-layout',
                'form_type' => 'Submission',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'FORM 2(B) Soft Copy',
                'form_name' => 'Completed MCUERB FORM 2(B)-2022 APPLICATION FOR INITIAL REVIEW – 1 hard copy of printed and a soft copy',
                'form_view' => 'student/submit-form-layout',
                'form_type' => 'Submission',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'Proof of Enrollment',
                'form_name' => 'Proof of enrollment (1 photocopied and e-copy of registration form) - for MCU students',
                'form_view' => 'student/submit-form-layout',
                'form_type' => 'Submission',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'Technical Review Letter',
                'form_name' => 'Letter from the thesis/dissertation advisor/mentor noted by the College Dean signifying that the protocol had undergone and passed technical review',
                'form_view' => 'student/submit-form-layout',
                'form_type' => 'Submission',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'Study Protocol',
                'form_name' => '(Chapters I, II, & III)',
                'form_view' => 'student/submit-form-layout',
                'form_type' => 'Submission',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'Form 2(C) Soft Copy - ENG',
                'form_name' => 'MCUERB FORM 2(C)-2022-INFORMED CONSENT FORM - English Version',
                'form_view' => 'student/submit-form-layout',
                'form_type' => 'Submission',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'Form 2(C) Soft Copy - FIL',
                'form_name' => 'MCUERB FORM 2(C)-2022-INFORMED CONSENT FORM - Filipino Version',
                'form_view' => 'student/submit-form-layout',
                'form_type' => 'Submission',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'Data Collection Tools',
                'form_name' => 'Data collection forms/tools/instrument/questionnaire',
                'form_view' => 'student/submit-form-layout',
                'form_type' => 'Submission',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'Certificates of Validators',
                'form_name' => 'Certificates of Validators of the tool(s)/instrument(s)/questionnaire (at least three (3) validators) – Researcher’s developed tool (if applicable)',
                'form_view' => 'student/submit-form-layout',
                'form_type' => 'Submission',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'Child Assent for Children Ages 7-12 years - ENG',
                'form_name' => 'Child Assent for Children Ages 7-12 years – English Version (if applicable)',
                'form_view' => 'student/submit-form-layout',
                'form_type' => 'Submission',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'Child Assent for Children Ages 7-12 years - FIL',
                'form_name' => 'Child Assent for Children Ages 7-12 years – Filipino/Dialect Version (if applicable)',
                'form_view' => 'student/submit-form-layout',
                'form_type' => 'Submission',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'Child Assent for Children Ages 13-17 years - ENG',
                'form_name' => 'Child Assent for Children Ages 13-17 years – English Version (if applicable)',
                'form_view' => 'student/submit-form-layout',
                'form_type' => 'Submission',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'Child Assent for Children Ages 13-17 years - FIL',
                'form_name' => 'Child Assent for Children Ages 13-17 years – Filipino/Dialect Version (if applicable)',
                'form_view' => 'student/submit-form-layout',
                'form_type' => 'Submission',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'Recruitment advertisement',
                'form_name' => 'Recruitment advertisement(s) and/or social media Poster (as needed by the study protocol) (if applicable)',
                'form_view' => 'student/submit-form-layout',
                'form_type' => 'Submission',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'Curriculum Vitae',
                'form_name' => 'Curriculum Vitae of PI and study team members',
                'form_view' => 'student/submit-form-layout',
                'form_type' => 'Submission',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'Good Clinical Practice (GCP) or Health Research Ethics Training Certificate',
                'form_name' => 'Good Clinical Practice (GCP) or Health Research Ethics Training Certificate of PI and Co-Investigators (GCP is required for clinical trials) obtained within the last three (3) years) (if applicable)',
                'form_view' => 'student/submit-form-layout',
                'form_type' => 'Submission',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'form_code' => 'Gantt chart',
                'form_name' => 'Gantt Chart of the Research',
                'form_view' => 'student/submit-form-layout',
                'form_type' => 'Submission',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
