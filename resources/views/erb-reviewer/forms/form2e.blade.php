@section('title', 'Form 2(E)')
<x-erb-reviewer>
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <form action="" method="POST" class="block">
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="text-right mt-3 mr-3 max-lg:text-sm max-md:text-sm max-sm:text-xs">FORM 2(E)</p>
                <h1
                    class="text-center mt-10 max-2xl:mt-6 max-lg:mt-6 max-md:mt-6 font-bold text-2xl max-xl:text-xl max-lg:text-lg max-md:text-base max-sm:text-sm mb-2 underline">
                    PROTOCOL EVALUATION CHECKLIST
                </h1>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
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
                <h2 class="px-3 py-2 font-bold text-lg max-2xl:text-base max-sm:text-sm">TO BE FILLED UP BY REVIEWER
                </h2>
                <div class="p-3 mt-2 space-y-2 text-base max-sm:text-sm">
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Does the title summarize the main idea under investigation and is able to stand alone as
                                an explanation of the study?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="main_idea_study">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="main_idea_study">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="main_idea_summarize" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Are the scientific significance, public health, the contributions this study will make
                                and the expected applicability of study findings discussed clearly?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="scientific_significance">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="scientific_significance">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="significance_discuss" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Does the study require human participants?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="human_participants">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="human_participants">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="require_human_participants" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Are the problem statement and research questions or objectives that the study will
                                address, formulated and stated correctly, clearly, and concisely?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="problem_statement">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="problem_statement">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="problem_statement_address" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Is the background of the study adequate?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="background_study">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="background_study">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="adequate" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Are relevant information discussed about the participant of the study based on a review
                                of the literature?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="relevant_information">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="relevant_information">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="information_discuss" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Is the population from which the participants and sample wil be drawn defined?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="population">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="population">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="population_define" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Is the approximate sample size specified and is it appropriate for the nature of the
                                research?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="sample_size">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="sample_size">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="approx_size" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Is the manner in which potential participants will be recruited, contacted, screened,
                                and registered in the study described?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="manner">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="manner">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="participants_manner" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Is/Are the study site(s) clearly identified?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_site">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_site">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="site_identify" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Are the scientific significance, public health, the contributions this study will make
                                and the expected applicability of study findings discussed clearly?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="scientific_significance">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="scientific_significance">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="significance_discuss" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Is the study design appropriate for the objectives and research questions?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="research_questions">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="research_questions">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="appropriate_questions" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Are conditions and characteristics applicable to the identification and selection of
                                participants in the study and the conditions necessary for eligible persons to be
                                included discussed? (Inclusion criteria)
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="conditions_characteristics">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="conditions_characteristics">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="apply_characteristics" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Are characteristics that would disqualify otherwise eligible participants from the study
                                described? (Exclusion criteria)
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="characteristics">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="characteristics">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="characteristics_disqualify" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Is there any vulnerable participant involved (Ex: Children (under 18), Indigenous
                                People, PWD, Elderly, etc.)? Are there any groups of people who might be more
                                susceptible to the risks presented by the study and who therefore ought to be excluded
                                from the research? will this study increase the discrimination, discomfort, and
                                inconvenience of the study participants?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_vulnerability">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_vulernability">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="involvement" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Has any special vulnerability (in term of the study procedure) among prospective study
                                participants that might be relevant to evaluating the risk of participation taken into
                                account?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="special_vulnerability">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="special_vulnerability">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="vulnerability_evaluation" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Is there an indication of special measures to be implemented to protect vulnerability of
                                study participants?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="special_measures">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="special_measures">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="indicate_measures" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Are the procedures to be done in the study clearly described and are understandable?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_procedure">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_procedure">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="describe_procedure" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Are the overall procedures for management of the data collected and the process for
                                entering and editing data described?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="overall_procedures">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="overall_procedures">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="overall_procedure_describe" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Are measures to ensure anonymity and confidentiality of the study participants and data
                                collected clearly indicated?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="anonymity_confidentiality">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="anonymity_confidentiality">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="confidentiality_measures" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                How study materials, including questionnaires, statstical analyses, computer programs
                                and other computerized information, whether used for publication or not, will be
                                maintained and safeguarded described in the study?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="maintained">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="maintained">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="describe_maintain" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Are procedures regarding confidentiality of the data, including how confidentiality will
                                be preserved during transmission, use and storage of the data and the names of persons
                                or positions responsible for technical and administrative stewardship responsibilities
                                properly discussed?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="data_confidentiality">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="data_confidentiality">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="preserve_data" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Are procedures on how final disposition of records, data, and computer files, and
                                specimens will be, including location for any relevant information to be stored
                                discussed?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="records_data">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="records_data">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="disposition_records" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Has due care been clearly specified to minimize risks and maximize the likelihood of
                                benefits?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="risks_likelihood">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="risks_likelihood">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="minimize_maximize" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Is a timeline or duration of the study in Gantt chart with estimated date for
                                implementing and completing key activities provided and specified?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="duration">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="duration">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="estimated_date" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Is training, such as interviewer techniques, data collection and handling methods or
                                informed consent, provided to investigators/researchers described?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="techniques">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="techniques">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="techniques_described" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="p-3 mt-2 space-y-2 text-base max-sm:text-sm">
                    <h2 class="pb-2 font-bold text-lg max-2xl:text-base max-sm:text-sm">SUMMARY OF RECOMMENDATIONS:
                    </h2>
                    <div>
                        <label>
                            <span>
                                1.
                            </span>
                        </label>
                        <textarea name="procedures_confidentiality" id="" placeholder="Summary of Recommendations"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label>
                            <span>
                                2.
                            </span>
                        </label>
                        <textarea name="procedures_confidentiality" id="" placeholder="Summary of Recommendations"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label>
                            <span>
                                3.
                            </span>
                        </label>
                        <textarea name="procedures_confidentiality" id="" placeholder="Summary of Recommendations"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label>
                            <span>
                                4.
                            </span>
                        </label>
                        <textarea name="procedures_confidentiality" id="" placeholder="Summary of Recommendations"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                </div>
                <div class="p-3 mt-2 space-y-2 text-base max-sm:text-sm">
                    <!-- RECOMMENDED ACTION -->
                    <h2 class="pt-2 font-bold text-lg max-2xl:text-base max-sm:text-sm">RECOMMENDED ACTION
                    </h2>
                    <div class="p-3 space-y-2 text-base">
                        <div
                            class="grid 2xl:grid-cols-2 max-md:grid-cols-1 md:grid-cols-2 max-lg:grid-cols-2 gap-x-5 gap-y-3 max-sm:gap-y-2">
                            <!-- APPROVE -->
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="action">
                                <span>Approve</span>
                            </label>
                            <!-- MINOR MODIFICATIONS -->
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="action">
                                <span>Minor Modifications</span>
                            </label>
                            <!-- MAJOR MODIFICATIONS -->
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="action">
                                <span>Major Modifications</span>
                            </label>
                            <!-- DISAPPROVE -->
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="action">
                                <span>Disapprove</span>
                            </label>
                            <!-- PENDING IF MAJOR CLARIFICATIONS ARE REQUIRED BEFORE A DECISION CAN BE MADE -->
                            <label class="flex max-sm:block max-sm:space-x-1 items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" id="toggleradio"
                                    class="check mt-1 max-sm:mt-0 max-sm:w-[14px] max-sm:h-[14px]" name="action">
                                <span>Pending if Major Clarifications are Required Before a Decision can be Made</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- JUSTIFICATION FOR RECOMMENDED ACTION -->
                <div class="p-3 mt-2 space-y-2 text-base max-sm:text-sm">
                    <h2 class="pb-2 font-bold text-lg max-2xl:text-base max-sm:text-sm">JUSTIFICATION FOR RECOMMENDED
                        ACTION:
                    </h2>
                    <div>
                        <textarea name="justification" id="" placeholder="Summary of Recommendations"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                </div>
            </div>
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
</x-erb-reviewer>