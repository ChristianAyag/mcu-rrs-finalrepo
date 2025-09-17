@section('title', 'Form 2(D)')
<x-student-layout>
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <form action="" method="POST" class="block">
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="text-right mt-3 mr-3 max-lg:text-sm max-md:text-sm max-sm:text-xs">FORM 2(D)</p>
                <h1
                    class="text-center mt-10 max-2xl:mt-6 max-lg:mt-6 max-md:mt-6 font-bold text-2xl max-xl:text-xl max-lg:text-lg max-md:text-base max-sm:text-sm mb-2 underline">
                    INFORMED CONSENT CHECKLIST FOR P.I.
                </h1>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="px-3 py-2 font-bold text-lg max-2xl:text-base max-sm:text-sm">STUDY PROTOCOL INFORMATION</h2>
                <div class="p-3 mt-2 space-y-2 text-base max-sm:text-sm">
                    <div class="grid grid-cols-[max-content_1fr] max-sm:grid-cols-1 gap-x-20 gap-y-3 max-w-full">
                        <div class="font-bold">MCUERB Code:</div>
                        <div class="max-sm:mb-2">2025-S1-001</div>

                        <div class="font-bold">Study Protocol Title:</div>
                        <div class="max-sm:mb-2">ERB-2025-001</div>

                        <div class="font-bold">Principal Investigator (PI):</div>
                        <div class="max-sm:mb-2">John Doe</div>

                        <div class="font-bold">PI Contact Numbers:</div>
                        <div class="max-sm:mb-2">09XX-XXX-XX74</div>

                        <div class="font-bold">Study Protocol Submission Date:</div>
                        <div class="max-sm:mb-2">2025-05-05</div>

                        <div class="font-bold">Study Protocol Review Date:</div>
                        <div class="max-sm:mb-2">2025-05-05</div>
                    </div>
                </div>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="p-3 max-sm:text-sm/6">
                    Please indicate <b>YES</b> or <b>NO</b> in the space provided whether or not the informed consent
                    form (ICF) addresses the specified component of <b>NA</b> if Not Applicable. To facilitate the
                    evaluation of the assessment point, indicate the page and paragraph where this information can be
                    found.
                </p>
                <div class="p-3 mt-2 space-y-2 text-base max-sm:text-sm">
                    <h2 class="py-2 font-semibold text-lg max-2xl:text-base max-sm:text-sm">TO BE FILLED UP BY P.I.
                    </h2>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statement indicating the study involves research
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_involvement" data-textbox="1">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_involvement">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_involvement">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="statement_study_involve" data-group="study_involvement" id="1"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statement indicating clearly the purpose of the study
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_purpose" data-textbox="2">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_purpose">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_purpose">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="statement_study_purpose" data-group="study_purpose" id="2"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Explanation to the study participants why they were included in the study
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_inclusion" data-textbox="3">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_inclusion">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_inclusion">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="explanation_inclusion" data-group="participant_inclusion" id="3"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Provisions ensuring that the study participant's participation in the study is voluntary
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="voluntary"
                                    data-textbox="4">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="voluntary">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="voluntary">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="provisions" data-group="voluntary" id="4"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statement indicating that participation may be withdrawn anytime without penalty or loss
                                of benefit to which the participant is entitled
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="withdraw"
                                    data-textbox="5">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="withdraw">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="withdraw">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="withdrawal_statement" data-group="withdraw" id="5"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statement explaining the nature and procedure of the study
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_nature" data-textbox="6">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_nature">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_nature">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="statement_study_nature" data-group="study_nature" id="6"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Disclosure of the anticipated risks and benefits to the study participants disclosed?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="risks_benefits" data-textbox="7">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="risks_benefits">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="risks_benefits">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="disclose_risks_benefits" data-group="risks_benefits" id="7"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statements indicating the potential benefits to the community or to society, or
                                contributions to scientific knowledge stated
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="potential_benefits" data-textbox="8">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="potential_benefits">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="potential_benefits">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="potential_benefits_statement" data-group="potential_benefits" id="8"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Provisions for the mitigation of risks in the protocol consistent with what is in the
                                ICF?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="mitigation"
                                    data-textbox="9">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="mitigation">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="mitigation">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="provision_mitigations" data-group="mitigation" id="9"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Lists of alternative procedure(s) or course(s) of treatment that may be available to the
                                participant and their important potential benefits and risks?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="alternate_procedure" data-textbox="10">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="alternate_procedure">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="alternate_procedure">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="alternate_procedure_lists" data-group="alternate_procedure" id="10"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statement informing study participant of his/her responsibilities
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_responsibilities" data-textbox="11">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_responsibilities">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_responsibilities">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="statement_responsibilities" data-group="participant_responsibilities" id="11"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statement indicating if there are any anticipated expenses to the study participants in
                                the course of the study
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_expenses" data-textbox="12">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_expenses">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_expenses">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="expenses_statement" data-group="study_expenses" id="12"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statement indicating if there is a compensation and/or treatment available to the study
                                participants in the event of study-relate injury.
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="compensation" data-textbox="13">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="compensation">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="compensation">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="compensation_statement" data-group="compensation" id="13"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statement that the records identifying the participant will be kept confidential and
                                will not be made publicly available, to the extent permitted by law; and that the
                                identity of the participant will remain confidential in the even the study results are
                                published; including limitations to the investigator's ability to guarantee
                                confidentiality
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_records" data-textbox="14">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_records">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_records">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="statement_participant_records" data-group="participant_records" id="14"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Description of data protection plan and details about storage (including who has access
                                to the study-related documents, how long identifying data will be stored, and manner of
                                storage)
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="data_protection" data-textbox="15">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="data_protection">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="data_protection">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="data_protection_description" data-group="data_protection" id="15"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Expected duration of the subject's participation in the study specified
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_duration" data-textbox="16">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_duration">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_duration">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="expected_study_duration" data-group="study_duration" id="16"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Approximate number of study subjects stated
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="number_subject" data-textbox="17">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="number_subject">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="number_subject">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="approximate_number_subject" data-group="number_subject" id="17"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Explanation whether the study participant will be offered the option of receiving
                                overall study findings and results
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="findings_results" data-textbox="18">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="findings_results">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="findings_results">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="explanation_findings_results" data-group="findings_results" id="18"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Person(s) to contact in the study team for further information regarding the study and
                                whom to contact in the event of study-related injury indicated
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="contact"
                                    data-textbox="19">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="contact">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="contact">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="person_contact" data-group="contact" id="19" placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statement that the MCUERB has approved the study, and may be reached through the
                                following contact for information regarding rights of study participants, including
                                grievances and complaints <br>
                                <b>Email Address:</b> erb@mcu.edu.ph<br>
                                <b>Contact Number:</b> (02) 8364 1071
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="approval"
                                    data-textbox="20">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="approval">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="approval">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="statement_approval" data-group="approval" id="20"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Manifestation that the language and presentation of the information to be conveyed
                                appropriate to the study participant
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="presentation_language" data-textbox="21">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="presentation_language">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="presentation_language">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="manifestation_presentation" data-group="presentation_language" id="21"
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                    </div>
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