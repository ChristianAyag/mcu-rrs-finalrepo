@section('title', 'Form 2(B)')
<x-student-layout>
    <main class="xl:ml-[335px] max-xl:ml-auto p-4">
        <form action="{{ route('form2b.store') }}" method="POST" class="block">
            @csrf
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="text-right mt-3 mr-3 max-lg:text-sm max-md:text-sm max-sm:text-xs">FORM 2(B)</p>
                <h1
                    class="text-center mt-10 max-2xl:mt-6 max-lg:mt-6 max-md:mt-6 font-bold text-2xl max-xl:text-xl max-lg:text-lg max-md:text-base max-sm:text-sm mb-2 underline">
                    APPLICATION FOR INITIAL REVIEW
                </h1>
            </div>

            <!-- APPLICATION INFORMATION -->
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="px-3 py-2 font-bold text-lg max-2xl:text-base max-sm:text-sm">SECTION I: APPLICATION
                    INFORMATION</h2>
                <h2 class="p-3 font-semibold text-lg max-2xl:text-base max-sm:text-sm">TO BE FILLED UP BY P.I.</h2>
                <div
                    class="px-3 py-2 flex flex-col md:flex-row justify-between items-start md:space-x-5 space-y-5 md:space-y-0">
                    <div class="flex flex-col md:basis-1/2 w-full">
                        <!-- STUDY PROTOCOL TITLE -->
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            STUDY PROTOCOL TITLE
                        </label>
                        <input type="text" name="protocol" value="{{ old('protocol', $researchInfo->research_title ?? '') }}"
                            class="block rounded border border-darkgray mt-1 w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <div class="flex flex-col md:basis-1/2 w-full">
                        <!-- PRINCIPAL INVESTIGATOR -->
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            PRINCIPAL INVESTIGATOR
                        </label>
                        <input type="text" name="pi_name" value="{{ $principalInvestigator }}" 
                            class="mt-1 rounded border border-darkgray w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                </div>
                <div
                    class="px-3 py-2 flex flex-col md:flex-row justify-between items-start md:space-x-5 space-y-5 md:space-y-0">
                    <div class="flex flex-col md:basis-1/3 w-full">
                        <!-- PI CONTACT NO. -->
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            PI CONTACT NO.
                        </label>
                        <input type="tel" name="pi_contact" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" placeholder="0927-409-2591 " value="{{ old('pi_contact', $form2b->pi_contact ?? '') }}"
                            class="mt-1 rounded border border-darkgray w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <div class="flex flex-col md:basis-1/3 w-full">
                        <!-- PI EMAIL ADDRESS -->
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            PI EMAIL ADDRESS
                        </label>
                        <input type="email" name="pi_email" placeholder="user123@gmail.com" value="{{ auth()->user()->user_Email }}"
                            class="mt-1 rounded border border-darkgray w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <div class="flex flex-col md:basis-1/3 w-full">
                        <!-- CO-INVESTIGATOR -->
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            CO-INVESTIGATOR
                        </label>
                        <input type="text" name="coiname" value="{{ old('coiname', $researchInfo->research_CoInvestigator ?? '') }}"
                            class="mt-1 rounded border border-darkgray w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                </div>
                <div class="p-3 space-y-2 text-base">
                    <!-- CATEGORY OF INVESTIGATOR -->
                    <h2 class="font-bold max-sm:text-sm">Category of Investigator</h2>
                    <div class="grid 2xl:grid-cols-3 max-md:grid-cols-1 md:grid-cols-2 max-lg:grid-cols-2 gap-y-3">
                        <!-- UNDERGRADUATE STUDENTS -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="investigator_type" value="MCU Undergraduate Student" {{ old('investigator_type', $form2b->investigator_type ?? '') == 'MCU Undergraduate Student' ? 'checked' : '' }}>
                            <span>5.1. MCU Undergraduate Student(s)</span>
                        </label>
                        <!-- GRADUATE STUDENTS -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="investigator_type" value="MCU Graduate Student" {{ old('investigator_type', $form2b->investigator_type ?? '') == 'MCU Graduate Student' ? 'checked' : '' }}>
                            <span>5.2. MCU Graduate Student (MA, MS, PhD, Medical Student)</span>
                        </label>
                        <!-- FACULTIES -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="investigator_type" value="MCU Faculty" {{ old('investigator_type', $form2b->investigator_type ?? '') == 'MCU Faculty' ? 'checked' : '' }}>
                            <span>5.3. MCU Faculty</span>
                        </label>
                        <!-- NON-TEACHING STAFF -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="investigator_type" value="MCU Non-Teaching Staff" {{ old('investigator_type', $form2b->investigator_type ?? '') == 'MCU Non-Teaching Staff' ? 'checked' : '' }}>
                            <span>5.4. MCU Non-Teaching Staff</span>
                        </label>
                        <!-- ADMINISTRATIVE STAFF -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="investigator_type" value="MCU Administrative Staff" {{ old('investigator_type', $form2b->investigator_type ?? '') == 'MCU Administrative Staff' ? 'checked' : '' }}>
                            <span>5.5. MCU Administrative Staff</span>
                        </label>
                    </div>
                </div>
                <div
                    class="px-3 py-2 flex flex-col md:flex-row justify-between items-start md:space-x-5 space-y-5 md:space-y-0">
                    <div class="flex flex-col md:basis-1/2 w-full">
                        <!-- ENDORSING / COLLEGE / UNIT / INSTITUTION -->
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            ENDORSING/COLLEGE/UNIT/INSTITUTION
                        </label>
                        <input type="text" name="college_institution" value="{{ old('college_institution', $form2b->college_institution ?? '') }}"
                            class="block rounded border border-darkgray mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <div class="flex flex-col md:basis-1/2 w-full">
                        <!-- SUBMITTED BY -->
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            SUBMITTED BY
                        </label>
                        <input type="text" name="submitted_by" value="{{ old('submitted_by', $form2b->submitted_by ?? '') }}"
                            class="mt-1 rounded border border-darkgray w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                </div>
            </div>
                <!-- SECTION II: PROTOCOL INFORMATION -->
                <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                    <h2 class="px-3 py-2 font-bold text-lg max-2xl:text-base max-sm:text-sm">SECTION II: PROTOCOL
                        INFORMATION</h2>
                    <h2 class="p-3 font-semibold text-lg max-2xl:text-base max-sm:text-sm">TYPE OF STUDY</h2>
                    <div class="p-3 space-y-2 text-base">
                        <div
                            class="grid 2xl:grid-cols-3 max-md:grid-cols-1 md:grid-cols-2 max-lg:grid-cols-2 gap-y-3 max-sm:gap-y-1">
                            <!-- ACADEMIC REQUIREMENT -->
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="study_type" value="Academic Requirement" {{ old('study_type', $form2b->study_type ?? '') == 'Academic Requirement' ? 'checked' : '' }}
                                    data-textbox="requirements">
                                <span>Academic Requirement (Thesis, Dissertation, Training Requirement)</span>
                            </label>
                            <!-- INDEPENDENT RESEARCH WORK / RESEARCH INITIATED -->
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="study_type" value="Independent Research Work/Researcher Initiated" {{ old('study_type', $form2b->study_type ?? '') == 'Independent Research Work/Researcher Initiated' ? 'checked' : '' }}
                                    data-textbox="independent">
                                <span>Independent Research Work/Researcher Initiated</span>
                            </label>
                            <!-- MULTI-DISCIPLINARY, MULTI-INSTITUTIONAL, OR MULTI-COUNTRY COLLABORATION -->
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="study_type" value="Multi-Disciplinary, Multi-Institutional or Multi-Country collaboration" {{ old('study_type', $form2b->study_type ?? '') == 'Multi-Disciplinary, Multi-Institutional or Multi-Country collaboration' ? 'checked' : '' }}
                                    data-textbox="disciplinary">
                                <span>Multi-Disciplinary, Multi-Institutional or Multi-Country collaboration</span>
                            </label>
                            <!-- OTHERS -->
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" 
                                    class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" 
                                    name="study_type" 
                                    value="Others"
                                    {{ old('study_type', $form2b->study_type ?? '') == 'Others' ? 'checked' : '' }}
                                    onclick="toggleOthersInput(true)">
                                <span>Others:</span>
                                <input type="text" 
                                    id="others_input" 
                                    class="text-sm h-[28px] rounded border border-darkgray"
                                    placeholder="Others (specify)" 
                                    name="study_type_text"
                                    value="{{ old('study_type_text', $form2b->study_type_text ?? '') }}"
                                    {{ old('study_type', $form2b->study_type ?? '') == 'Others' ? '' : 'disabled' }}>
                        </div>
                    </div>
                <div
                    class="px-3 py-2 flex flex-col md:flex-row justify-between items-start md:space-x-5 space-y-5 md:space-y-0">
                    <!-- STUDY PROTOCOL TITLE -->
                    <div class="flex flex-col md:basis-1/2 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            STUDY PROTOCOL TITLE
                        </label>
                        <input type="text" name="protocol_title" value="{{ old('protocol', $researchInfo->research_title ?? '') }}"
                            class="block rounded border border-darkgray mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <!-- STUDY PROTOCOL BRIEF DESCRIPTION -->
                    <div class="flex flex-col md:basis-1/2 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            STUDY PROTOCOL BRIEF DESCRIPTION
                        </label>
                        <input type="text" name="protocol_description" value="{{ old('protocol_description', $form2b->protocol_description ?? '') }}"
                            class="mt-1 rounded border border-darkgray w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                </div>
                <div
                    class="px-3 py-2 flex flex-col md:flex-row justify-between items-start md:space-x-5 space-y-5 md:space-y-0">
                    <!-- START DATE OF STUDY -->
                    <div class="flex flex-col md:basis-1/2 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            STUDY DURATION (START DATE)
                        </label>
                        <input type="date" name="start_date"
                            class="block rounded border border-darkgray mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            value="{{ old('start_date', $form2b->start_date ?? '') }}"  
                            required>
                    </div>
                    <!-- END DATE OF STUDY -->
                    <div class="flex flex-col md:basis-1/2 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            STUDY DURATION (END DATE)
                        </label>
                        <input type="date" name="end_date"
                            class="mt-1 rounded border border-darkgray w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            value="{{ old('end_date', $form2b->end_date ?? '') }}"  
                            required>
                    </div>
                </div>
                <div
                    class="px-3 py-2 flex flex-col md:flex-row justify-between items-start md:space-x-5 space-y-5 md:space-y-0">
                    <!-- STUDY SETTINGS -->
                    <div class="flex flex-col md:basis-1/2 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            STUDY SETTINGS OR SITE/S
                        </label>
                        <input type="text" name="settings_site" value="{{ old('settings_site', $form2b->settings_site ?? '') }}"
                            class="block rounded border border-darkgray mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <!-- NUMBER OF STUDY PARTICIPANTS -->
                    <div class="flex flex-col md:basis-1/2 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            NUMBER OF STUDY PARTICIPANTS
                        </label>
                        <input type="text" name="study_participants" value="{{ old('study_participants', $form2b->study_participants ?? '') }}"
                            class="mt-1 rounded border border-darkgray w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                </div>
                <div class="p-3 space-y-2 text-base">
                    <!-- SOURCE OF FUNDING -->
                    <h2 class="font-bold max-sm:text-sm">Source of Funding</h2>
                    <div
                        class="grid 2xl:grid-cols-2 max-md:grid-cols-1 md:grid-cols-2 max-lg:grid-cols-2 gap-x-5 gap-y-3 max-sm:gap-y-2">
                        <!-- SELF-FUNDED -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" name="funds" value="Self-Funded"
                                {{ old('funds', $form2b->funds ?? '') == 'Self-Funded' ? 'checked' : '' }}>
                            <span>Self-Funded</span>
                        </label>

                        <!-- GOVERNMENT-FUNDED -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" name="funds" value="Government-Funded"
                                {{ old('funds', $form2b->funds ?? '') == 'Government-Funded' ? 'checked' : '' }}>
                            <span>Government-Funded</span>
                        </label>

                        <!-- RESEARCH GRANT -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" name="funds" value="Research Grant/Scholarship"
                                {{ old('funds', $form2b->funds ?? '') == 'Research Grant/Scholarship' ? 'checked' : '' }}>
                            <span>Research Grant/Scholarship</span>
                        </label>

                        <!-- INSTITUTION-FUNDED -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" name="funds" value="Institution-Funded"
                                {{ old('funds', $form2b->funds ?? '') == 'Institution-Funded' ? 'checked' : '' }}>
                            <span>Institution-Funded</span>
                        </label>

                        <!-- Pharmaceutical -->
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="funds" value="Pharmaceutical"
                                {{ old('funds', optional($form2b)->funds) === 'Pharmaceutical' ? 'checked' : '' }}
                                onclick="toggleTextbox('pharma', this)">
                            <span>Pharmaceutical</span>
                        </label>
                        <input type="text" id="pharma" name="funds_pharma_details"
                            class="border rounded w-full p-2 mt-1"
                            placeholder="If pharmaceutical, specify details"
                            value="{{ old('funds_pharma_details', optional($form2b)->funds === 'Pharmaceutical' ? $form2b->funds_details : '') }}"
                            {{ old('funds', optional($form2b)->funds) === 'Pharmaceutical' ? '' : 'disabled' }}>


                        <!-- Others -->
                        <label class="flex items-center space-x-2 mt-3">
                            <input type="radio" name="funds" value="Others"
                                {{ old('funds', optional($form2b)->funds) === 'Others' ? 'checked' : '' }}
                                onclick="toggleTextbox('others', this)">
                            <span>Others</span>
                        </label>
                        <input type="text" id="others" name="funds_others_details"
                            class="border rounded w-full p-2 mt-1"
                            placeholder="If others, specify details"
                            value="{{ old('funds_others_details', optional($form2b)->funds === 'Others' ? $form2b->funds_details : '') }}"
                            {{ old('funds', optional($form2b)->funds) === 'Others' ? '' : 'disabled' }}>
                        </label>
                    </div>
                </div>
                <div class="p-3 space-y-2 text-base">
                    <h2 class="font-bold max-sm:text-sm">Has the Research undergone Technical Review?</h2>
                    <div class="grid grid-cols-1 gap-x-5 gap-y-3 max-sm:gap-y-1">
                        {{-- YES --}}
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" 
                                class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" 
                                name="tech_review" 
                                value="1"
                                {{ old('tech_review', $form2b->tech_review ?? '') == 1 ? 'checked' : '' }}>
                            <span>Yes (please attach certification of technical review results and approval from
                                Research Adviser noted by the Dean of the College)</span>
                        </label>

                        {{-- NO --}}
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" 
                                class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" 
                                name="tech_review" 
                                value="0"
                                {{ old('tech_review', $form2b->tech_review ?? '') === 0 ? 'checked' : '' }}>
                            <span>No</span>
                        </label>
                    </div>
                </div>

                <div class="p-3 space-y-2 text-base">
                    <h2 class="font-bold max-sm:text-sm">Has the Research been submitted to another ERB?</h2>
                    <div class="grid grid-cols-1 gap-x-5">
                        {{-- YES --}}
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" 
                                class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" 
                                name="erb_submit" 
                                value="1"
                                {{ old('erb_submit', $form2b->erb_submit ?? '') == 1 ? 'checked' : '' }}>
                            <span>Yes</span>
                        </label>

                        {{-- NO --}}
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" 
                                class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" 
                                name="erb_submit" 
                                value="0"
                                {{ old('erb_submit', $form2b->erb_submit ?? '') === 0 ? 'checked' : '' }}>
                            <span>No</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="px-3 py-2 font-bold text-lg max-2xl:text-base max-sm:text-sm">SECTION III: ETHICAL
                    CONSIDERATIONS</h2>
                <div class="p-3">
                    <div class="mt-2 space-y-2 text-base">
                        <!-- Informed Consent -->
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Protection of privacy and confidentiality of research information including data
                                    protection plan.
                                </span><br>
                                <span class="text-sm italic">
                                    The section on ethical considerations should be stated in the study protocol.
                                    Please write a summary on protection of privacy and confidentiality of research
                                    information including data protection plan.
                                </span>
                            </label>
                            <textarea name="information_confidentiality" id="information_confidentiality"
                                class="w-full border rounded p-2">{{ old('information_confidentiality', $form2b->information_confidentiality ?? '') }}</textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Vulnerability of research participants
                                </span><br>
                                <span class="text-sm italic">
                                    Please write a summary regarding vulnerability of research participants, as
                                    applicable.
                                </span>
                            </label>
                            <textarea name="participants_vulnerability" id="participants_vulnerability"
                                class="w-full border rounded p-2">{{ old('participants_vulnerability', $form2b->participants_vulnerability ?? '') }}</textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Risks of the study
                                </span><br>
                                <span class="text-sm italic">
                                    Please write a summary on measures regarding risks of the study, including
                                    social risks and issues for safety.
                                </span>
                            </label>
                            <textarea name="study_risks" id="study_risks"
                                class="w-full border rounded p-2">{{ old('study_risks', $form2b->study_risks ?? '') }}</textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Benefits of the study
                                </span><br>
                                <span class="text-sm italic">
                                    Please write a summary regarding benefits of the study, including a statement
                                    justifying a favorable benefit-risk ratio.
                                </span>
                            </label>
                            <textarea name="study_benefits" id="study_benefits"
                                class="w-full border rounded p-2">{{ old('study_benefits', $form2b->study_benefits ?? '') }}</textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Patient-related compensations / reimbursements / entitlements
                                </span><br>
                                <span class="text-sm italic">
                                    Please write plans on patient-related compensations / reimbursements / entitlements.
                                </span>
                            </label>
                            <textarea name="patient_related" id="patient_related"
                                class="w-full border rounded p-2">{{ old('patient_related', $form2b->patient_related ?? '') }}</textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Informed consent process and recruitment procedures
                                </span><br>
                                <span class="text-sm italic">
                                    Please write a summary regarding process of recruitment and informed consent,
                                    including how potential participants will be identified and what information
                                    will be made available to the participants, who will obtain informed consent and
                                    how this will be done.
                                </span>
                            </label>
                            <textarea name="informed_consent_process" id="informed_consent_process"
                                class="w-full border rounded p-2">{{ old('informed_consent_process', $form2b->informed_consent_process ?? '') }}</textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Community considerations
                                </span><br>
                                <span class="text-sm italic">
                                    Please write a statement regarding community considerations, as applicable.
                                </span>
                            </label>
                            <textarea name="community_considerations" id="community_considerations"
                                class="w-full border rounded p-2">{{ old('community_considerations', $form2b->community_considerations ?? '') }}</textarea> 
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Dissemination/Data sharing plan
                                </span><br>
                                <span class="text-sm italic">
                                    Please write a summary regarding plans on dissemination and data sharing.
                                </span>
                            </label>
                            <textarea name="dissemination" id="dissemination"
                                class="w-full border rounded p-2">{{ old('dissemination', $form2b->dissemination ?? '') }}</textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Terms of reference of collaborative study
                                </span><br>
                                <span class="text-sm italic">
                                    Please indicate terms of reference of collaborative study, as applicable, such
                                    as intellectual property agreements and similar concerns.
                                </span>
                            </label>
                            <textarea name="collaborative_terms" id="collaborative_terms"
                                class="w-full border rounded p-2">{{ old('collaborative_terms', $form2b->collaborative_terms ?? '') }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="p-3 space-y-2 text-base">
                    <h2 class="font-bold max-sm:text-sm">Use of special population or vulnerable groups</h2>
                    <div class="grid 2xl:grid-cols-3 max-md:grid-cols-1 md:grid-cols-2 max-lg:grid-cols-2 gap-y-3">
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" name="special_population" value="Children"
                                {{ optional($form2b)->special_population === 'Children' ? 'checked' : '' }}>
                            <span>11.1. Children (under 18)</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" name="special_population" value="Indigenous people"
                                {{ optional($form2b)->special_population === 'Indigenous people' ? 'checked' : '' }}>
                            <span>11.2. Indigenous people</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="special_population" value="Elderly" 
                                {{ optional($form2b)->special_population === 'Elderly' ? 'checked' : '' }}>
                            <span>11.3. Elderly</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="special_population" value="People on welfare/social assistance"
                                {{ optional($form2b)->special_population === 'People on welfare/social assistance' ? 'checked' : '' }}>
                            <span>11.4. People on welfare/social assistance</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="special_population" value="Poor and unemployed"
                                {{ optional($form2b)->special_population === 'Poor and unemployed' ? 'checked' : '' }}>
                            <span>11.5. Poor and unemployed</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="special_population" value="Patients in emergency care"
                                {{ optional($form2b)->special_population === 'Patients in emergency care' ? 'checked' : '' }}>
                            <span>11.6. Patients in emergency care</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="special_population" value="Homeless persons"
                                {{ optional($form2b)->special_population === 'Homeless persons' ? 'checked' : '' }}>
                            <span>11.7. Homeless persons</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="special_population" value="Refugees or displaced persons"
                                {{ optional($form2b)->special_population === 'Refugees or displaced persons' ? 'checked' : '' }}>
                            <span>11.8. Refugees or displaced persons</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="special_population" value="Patients with incurable diseases"
                                {{ optional($form2b)->special_population === 'Patients with incurable diseases' ? 'checked' : '' }}>
                            <span>11.9. Patients with incurable diseases</span>
                        <label>
                            <input type="radio" name="special_population" value="Others"
                                {{ optional($form2b)->special_population === 'Others' ? 'checked' : '' }}
                                data-textbox="others3">
                            1.10. Others
                            <input type="text" id="others3"
                                name="special_population_others"
                                value="{{ optional($form2b)->special_population_others }}"
                                placeholder="Indicate"
                                {{ optional($form2b)->special_population === 'Others' ? '' : 'disabled' }}>
                        </label>

                        <label>
                            <input type="radio" name="special_population" value="N/A"
                                {{ optional($form2b)->special_population === 'N/A' ? 'checked' : '' }}>
                            1.11. Not applicable
                        </label>
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
                            TO PDF</button>
                    </a>
                </div>
            </div>
        </form>
    </main>
</x-student-layout>


<script>
function toggleOthersInput(forceEnable = false) {
    const othersRadio = document.querySelector('input[name="study_type"][value="Others"]');
    const othersInput = document.getElementById('others_input');

    if (othersRadio.checked || forceEnable) {
        othersInput.removeAttribute('disabled');
        othersInput.focus();
    } else {
        othersInput.setAttribute('disabled', true);
        othersInput.value = '';
    }
}

// Attach listener for radio change
document.querySelectorAll('input[name="study_type"]').forEach(radio => {
    radio.addEventListener('change', () => {
        toggleOthersInput();
    });
});


// Run once on page load in case "Others" is pre-selected
document.addEventListener("DOMContentLoaded", () => {
    toggleOthersInput();
});


function toggleTextbox(id, radio) {
    // Disable all fund textboxes
    document.getElementById('pharma').disabled = true;
    document.getElementById('others').disabled = true;

    // Enable only the one chosen
    const textbox = document.getElementById(id);
    if (textbox) {
        textbox.disabled = false;
        textbox.focus();
    }
}
</script>