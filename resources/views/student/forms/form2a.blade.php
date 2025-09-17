@section('title', 'Form 2(A)')
<x-student-layout>
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <form action="{{ route('form2a.store') }}" method="POST" class="block">
            @csrf
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="text-right mt-3 mr-3 max-lg:text-sm max-md:text-sm max-sm:text-xs">FORM 2(A)</p>
                <h1
                    class="text-center mt-10 max-2xl:mt-6 max-lg:mt-6 max-md:mt-6 font-bold text-2xl max-xl:text-xl max-lg:text-lg max-md:text-base max-sm:text-sm mb-2 underline">
                    STUDY PROTOCOL REVIEW
                    CHECKLIST</h1>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="p-3 font-bold text-lg max-2xl:text-base max-sm:text-sm">STUDY PROTOCOL INFORMATION</h2>
                <div
                    class="px-3 py-2 flex flex-col md:flex-row justify-between items-start md:space-x-5 space-y-4 md:space-y-0">
                    <div class="flex flex-col md:basis-1/3 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            STUDY PROTOCOL TITLE
                        </label>
                        <input type="text" name="protocol"
                            class="block rounded border border-darkgray mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <div class="flex flex-col md:basis-1/3 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            PRINCIPAL INVESTIGATOR
                        </label>
                        <input type="text" name="pi_name"
                            class="mt-1 rounded border border-darkgray w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <div class="flex flex-col md:basis-1/3 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            CO-INVESTIGATOR
                        </label>
                        <input type="text" name="coi_name"
                            class="mt-1 rounded border border-darkgray w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]">
                    </div>
                </div>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="p-3 font-bold text-lg max-2xl:text-base max-md:text-base max-sm:text-sm">TO BE FILLED UP BY
                    THESIS ADVISER</h2>
                <div class="p-3 gap-x-10 gap-y-3 text-sm">
                    <!-- BASIC DOCUMENTS -->
                    <div class="space-y-2 text-base">
                        <h2 class="font-bold max-sm:text-sm">Basic Documents (must submit for initial review)</h2>  
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="cover_letter"> <!-- DONE -->
                            <span>Cover letter from the thesis/dissertion advisor/mentor with noted by the College Dean
                                - <i>for MCU Students</i></span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="enrollment_proof">
                            <span>Proof of enrollment (1 photocopied and e-copy of registration form) - <i>for MCU
                                    Students</i></span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="letter">
                            <span>Letter from the thesis/dissertion advisor/mentor noted by the College Dean signifying
                                that the protocol had undergone and passed technical review</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="complete_form2b">
                            <span>Completed <b>MCUERB FORM 2(B) APPLICATION FOR INITIAL REVIEW</b> - 1 hard copy of
                                printed and a soft copy</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="complete_form2a">
                            <span>Completed <b>MCUERB FORM 2(A) PROTOCOL REVIEW CHECKLIST</b></span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="complete_form2d">
                            <span>Completed <b>MCUERB FORM 2(D) INFORMED CONSENT CHECKLIST for PRINCIPAL INVESTIGATOR
                                    (PI)</b></span>
                        </label>
                    </div>

                    <!-- PROTOCOL PACKAGE -->
                    <div class="mt-5 space-y-2 text-base">
                        <h2 class="font-bold max-sm:text-sm">Protocol Package (must submit for initial review)</h2>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="study_protocol">
                            <span>Study Protocol (Chapters I, II, & III)</span>
                        </label>
                        <label class="flex items-start space-x-2 font-bold">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="form2c_eng">
                            <span>MCUERB FORM 2(C) INFORMED CONSENT FORM - English Version</span>
                        </label>
                        <label class="flex items-start space-x-2 font-bold">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="form2c_fil">
                            <span>MCUERB FORM 2(C) INFORMED CONSENT FORM - Filipino Version or in local language/dialect
                                (if
                                applicable)</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="data_collection">
                            <span>Data collection forms/tools/instrument/questionnaire</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="cert_validator">
                            <span>Certificates of Validators of the tool(s)/instrument(s)/questionnaire (at least three
                                (3)
                                validators) - Researcher's developed tool (if applicable)</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="eng_7_12_yrs">
                            <span>Child Assent for Children Ages 7-12 years - English Version (if applicable)</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="fil_7_12_yrs">
                            <span>
                                Child Assent for Children Ages 7-12 years - Filipino/Dialect Version (if applicable)
                            </span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="eng_13_17_yrs">
                            <span>
                                Child Assent for Children Ages 13-17 years - English Version (if applicable)
                            </span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="fil_13_17_yrs">
                            <span>
                                Child Assent for Children Ages 13-17 years - Filipino/Dialect Version (if applicable)
                            </span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="advertisement">
                            <span>
                                Recruitment advertisement(s) and/or social media Poster (as needed by the study
                                protocol)
                                (if applicable)
                            </span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="vitae">
                            <span>Curriculum Vitae of PI and study team members</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="gcp">
                            <span>Good Clinical Practice (GCP) or Health Research Ethics Training Certificate of PI and
                                Co-Investigators (GCP is required for clinical trials) obtained within the last three
                                (3) years (if applicable)
                            </span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="gantt_chart">
                            <span>Gantt Chart</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="p-3 max-sm:text-sm/6">Details <b>should be visible</b> in the research methods <b>(Chapter
                        III)</b> of the
                    thesis/research
                    proposal involving human participants, for the efficiency of the ERB review process. (To be filled
                    up by the Researcher)</p>

                <!-- Seniors -->
                <div class="p-3">
                    <h2 class="text-lg max-sm:text-base font-semibold">Seniors</h2>
                    <div class="mt-2 space-y-2 text-base">
                        <!-- Informed Consent -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="sen_ic">
                                <span>
                                    <b>Informed Consent:</b> Ensure clarity and accessibility of consent forms,
                                    considering
                                    cognitive and sensory impairments (e.g., large fonts, simple language). <b>How would
                                        you
                                        accomplish this?</b>
                                </span>
                            </label>
                            <textarea name="informed_consent" id="" value="" placeholder="Page Number where description is found" 
                                class="mt-1 w-full resize-none max-sm:text-sm" value=" "></textarea>
                        </div>
                        <!-- Cognitive Assessment -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="sen_ca">
                                <span>
                                    <b>Cognitive Assessment:</b> Verify the capacity to consent and consider involving
                                    legally authorized representatives if necessary.
                                </span>
                            </label>
                            <textarea name="cognitive_assessment" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm" value=" "></textarea>
                        </div>
                        <!-- Physical Health Risks -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="sen_phr">
                                <span>
                                    <b>Physical Health Risks:</b> Evaluate potential health risks due to medical
                                    conditions or physical frailty.
                                </span>
                            </label>
                            <textarea name="physical_risks" id="" placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm" value=" "></textarea>
                        </div>
                        <!-- Respect and Autonomy -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="sen_raa">
                                <span>
                                    <b>Respect and Autonomy:</b> Ensure participants are not coerced or unduly
                                    influenced due to age-related vulnerabilities. This must be explicit in the Methods
                                    text.
                                </span>
                            </label>
                            <textarea name="respect_autonomy" id="" placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm" value=" "></textarea>
                        </div>
                        <!-- Privacy -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="sen_pac">
                                <span>
                                    <b>Privacy and Confidentiality:</b> Safeguard sensitive health information and
                                    ensure
                                    respectful data handling. Indicate the methods you would adopt to achieve this.
                                </span>
                            </label>
                            <textarea name="privacy_confidentiality" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm" value=" "></textarea>
                        </div>
                        <!-- Intervention Suitability -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="sen_is">
                                <span>
                                    <b>Intervention Suitability:</b> Confirm interventions are age-appropriate and do
                                    not disproportionately burden seniors.
                                </span>
                            </label>
                            <textarea name="intervention_suitability" id="" 
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm" value=" "></textarea>
                        </div>
                    </div>
                </div>
                <div class="p-3">
                    <!-- Minors -->
                    <h2 class="text-lg max-sm:text-base font-semibold">Minors (Include your details in each item)</h2>
                    <div class="mt-2 space-y-2 text-base">
                        <!-- Parental/Guardian Consent -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="min_pgc">
                                <span>
                                    <b>Parental/Guardian Consent:</b> Require consent from parents or legal guardians,
                                    and where appropriate, seek assent from the minors themselves.
                                </span>
                            </label>
                            <textarea name="parent_consent" id="" placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Assent Process -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="min_ap">
                                <span>
                                    <b>Assent Process:</b> Tailor information for children's comprehension based on age,
                                    maturity, and developmental stage.
                                </span>
                            </label>
                            <textarea name="assent_process" id="" placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Protection from Harm -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="min_pfh">
                                <span>
                                    <b>Protection from Harm:</b> Minimize psychological, physical, and emotional risks.
                                    Details on how should be specified.
                                </span>
                            </label>
                            <textarea name="harm_protection" id="" placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Educational Balance -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="min_eb">
                                <span>
                                    <b>Educational Balance:</b> Ensure participation does not interfere with schooling
                                    or normal development. Detail on this is necessary.
                                </span>
                            </label>
                            <textarea name="educational_balance" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Mandatory Reporting -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="min_mr">
                                <span>
                                    <b>Mandatory Reporting:</b> Ensure mehchanisms are in place to report suspected
                                    abuse or neglect.
                                </span>
                            </label>
                            <textarea name="mandatory_reporting" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Equitable Inclusion -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="min_ei">
                                <span>
                                    <b>Equitable Inclusion:</b> Avoid exploiting minors solely because they are an
                                    accessible population.
                                </span>
                            </label>
                            <textarea name="equitable_inclusion" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Persons with Disabilities -->
                <div class="p-3">
                    <h2 class="text-lg max-sm:text-base font-semibold">Persons with Disabilities (Include your details
                        in each items)
                    </h2>
                    <div class="mt-2 space-y-2 text-base">
                        <!-- Accessible Communication -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="pwd_ac">
                                <span>
                                    <b>Accessible Communication:</b> Adapt materials and processes for participants'
                                    specific disabilities (e.g., braille, sign language, or simplified text).
                                </span>
                            </label>
                            <textarea name="accessible_comm" id="" placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Capacity to Consent -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="pwd_cc">
                                <span>
                                    <b>Capacity to Consent:</b> Assess individual decision-making abilities and involve
                                    legal representatives when necessary.
                                </span>
                            </label>
                            <textarea name="consent_capacity" id="" placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Risk Mitigation -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="pwd_rm">
                                <span>
                                    <b>Risk Mitigation:</b> Address potential physical, emotional, or psychological
                                    harm.
                                </span>
                            </label>
                            <textarea name="risk_mitigation" id="" placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Non-Discrimination -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="pwd_nd"> 
                                <span>
                                    <b>Non-Discrimination:</b> Ensure the study promotes inclusion and avoids
                                    stigmatization or bias.
                                </span>
                            </label>
                            <textarea name="non_discrimination" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Reasonable Accommodations -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="pwd_ra">
                                <span>
                                    <b>Reasonable Accommodations:</b> Provide necessary support, such as assistive
                                    devices or adaptive technologies.
                                </span>
                            </label>
                            <textarea name="reasonable_accommodations" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Monitoring -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="pwd_m">
                                <span>
                                    <b>Monitoring:</b> Implement mechanisms to monitor and address any adverse effects
                                    unique to the disability.
                                </span>
                            </label>
                            <textarea name="monitoring" id="" class="mt-1 w-full resize-none max-sm:text-sm"
                                placeholder="Page Number where description is found"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Person Deprived of Liberty -->
                <div class="p-3">
                    <h2 class="text-lg max-sm:text-base font-semibold">Persons Deprived of Liberty (include your details
                        in each item).
                    </h2>
                    <div class="mt-2 space-y-2 text-base">
                        <!-- Volutary Participation -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="pdol_vp">
                                <span>
                                    <b>Voluntary Participation:</b> Safeguard against coercion, considering the inherent
                                    power imbalances in detention or institutional settings. Indicate how?
                                </span>
                            </label>
                            <textarea name="voluntary_participation" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Equitable Selection -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="pdol_es">
                                <span>
                                    <b>Equitable Selection:</b> Ensure inclusion is based on scientific reasons and, not
                                    convenience or vulnerability.
                                </span>
                            </label>
                            <textarea name="equitable_selection" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Privacy and Confidentiality -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="pdol_pac2">
                                <span>
                                    <b>Privacy and Confidentiality:</b> Protect personal information, especially in
                                    environments with limited privacy.
                                </span>
                            </label>
                            <textarea name="privacy_confidentiality_2" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Benefit and Risk Analysis -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="pdol_bara">
                                <span>
                                    <b>Benefit and Risk Analysis:</b> Ensure the study offers direct benefits to
                                    participants or their communities and minimizes risks.
                                </span>
                            </label>
                            <textarea name="benefit_risk_analysis" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Independent Oversight -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="pdol_io">
                                <span>
                                    <b>Independent Oversight:</b> Verify the absence of institutional conflicts of
                                    interest or undue influence.
                                </span>
                            </label>
                            <textarea name="independent_oversight" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Post-Study Support -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="pdol_pss">
                                <span>
                                    <b>Post-Study Support:</b> Address how findings or interventions will be accessible
                                    to participants after the study.
                                </span>
                            </label>
                            <textarea name="post_study_support" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                    </div>
                </div>

                <!-- General Principles for All Groups -->
                <div class="p-3">
                    <h2 class="text-lg max-sm:text-base font-semibold">General Principles for All Groups:</h2>
                    <div class="mt-2 space-y-2 text-base">
                        <!-- Ethical Justification -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="gpfag_ej">
                                <span>
                                    <b>Ethical Justification:</b> Clearly outline the necessity and appropriateness of
                                    including vulnerable populations.
                                </span>
                            </label>
                            <textarea name="ethical_justification" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Scientific Validity -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="gpfag_sv">
                                <span>
                                    <b>Scientific Validity:</b> Confirm that the study design is rigorous and ethically
                                    justifiable.
                                </span>
                            </label>
                            <textarea name="scientific_validity" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Risk-Benefit Assessment -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="gpfag_rba">
                                <span>
                                    <b>Risk-Benefit Assessment:</b> Ensure that risks are minimal, and benefits
                                    outweight
                                    potential harm.
                                </span>
                            </label>
                            <textarea name="risk_benefit_assessment" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Cultural Sensitivity -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="gpfag_cs">
                                <span>
                                    <b>Cultural Sensitivity:</b> Consider cultural norms and values relevant to each
                                    group.
                                </span>
                            </label>
                            <textarea name="cultural_sensitivity" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <!-- Compensation -->
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="gpfag_c">
                                <span>
                                    <b>Compensation:</b> Ensure fair and non-coercive incentives or reimbursements.
                                </span>
                            </label>
                            <textarea name="compensation" id="" placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Process of Participant Recruitment -->
                <div class="p-3">
                    <h2 class="text-lg max-sm:text-base font-semibold">Process of Participant Recruitment</h2>
                    <div class="mt-2 space-y-2 text-base">
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="popr_pp">
                                <span>
                                    Include how potential participants will be recruited, contacted, screened, and
                                    registered in the study described.
                                </span>
                            </label>
                            <textarea name="potential_participants" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="popr_cc">
                                <span>
                                    Specify conditions and characteristics applicable to the identification and
                                    selection of participants in the study and the conditions necessary for eligible
                                    persons to be included in the inclusion criteria.
                                </span>
                            </label>
                            <textarea name="conditions_characteristics" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="popr_str">
                                <span>
                                    Specify whether there are any groups of people who might be more susceptible to the
                                    risks presented by the study and who therefore ought to be excluded from the
                                    research in the selection of participants.
                                </span>
                            </label>
                            <textarea name="susceptible_to_risks" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="popr_sv">
                                <span>
                                    Indicate if any, special vulnerability among prospective study participants that
                                    might be relevant to evaulating the risk of participation considered.
                                </span>
                            </label>
                            <textarea name="special_vulnerability" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="popr_pi">
                                <span>
                                    State explicitly possible indication of special measures to be implemented to
                                    protect the vulnerability of study participants.
                                </span>
                            </label>
                            <textarea name="possible_indication" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="popr_p">
                                <span>
                                    State explicitly that the procedures for informing participants about the study and
                                    methods and for obtaining consent are clearly described. Indicate how you would do.
                                </span>
                            </label>
                            <textarea name="procedure" id="" class="mt-1 w-full resize-none max-sm:text-sm"
                                placeholder="Page Number where description is found"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Sample size and suitable determination procedure -->
                <div class="p-3">
                    <h2 class="text-lg max-sm:text-base font-semibold">Describe the sample size and suitable
                        determination procedure
                        based on your research design.</h2>
                    <div class="mt-2 space-y-2 text-base">
                        <div>
                            <label>
                                <span>
                                    1.
                                </span>
                            </label>
                            <textarea name="sample_size_1" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <span>
                                    2.
                                </span>
                            </label>
                            <textarea name="sample_size_2" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Site of data collection -->
                <div class="p-3">
                    <h2 class="text-lg max-sm:text-base font-semibold">Describe the sample size and suitable
                        determination procedure
                        based on your research design.</h2>
                    <div class="mt-2 space-y-2 text-base">

                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="sodc_ac">
                                <span>
                                    Specify measures to ensure the anonymity and confidentiality of the study
                                    participants and data collected clearly indicated: Indicate how you would achieve
                                    this.
                                </span>
                            </label>
                            <textarea name="anonymity_confidentiality" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="sodc_pc">
                                <span>
                                    Include procedures regarding confidentality of the data, including how
                                    confidentiality will be preserved during transmission, use, and storage of the data
                                    and the names of persons or positions responsible for technical and administrative
                                    stewardship responsibilities properly discussed.
                                </span>
                            </label>
                            <textarea name="procedures_confidentiality" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" class="max-sm:h-[14px] max-sm:w-[14px]" name="sodc_fd">
                                <span>
                                    Clearly include the prcedures on how the final disposition of records, data,
                                    compuiter files, and specimens will be, including the location for any relevant
                                    information to be stored discussed.
                                </span>
                            </label>
                            <textarea name="final_disposition" id=""
                                placeholder="Page Number where description is found"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LAST PART -->
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <div
                    class="p-3 flex flex-col md:flex-row justify-between items-start md:space-x-5 space-y-4 md:space-y-0">
                    <div class="flex flex-col md:basis-1/3 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            THESIS ADVISER
                        </label>
                        <input type="text" name="thesisadviser"
                            class="block rounded border border-darkgray mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]">
                    </div>
                    <div class="flex flex-col md:basis-1/3 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            NOTED BY:
                        </label>
                        <input type="text" name="notedby"
                            class="block rounded border border-darkgray mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]">
                    </div>
                    <div class="flex flex-col md:basis-1/3 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            RESEARCH COORDINATOR
                        </label>
                        <input type="text" name="coordinator"
                            class="block rounded border border-darkgray mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]">
                    </div>
                </div>
            </div>

            <!-- BUTTONS -->
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="p-3 flex items-center justify-center space-x-2">
                    <button type="button"
                        class="bg-primary text-secondary hover:bg-secondary hover:text-primary duration-200 tracking-widest p-4 max-sm:p-3 rounded max-sm:text-sm">SAVE</button>
                    <a href="">
                        <button type="submit"
                            class="bg-secondary text-primary hover:bg-primary hover:text-secondary duration-200 tracking-widest p-4 max-sm:p-3 rounded max-sm:text-sm">EXPORT
                            TO PDF
                        </button>
                    </a>
                </div>
            </div>
        </form>
    </main>
</x-student-layout>