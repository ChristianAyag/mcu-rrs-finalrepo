@section('title', 'Form 2(J)')
<x-review-layout>
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <form action="" method="POST" class="block">
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="text-right mt-3 mr-3 max-lg:text-sm max-md:text-sm max-sm:text-xs">FORM 2(J)</p>
                <h1
                    class="text-center mt-10 max-2xl:mt-6 max-lg:mt-6 max-md:mt-6 font-bold text-2xl max-xl:text-xl max-lg:text-lg max-md:text-base max-sm:text-sm mb-2 underline">
                    INFORMED CONSENT EVALUATION CHECKLIST
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
                <h2 class="px-3 py-2 font-bold text-lg max-2xl:text-base max-sm:text-sm">TO BE FILLED UP BY
                    NON-SCIENTIST MEMBER
                </h2>
                <div class="p-3 mt-2 space-y-2 text-base max-sm:text-sm">
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Is the manner in which potential participants will be recruited, contacted, screened,
                                and registered in the study described?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="potential_manner" data-group="1">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="potential_manner" data-group="1">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="manner_described" id="" placeholder="Comments"
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
                                    name="conditions_characteristics" data-group="2">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="conditions_characteristics" data-group="2">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="apply_characteristics" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Are there any groups of people who might be more susceptible to the risks presented by
                                the study and who therefore ought to be excluded from the research?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="susceptible_risks" data-group="3">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="susceptible_risks" data-group="3">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="exclusion_people" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Has any special vulnerability among prospective study participants that might be
                                relevant to evaluating the risk of participation taken into account?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="special_vulnerability" data-group="4">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="special_vulnerability" data-group="4">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="relevant" id="" placeholder="Comments"
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
                                    name="special_measures" data-group="5">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="special_measures" data-group="5">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="indicate_measures" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Are procedure for informing participants about study and methods and for obtaining
                                consent clearly described?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_methods" data-group="6">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_methods" data-group="6">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="describe_study_methods" id="" placeholder="Comments"
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
                                    name="confidentiality" data-group="7">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="confidentiality" data-group="7">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="anonymity" id="" placeholder="Comments"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Are procedures regarding confidentiality of the data, including how confidentiality will
                                be preserved during transmission, use and storage of data and the names of persons or
                                positions responsible for technical and administrative stewardship responsibilities
                                properly discussed?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="confidential_procedures" data-group="8">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="confidential_procedures" data-group="8">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="discussed_confidentiality" id="" placeholder="Comments"
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
                                    name="disposition_records" data-group="9">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="disposition_records" data-group="9">
                                <span>No</span>
                            </label>
                        </div>
                        <textarea name="disposition_discuss" id="" placeholder="Comments"
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
                    <div class="grid grid-cols 1 gap-x-5">
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="erb_submit"
                                data-group="4">
                            <span>Approve</span>
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="erb_submit"
                                data-group="4">
                            <span>Disapprove</span>
                        </label>
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
</x-review-layout>