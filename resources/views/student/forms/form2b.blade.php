@section('title', 'Form 2(B)')
<x-student-layout>
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <form action="" method="POST" class="block">
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
                        <input type="text" name="protocol_title"
                            class="block rounded border border-darkgray mt-1 w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <div class="flex flex-col md:basis-1/2 w-full">
                        <!-- PRINCIPAL INVESTIGATOR -->
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            PRINCIPAL INVESTIGATOR
                        </label>
                        <input type="text" name="pi_name"
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
                        <input type="tel" name="pi_contact" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}"
                            class="mt-1 rounded border border-darkgray w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <div class="flex flex-col md:basis-1/3 w-full">
                        <!-- PI EMAIL ADDRESS -->
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            PI EMAIL ADDRESS
                        </label>
                        <input type="email" name="pi_email" placeholder="user123@gmail.com"
                            class="mt-1 rounded border border-darkgray w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <div class="flex flex-col md:basis-1/3 w-full">
                        <!-- CO-INVESTIGATOR -->
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            CO-INVESTIGATOR
                        </label>
                        <input type="text" name="coiname"
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
                                name="investigator_type">
                            <span>5.1. MCU Undergraduate Student(s)</span>
                        </label>
                        <!-- GRADUATE STUDENTS -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="investigator_type">
                            <span>5.2. MCU Graduate Student (MA, MS, PhD, Medical Student)</span>
                        </label>
                        <!-- FACULTIES -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="investigator_type">
                            <span>5.3. MCU Faculty</span>
                        </label>
                        <!-- NON-TEACHING STAFF -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="investigator_type">
                            <span>5.4. MCU Non-Teaching Staff</span>
                        </label>
                        <!-- ADMINISTRATIVE STAFF -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="investigator_type">
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
                        <input type="text" name="college_institution"
                            class="block rounded border border-darkgray mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <div class="flex flex-col md:basis-1/2 w-full">
                        <!-- SUBMITTED BY -->
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            SUBMITTED BY
                        </label>
                        <input type="text" name="submitted_by"
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
                            <input type="radio" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="study_type"
                                data-textbox="requirements">
                            <span>Academic Requirement (Thesis, Dissertation, Training Requirement)</span>
                        </label>
                        <!-- INDEPENDENT RESEARCH WORK / RESEARCH INITIATED -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="study_type"
                                data-textbox="independent">
                            <span>Independent Research Work/Researcher Initiated</span>
                        </label>
                        <!-- MULTI-DISCIPLINARY, MULTI-INSTITUTIONAL, OR MULTI-COUNTRY COLLABORATION -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="study_type"
                                data-textbox="disciplinary">
                            <span>Multi-Disciplinary, Multi-Institutional or Multi-Country collaboration</span>
                        </label>
                        <!-- OTHERS -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="study_type" data-textbox="others1">
                            <span>Others:</span>
                            <input type="text" id="others1" class="text-sm h-[28px] rounded border border-darkgray"
                                placeholder="Others (specify)" data-group="study_type" name="study_type" disabled>
                        </label>
                    </div>
                </div>
                <div
                    class="px-3 py-2 flex flex-col md:flex-row justify-between items-start md:space-x-5 space-y-5 md:space-y-0">
                    <!-- STUDY PROTOCOL TITLE -->
                    <div class="flex flex-col md:basis-1/2 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            STUDY PROTOCOL TITLE
                        </label>
                        <input type="text" name="protocol_title"
                            class="block rounded border border-darkgray mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <!-- STUDY PROTOCOL BRIEF DESCRIPTION -->
                    <div class="flex flex-col md:basis-1/2 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            STUDY PROTOCOL BRIEF DESCRIPTION
                        </label>
                        <input type="text" name="protocol_description"
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
                            required>
                    </div>
                    <!-- END DATE OF STUDY -->
                    <div class="flex flex-col md:basis-1/2 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            STUDY DURATION (END DATE)
                        </label>
                        <input type="date" name="end_date"
                            class="mt-1 rounded border border-darkgray w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
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
                        <input type="text" name="settings_site"
                            class="block rounded border border-darkgray mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <!-- NUMBER OF STUDY PARTICIPANTS -->
                    <div class="flex flex-col md:basis-1/2 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            NUMBER OF STUDY PARTICIPANTS
                        </label>
                        <input type="text" name="study_participants"
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
                            <input type="radio" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="funds"
                                data-textbox="selffunded">
                            <span>Self-Funded</span>
                        </label>
                        <!-- GOVERNMENT-FUNDED -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="funds"
                                data-textbox="govfunded">
                            <span>Government-Funded</span>
                        </label>
                        <!-- RESEARCH GRANT -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="funds"
                                data-textbox="grant">
                            <span>Research Grant/Scholarship</span>
                        </label>
                        <!-- INSTITUTION-FUNDED -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="funds"
                                data-textbox="institute">
                            <span>Institution-Funded</span>
                        </label>
                        <!-- SPONSORED BY PHARMACEUTICAL COMPANY -->
                        <label class="flex max-sm:block max-sm:space-x-1 items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="funds"
                                data-textbox="pharma">
                            <span>Sponsored by Pharmaceutical Company</span>
                            <input type="text" id="pharma" class="text-sm h-[28px] rounded border border-darkgray"
                                placeholder="Specify" data-group="funds" name="funds" disabled>
                        </label>
                        <!-- OTHERS -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="funds"
                                data-textbox="others2">
                            <span>Others</span>
                            <input type="text" id="others2" class="text-sm h-[28px] rounded border border-darkgray"
                                placeholder="Specify" data-group="funds" name="funds" disabled>
                        </label>
                    </div>
                </div>
                <div class="p-3 space-y-2 text-base">
                    <h2 class="font-bold max-sm:text-sm">Has the Research undergone Technical Review?</h2>
                    <div class="grid grid-cols-1 gap-x-5 gap-y-3 max-sm:gap-y-1">
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="tech_review">
                            <span>Yes (please attach certification of technical review results and approval from
                                Research Adviser noted by the Dean of the College)</span>
                        </label>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="tech_review">
                            <span>No</span>
                        </label>
                    </div>
                </div>
                <div class="p-3 space-y-2 text-base">
                    <h2 class="font-bold max-sm:text-sm">Has the Research been submitted to another ERB?</h2>
                    <div class="grid grid-cols 1 gap-x-5">
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="erb_submit">
                            <span>Yes</span>
                            <input type="radio" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="erb_submit">
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
                            <textarea name="information_confidentiality" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
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
                            <textarea name="participants_vulnerability" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
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
                            <textarea name="study_risks" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
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
                            <textarea name="study_benefits" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
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
                            <textarea name="patient_related" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
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
                            <textarea name="informed_consent_process" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
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
                            <textarea name="community_considerations" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
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
                            <textarea name="dissemination" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
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
                            <textarea name="study_risks" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                    </div>
                </div>
                <div class="p-3 space-y-2 text-base">
                    <h2 class="font-bold max-sm:text-sm">Use of special population or vulnerable groups</h2>
                    <div class="grid 2xl:grid-cols-3 max-md:grid-cols-1 md:grid-cols-2 max-lg:grid-cols-2 gap-y-3">
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="special_population" value="Children">
                            <span>11.1. Children (under 18)</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="special_population" value="Indigenous people">
                            <span>11.2. Indigenous people</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="special_population" value="Elderly">
                            <span>11.3. Elderly</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="special_population" value="People on welfare/social assistance">
                            <span>11.4. People on welfare/social assistance</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="special_population" value="Poor and unemployed">
                            <span>11.5. Poor and unemployed</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="special_population" value="Patients in emergency care">
                            <span>11.6. Patients in emergency care</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="special_population" value="Homeless persons">
                            <span>11.7. Homeless persons</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="special_population" value="Refugees or displaced persons">
                            <span>11.8. Refugees or displaced persons</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="special_population" value="Patients with incurable diseases">
                            <span>11.9. Patients with incurable diseases</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="special_population" data-textbox="others3">
                            <span>11.10. Others</span>
                            <input type="text" id="others3" class="text-sm h-[28px] rounded border border-darkgray"
                                placeholder="Indicate" data-group="special_population" name="special_population" disabled>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="special_population" value="N/A" data-group="5">
                            <span>11.11. Not applicable</span>
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