@section('title', 'Form 5(E)')
<x-student-layout>
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <form action="" method="POST" class="block">
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="text-right mt-3 mr-3 max-lg:text-sm max-md:text-sm max-sm:text-xs">FORM 5(E)</p>
                <h1
                    class="text-center mt-10 max-2xl:mt-6 max-lg:mt-6 max-md:mt-6 font-bold text-2xl max-xl:text-xl max-lg:text-lg max-md:text-base max-sm:text-sm mb-2 underline">
                    DOCUMENT HISTORY
                </h1>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="px-3 py-2 font-bold text-lg max-2xl:text-base max-sm:text-sm">PART I: INFORMATION</h2>
                <h2 class="p-3 font-semibold text-lg max-2xl:text-base max-sm:text-sm">TO BE FILLED UP BY P.I.</h2>
                <div
                    class="px-3 py-2 flex flex-col md:flex-row justify-between items-start md:space-x-5 space-y-5 md:space-y-0">
                    <div class="flex flex-col md:basis-1/3 w-full">
                        <!-- STUDY PROTOCOL TITLE -->
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            STUDY PROTOCOL TITLE
                        </label>
                        <input type="text" name="protocol_title"
                            class="block rounded border border-darkgray mt-1 w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <div class="flex flex-col md:basis-1/3 w-full">
                        <!-- PRINCIPAL INVESTIGATOR -->
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            PRINCIPAL INVESTIGATOR
                        </label>
                        <input type="text" name="pi_name"
                            class="mt-1 rounded border border-darkgray w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <div class="flex flex-col md:basis-1/3 w-full">
                        <!-- CO-INVESTIGATOR -->
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            CO-INVESTIGATOR/S
                        </label>
                        <input type="text" name="coiname"
                            class="mt-1 rounded border border-darkgray w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                </div>
                <div
                    class="px-3 py-2 flex flex-col md:flex-row justify-between items-start md:space-x-5 space-y-5 md:space-y-0">
                    <div class="flex flex-col md:basis-1/2 w-full">
                        <!-- PI CONTACT NO. -->
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            PI CONTACT NO.
                        </label>
                        <input type="tel" name="pi_contact" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}"
                            placeholder="09XX-XXX-XX34"
                            class="mt-1 rounded border border-darkgray w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <div class="flex flex-col md:basis-1/2 w-full">
                        <!-- PI EMAIL ADDRESS -->
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            PI EMAIL ADDRESS
                        </label>
                        <input type="email" name="pi_email" placeholder="user123@gmail.com"
                            class="mt-1 rounded border border-darkgray w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                </div>
                <div
                    class="px-3 py-2 flex flex-col md:flex-row justify-between items-start md:space-x-5 space-y-5 md:space-y-0">
                    <div class="flex flex-col md:basis-1/3 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            INSTITUTION
                        </label>
                        <input type="text" name="institution"
                            class="mt-1 rounded border border-darkgray w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <div class="flex flex-col md:basis-1/3 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            ADDRESS OF INSTITUTION
                        </label>
                        <input type="text" name="institute_address"
                            class="mt-1 rounded border border-darkgray w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                    <div class="flex flex-col md:basis-1/3 w-full">
                        <label class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                            ERB CONTACT
                        </label>
                        <input type="text" name="erb_contact"
                            class="mt-1 rounded border border-darkgray w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                            required>
                    </div>
                </div>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="p-3 gap-x-10 gap-y-3">
                    <!-- BASIC DOCUMENTS -->
                    <h2 class="font-bold max-sm:text-sm">Initial Documents</h2>
                    <div class="pt-3 space-y-2 text-base">
                        <h2 class="font-semibold max-sm:text-sm">Basic Documents (must submit for initial review)</h2>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="cover_letter">
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
                        <h2 class="font-semibold max-sm:text-sm">Protocol Package (must submit for initial review)</h2>
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
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="7_12_yrs_eng">
                            <span>Child Assent for Children Ages 7-12 years - English Version (if applicable)</span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="7_12_yrs_fil">
                            <span>
                                Child Assent for Children Ages 7-12 years - Filipino/Dialect Version (if applicable)
                            </span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="13_17_yrs_eng">
                            <span>
                                Child Assent for Children Ages 13-17 years - English Version (if applicable)
                            </span>
                        </label>
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="checkbox" class="mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="13_17_yrs_fil">
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