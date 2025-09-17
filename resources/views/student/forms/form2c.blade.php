@section('title', 'Form 2(C)')
<x-student-layout>
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <form action="" method="POST" class="block">
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="text-right mt-3 mr-3 max-lg:text-sm max-md:text-sm max-sm:text-xs">FORM 2(C)</p>
                <h1
                    class="text-center mt-10 max-2xl:mt-6 max-lg:mt-6 max-md:mt-6 font-bold text-2xl max-xl:text-xl max-lg:text-lg max-md:text-base max-sm:text-sm mb-2 underline">
                    INFORMED CONSENT FORM
                </h1>
            </div>

            <!-- INFORMATION -->
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
                <h2 class="px-3 py-2 font-bold text-lg max-2xl:text-base max-sm:text-sm">PART II: INTRODUCTION</h2>
                <div class="px-3 py-2 md:space-x-5 space-y-5 md:space-y-0">
                    <p class="space-y-2 max-sm:text-sm/6">
                        I am / We are <i>(3rd year/4th year)</i> student of the <i>(College)</i>. <b>(OR)</b> <br>I am /
                        We
                        are undertaking a research on <i>(topic of research)</i> _______________________________ .
                        <b>(OR)</b> <br>I am
                        Dr. / Mr. / Ms. _______________________________
                        working in the <i>(College / Department)</i> _______________________________
                        as <i>(Designation)</i> _______________________________ .
                    </p>
                </div>
                <div class="px-3 py-2 md:space-x-5 space-y-5 md:space-y-0">
                    <p class="space-y-2 text-base/7 max-sm:text-sm/6">
                        This form provides you information and invites you to be part of this research study. You may
                        discuss the research with anyone you are comfortable with before making a decision to
                        participate or not.
                    </p>
                </div>
                <div class="px-3 py-2 md:space-x-5 space-y-5 md:space-y-0">
                    <p class="space-y-2 text-base/7 max-sm:text-sm/6">
                        This form may contain certain words that you not clearly understand. Please do not hesitate to
                        inquire from me/us at any point if you have any questions or need clarification. If any
                        questions/doubts arise at a later time, you may inquire from me/us at any time during this
                        research.
                    </p>
                </div>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="px-3 py-2 font-bold text-lg max-2xl:text-base max-sm:text-sm">PART III: RESEARCH STUDY</h2>
                <div class="p-3">
                    <div class="mt-2 space-y-2 text-base">
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Description and Purpose of the Research
                                </span><br>
                                <span class="text-sm italic">
                                    Briefly describe background of the problem, justification and the objectives of the
                                    research in layman's terms.
                                </span>
                            </label>
                            <textarea name="research_purpose" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Procedures of Research
                                </span>
                                <br>
                                <span class="text-sm italic">
                                    In layman's terms, give a concise description of the procedures in the exact order
                                    in a step-by-step manner. Include information on the assessments, tests, measure
                                    that will be performed. Please indicate which procedures are routine and which are
                                    experimental or research. Participants should understand clearly what to expect and
                                    what is expected to them.
                                </span>
                            </label>
                            <textarea name="research_purpose" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Participant selection and voluntary
                                </span>
                                <br>
                                <span class="text-sm italic">
                                    Briefly describe how and from where participants are selected for you study. Justify
                                    why they were selected.
                                </span>
                            </label>
                            <textarea name="research_purpose" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Participation in the Study
                                </span>
                                <br>
                                <span class="text-sm italic">
                                    Reiterate that their participation in the study is VOLUNTARY.
                                </span>
                            </label>
                            <textarea name="research_purpose" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Duration
                                </span>
                                <br>
                                <span class="text-sm italic">
                                    Mention the estimated duration of the research study; specify dates if possible.
                                </span>
                            </label>
                            <textarea name="research_purpose" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Potential Risks / Hazards / Discomforts
                                </span>
                                <br>
                                <span class="text-sm italic">
                                    If there are any risks / hazards / discomforts involved in the research study,
                                    mention all clearly.
                                </span>
                            </label>
                            <textarea name="research_purpose" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Potential Benefits
                                </span>
                                <br>
                                <span class="text-sm italic">
                                    If there are any potential benefits directly or indirectly to the participants, to
                                    practice, policy, research, theory, and/or to the community as a whole as a result
                                    of your research study, all benefits should be mentioned.
                                </span>
                            </label>
                            <textarea name="research_purpose" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Management of Study-Related Injuries/Harms
                                </span>
                                <br>
                                <span class="text-sm italic">
                                    Describe how occurrence of study related injuries/harms (physical, psychological,
                                    mental, and social) would be managed and addressed.
                                </span>
                            </label>
                            <textarea name="research_purpose" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Compensation
                                </span>
                                <br>
                                <span class="text-sm italic">
                                    If the participants are compensated either monetarily or otherwise (e.g., tokens,
                                    refreshments), please mention the details, including any payment to the participant
                                    indicating the amount or details of the token(s) if necessary, when it would be
                                    paid/given and any conditions attached to it. If no compensations will be given,
                                    please mention this as well.
                                </span>
                            </label>
                            <textarea name="research_purpose" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Confidentiality and Anonymity
                                </span>
                                <br>
                                <span class="text-sm italic">
                                    Briefly describe what measures are taken to ensure the participants' confidentiality
                                    by participating in your research study.
                                </span>
                            </label>
                            <textarea name="research_purpose" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Right to Refuse or Withdraw
                                </span>
                                <br>
                                <span class="text-sm italic">
                                    Include a statement informing about their right to withdraw from participation or
                                    refuse to participate
                                </span>
                            </label>
                            <textarea name="research_purpose" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Whom to Contact
                                </span>
                                <br>
                                <span class="text-sm italic">
                                    Provide details of ALL investigators that should be contacted in the following
                                    format
                                </span>
                            </label>
                            <div
                                class="py-2 flex flex-col md:flex-row justify-between items-start md:space-x-5 space-y-5 md:space-y-0">
                                <div class="flex flex-col md:basis-1/4 w-full">
                                    <!-- PI CONTACT NO. -->
                                    <label
                                        class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                                        NAME WITH TITLE
                                    </label>
                                    <input type="text" name="title_name"
                                        class="mt-1 rounded border border-darkgray w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                                        required>
                                </div>
                                <div class="flex flex-col md:basis-1/4 w-full">
                                    <!-- PI CONTACT NO. -->
                                    <label
                                        class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                                        INSTITUTION
                                    </label>
                                    <input type="text" name="institution"
                                        class="mt-1 rounded border border-darkgray w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                                        required>
                                </div>
                                <div class="flex flex-col md:basis-1/4 w-full">
                                    <!-- PI CONTACT NO. -->
                                    <label
                                        class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                                        PI CONTACT NO.
                                    </label>
                                    <input type="tel" name="pi_contact" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}"
                                        placeholder="09XX-XXX-XX34"
                                        class="mt-1 rounded border border-darkgray w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                                        required>
                                </div>
                                <div class="flex flex-col md:basis-1/4 w-full">
                                    <!-- PI EMAIL ADDRESS -->
                                    <label
                                        class="font-semibold text-base max-2xl:text-base max-lg:text-sm max-sm:text-[13px]">
                                        PI EMAIL ADDRESS
                                    </label>
                                    <input type="email" name="pi_email" placeholder="user123@gmail.com"
                                        class="mt-1 rounded border border-darkgray w-full text-sm max-sm:text-[13px] h-[35px] max-lg:h-[30px]"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Approval by the MCUERB
                                </span>
                                <br>
                                <span class="text-sm italic">
                                    Inform the participants that this study protocol/proposal has been reviewed and
                                    approved by the MCU-ERB. The committee is a group of scientific and non-scientific
                                    individuals who perform the initial and ongoing ethical review of the research with
                                    the study participants'/patients' welfare in mind.
                                </span>
                            </label>
                            <textarea name="research_purpose" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <span class="font-semibold">
                                    Where to Contact MCUERB
                                </span>
                                <br>
                                <span class="text-sm italic">
                                    Indicate the Contact information of the MCUERB
                                </span>
                            </label>
                            <textarea name="research_purpose" id=""
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="px-3 py-2 font-bold text-lg max-2xl:text-base max-sm:text-sm">PART IV: CERTIFICATE OF CONSENT
                </h2>
                <h2 class="px-3 py-2 font-semibold text-lg max-2xl:text-base max-sm:text-sm">TO BE FILLED UP BY
                    PARTICIPANTS
                </h2>
                <div class="p-3 mt-2 space-y-2 text-base max-sm:text-sm">
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                1. Have you read the information sheet? (Please keep a copy for yourself)
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1">
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="information_sheet" data-group="1">
                            <span>Yes</span>
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="information_sheet" data-group="1">
                            <span>No</span>
                        </div>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                2. Have you had an opportunity to discuss this study and ask any questions?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1">
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="study_discuss" data-group="2">
                            <span>Yes</span>
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="study_discuss" data-group="2">
                            <span>No</span>
                        </div>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                3. Have you had satisfactory answers to all your questions?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1">
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="satisfactory_answers" data-group="3">
                            <span>Yes</span>
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="satisfactory_answers" data-group="3">
                            <span>No</span>
                        </div>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                4. Have you received enough information about the study
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1">
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="study_information" data-group="4">
                            <span>Yes</span>
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="study_information" data-group="4">
                            <span>No</span>
                        </div>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                5. Do you fully understand the full nature and procedure of the study?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1">
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="study_nature" data-group="5">
                            <span>Yes</span>
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="information_sheet" data-group="5">
                            <span>No</span>
                        </div>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                6. Do you understand that you are free to withdraw from the study at any time, without
                                having to give a reason and without affecting your future medical care?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1">
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="withdraw" data-group="6">
                            <span>Yes</span>
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="withdraw" data-group="6">
                            <span>No</span>
                        </div>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                7. Sections of your medical notes, may be examined by the investigator / members of the
                                research team. All personal details will be treated as STRICTLY CONFIDENTIAL. Do you
                                give your permission for the access to your records? (as applicable)
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1">
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="medical" data-group="7">
                            <span>Yes</span>
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="medical" data-group="7">
                            <span>No</span>
                        </div>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                8. Do you allow that the whole interview process will be audio-recorded? (as applicable)
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1">
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="interview" data-group="8">
                            <span>Yes</span>
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="interview" data-group="8">
                            <span>No</span>
                        </div>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                9. Have you had sufficient time to come to your decision?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1">
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="decision" data-group="9">
                            <span>Yes</span>
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="decision" data-group="9">
                            <span>No</span>
                        </div>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                10. Do you voluntarily and freely given without influence, force or intimidation from
                                any person agree to take part in this study?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1">
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="voluntary" data-group="10">
                            <span>Yes</span>
                            <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="voluntary" data-group="10">
                            <span>No</span>
                        </div>
                    </div>
                </div>
                <div
                    class="px-3 py-2 flex flex-col md:flex-row justify-between items-start md:space-x-5 space-y-5 md:space-y-0">
                    <label class="max-sm:py-1 flex items-start font-semibold space-x-2 max-sm:text-sm/6">
                        <span>
                            Note: The Principal Investigator(s) must keep a copy of the signed, dated, consent form and a
                            copy must be given to the study participant.
                        </span>
                    </label>
                </div>
            </div>

            <!-- BUTTONS -->
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="p-3 flex items-center justify-center space-x-2">
                    <button type="button"
                        class="bg-primary text-secondary hover:bg-secondary hover:text-primary duration-200 tracking-widest p-4 max-sm:p-3 rounded max-sm:text-sm">SAVE</button>
                    <a href="#">
                        <button type="submit"
                            class="bg-secondary text-primary hover:bg-primary hover:text-secondary duration-200 tracking-widest p-4 max-sm:p-3 rounded max-sm:text-sm">EXPORT
                            TO PDF</button>
                    </a>
                </div>
            </div>
        </form>
    </main>
</x-student-layout>