@section('title', 'Form 3(B)')
<x-erb-reviewer>
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <form action="" method="POST" class="block">
            <div class="mt-3 p-1 max-w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="text-right mt-3 mr-3 max-lg:text-sm max-md:text-sm max-sm:text-xs">FORM 3(B)</p>
                <h1
                    class="text-center mt-10 max-2xl:mt-6 max-lg:mt-6 max-md:mt-6 font-bold text-2xl max-xl:text-xl max-lg:text-lg max-md:text-base max-sm:text-sm mb-2 underline">
                    REVIEW OF RESUBMITTED STUDY PROTOCOL FORM</h1>
            </div>
            <div class="mt-3 p-1 max-w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="px-3 py-2 font-bold text-lg max-2xl:text-base max-sm:text-sm">STUDY PROTOCOL INFORMATION</h2>
                <div class="p-3 mt-2 space-y-2 text-base max-sm:text-sm">
                    <div class="grid grid-cols-[max-content_1fr] max-sm:grid-cols-1 gap-x-20 gap-y-3 max-w-full">
                        <div class="font-bold">MCUERB Code:</div>
                        <div class="max-sm:mb-2">2025-S1-001</div>

                        <div class="font-bold">Date of Initial Submission:</div>
                        <div class="max-sm:mb-2">8/26/2025</div>

                        <div class="font-bold">Study Protocol Title:</div>
                        <div class="max-sm:mb-2">Brain Injury: Prevention and Treatment of Chronic Brain Injury</div>

                        <div class="font-bold">Resubmitted Protocol Submission Date:</div>
                        <div class="max-sm:mb-2">8/26/2025</div>

                        <div class="font-bold">Principal Investigator (PI):</div>
                        <div class="max-sm:mb-2">John Doe</div>

                        <div class="font-bold">Telephone:</div>
                        <div class="max-sm:mb-2">+ 63 X XXXX56</div>

                        <div class="font-bold">Initial Review Date:</div>
                        <div class="max-sm:mb-2">8/26/2025</div>

                        <div class="font-bold">Last Review Date:</div>
                        <div class="max-sm:mb-2">8/26/2025</div>

                        <div class="font-bold">Total Participants:</div>
                        <div class="max-sm:mb-2">2</div>

                        <div class="font-bold">Review:</div>
                        <div class="max-sm:mb-2">2nd Review</div>
                    </div>
                </div>
            </div>
            <div class="mt-3 p-1 max-w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="px-3 py-2 font-bold text-lg max-2xl:text-base max-md:text-sm">TO BE FILLED UP BY P.I.</h2>
                <div class="p-3 mt-2 space-y-2 max-md:text-sm">
                    <div>
                        <label>
                            <span class="font-semibold">
                                RECOMMENDATION FROM LAST REVIEW
                            </span><br>
                        </label>
                        <textarea id="" class="mt-1 w-full resize-none max-md:text-sm" readonly>sample answer</textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Indicate of the study protocol contains the specified assessment point
                            </span>
                        </label>
                        <!-- sample displayed checked one of the radio buttons -->
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" disabled>
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" checked disabled>
                                <span>N/A</span>
                            </label>
                        </div>
                        <!-- using readonly the displayed text cannot be edited -->
                        <textarea class="mt-1 w-full resize-none max-md:text-sm" readonly></textarea>
                    </div>
                </div>
                <div class="p-3 space-y-2 max-sm:text-sm">
                    <label class="font-semibold">1. Address protocol-related issues</label>
                    <div class="pl-4">
                        <!-- the text that's being display came from the value and using readonly the displayed text cannot be edited -->
                        <label class="block mb-1">1.1</label>
                        <input type="text" class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded"
                            value="aweawea" readonly />
                    </div>
                    <div class="pl-4">
                        <!-- the text that's being display came from the value and using readonly the displayed text cannot be edited -->
                        <label class="block mb-1">1.2</label>
                        <input type="text" class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded"
                            value="aweawea" readonly />
                    </div>
                    <div class="pl-4">
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Indicate of the study protocol contains the specified assessment point
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" checked
                                    disabled />
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" disabled />
                                <span>N/A</span>
                            </label>
                        </div>
                        <textarea class="mt-1 w-full resize-none max-md:text-sm" readonly>aweaweawe</textarea>
                    </div>
                    <div class="pl-4">
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Page & Paragraph where it is found
                            </span>
                        </label>
                        <input type="text" class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded" value="aweawe"
                            readonly />
                    </div>
                </div>
                <div class="p-3 space-y-2 max-sm:text-sm">
                    <label class="font-semibold">2. Address ethical-related issues</label>
                    <div class="pl-4">
                        <!-- the text that's being display came from the value and using readonly the displayed text cannot be edited -->
                        <label class="block mb-1">2.1</label>
                        <input type="text" class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded"
                            value="aweaweawe" readonly />
                    </div>
                    <div class="pl-4">
                        <!-- the text that's being display came from the value and using readonly the displayed text cannot be edited -->
                        <label class="block mb-1">2.2</label>
                        <input type="text" class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded"
                            value="aweaweawe" readonly />
                    </div>
                    <div class="pl-4">
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Indicate of the study protocol contains the specified assessment point
                            </span>
                        </label>
                        <!-- sample displayed checked one of the radio buttons -->
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" checked disabled>
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" disabled>
                                <span>N/A</span>
                            </label>
                        </div>
                        <textarea class="mt-1 w-full resize-none max-sm:text-sm" readonly>aweaweawe</textarea>
                    </div>
                    <div class="pl-4">
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Page & Paragraph where it is found
                            </span>
                        </label>
                        <input type="text" class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded" value="waew"
                            readonly>
                    </div>
                </div>
                <div class="p-3 space-y-2 max-sm:text-sm">
                    <label class="font-semibold">3. Address informed consent-related issues</label>
                    <div class="pl-4">
                        <!-- the text that's being display came from the value and using readonly the displayed text cannot be edited -->
                        <label class="block mb-1">3.1</label>
                        <input type="text" class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded" value="awewe"
                            readonly />
                    </div>
                    <div class="pl-4">
                        <!-- the text that's being display came from the value and using readonly the displayed text cannot be edited -->
                        <label class="block mb-1">3.2</label>
                        <input type="text" class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded" value="aweawe"
                            readonly />
                    </div>
                    <div class="pl-4">
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Indicate of the study protocol contains the specified assessment point
                            </span>
                        </label>
                        <!-- sample displayed checked one of the radio buttons -->
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="consent_related" disabled>
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" checked disabled>
                                <span>N/A</span>
                            </label>
                        </div>
                        <textarea class="mt-1 w-full resize-none max-sm:text-sm" readonly></textarea>
                    </div>
                    <div class="pl-4">
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Page & Paragraph where it is found
                            </span>
                        </label>
                        <input type="text" class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded" value="aweawe"
                            readonly>
                    </div>
                </div>
                <div class="p-3 space-y-2 max-sm:text-sm">
                    <!-- the text that's being display came from the value and using readonly the displayed text cannot be edited -->
                    <label class="font-semibold">4. Changes that were not part of the initial review</label>
                    <div class="pl-4">
                        <label class="block mb-1">4.1</label>
                        <input type="text" class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded" value="awewe"
                            readonly />
                    </div>
                    <div class="pl-4">
                        <!-- the text that's being display came from the value and using readonly the displayed text cannot be edited -->
                        <label class="block mb-1">4.2</label>
                        <input type="text" class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded" value="awewe"
                            readonly />
                    </div>
                    <div class="pl-4">
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Indicate of the study protocol contains the specified assessment point
                            </span>
                        </label>
                        <!-- sample displayed checked one of the radio buttons -->
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" checked disabled>
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" disabled>
                                <span>N/A</span>
                            </label>
                        </div>
                        <textarea class="mt-1 w-full resize-none max-sm:text-sm" readonly>aweawe aweawe</textarea>
                    </div>
                    <div class="pl-4">
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Page & Paragraph where it is found
                            </span>
                        </label>
                        <input type="text" class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded" value="aeawe"
                            readonly>
                    </div>
                </div>
            </div>
            <div class="mt-3 p-1 max-w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="p-3 space-y-2 max-sm:text-sm">
                    <h2 class="font-semibold text-lg max-lg:text-base max-md:text-sm uppercase">To be filled up by
                        Primary Reviewer</h2>
                    <div>
                        <label>
                            <span class="font-semibold">
                                Were the recommendations met(Yes/No)
                            </span><br>
                        </label>
                        <textarea name="summary_recommendations" id="" placeholder="Summary of Recommendations"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                </div>
                <div class="p-3 space-y-2 max-sm:text-sm">
                    <label class="font-semibold">1. Address protocol-related issues</label>
                    <div class="pl-4">
                        <label class="block mb-1">1.1</label>
                        <input type="text" name="protocol_issues_1_comment"
                            class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded"
                            placeholder="Reviewer's Comment" />
                    </div>
                    <div class="pl-4">
                        <label class="block mb-1">1.2</label>
                        <input type="text" name="protocol_issues_2_comment"
                            class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded"
                            placeholder="Reviewer's Comment" />
                    </div>
                </div>
                <div class="p-3 space-y-2 max-sm:text-sm">
                    <label class="font-semibold">2. Address ethical-related issues</label>
                    <div class="pl-4">
                        <label class="block mb-1">2.1</label>
                        <input type="text" name="ethical_issues_1_comment"
                            class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded"
                            placeholder="Reviewer's Comment" />
                    </div>
                    <div class="pl-4">
                        <label class="block mb-1">2.2</label>
                        <input type="text" name="ethical_issues_2_comment"
                            class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded"
                            placeholder="Reviewer's Comment" />
                    </div>
                </div>
                <div class="p-3 space-y-2 max-sm:text-sm">
                    <label class="font-semibold">3. Address informed consent-related issues</label>
                    <div class="pl-4">
                        <label class="block mb-1">3.1</label>
                        <input type="text" name="consent_issues_1_comment"
                            class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded"
                            placeholder="Reviewer's Comment" />
                    </div>
                    <div class="pl-4">
                        <label class="block mb-1">3.2</label>
                        <input type="text" name="consent_issues_2_comment"
                            class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded"
                            placeholder="Reviewer's Comment" />
                    </div>
                </div>
                <div class="p-3 space-y-2 max-sm:text-sm">
                    <label class="font-semibold">4. Changes that were not part of the initial review</label>
                    <div class="pl-4">
                        <label class="block mb-1">4.1</label>
                        <input type="text" name="review_changes_1_comment"
                            class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded"
                            placeholder="Reviewer's Comment" />
                    </div>
                    <div class="pl-4">
                        <label class="block mb-1">4.2</label>
                        <input type="text" name="review_changes_2_comment"
                            class="w-full h-[35px] max-lg:h-[30px] max-md:text-sm rounded"
                            placeholder="Reviewer's Comment" />
                    </div>
                </div>
                <div class="p-3 space-y-2 max-sm:text-sm">
                    <h2 class="font-semibold max-md:text-sm uppercase">Recommendation of Primary
                        Reviewer</h2>
                    <div class="grid 2xl:grid-cols-3 max-md:grid-cols-1 md:grid-cols-2 max-lg:grid-cols-2 gap-y-3">
                        <!-- APPROVE -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="recommendations" data-group="1">
                            <span>Approve</span>
                        </label>
                        <!-- MINOR MODIFICATION -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="recommendations" data-group="1">
                            <span>Minor Modification</span>
                        </label>
                        <!-- MAJOR MODIFICATION -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="recommendations" data-group="1">
                            <span>Major Modification</span>
                        </label>
                        <!-- DISAPPROVE -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="recommendations" data-group="1">
                            <span>Disapprove</span>
                        </label>
                        <!-- PENDING -->
                        <label class="flex items-start space-x-2 max-sm:text-sm/6">
                            <input type="radio" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                name="recommendations" data-group="1">
                            <span>Pending (If Major Clarifications are required before a decision can be made)</span>
                        </label>
                    </div>
                </div>
                <div class="p-3 space-y-2 max-sm:text-sm">
                    <div>
                        <label>
                            <span class="font-semibold uppercase">
                                Justification for Recommended Action
                            </span><br>
                        </label>
                        <textarea name="justification_action" id=""
                            class="mt-1 w-full resize-none max-md:text-sm"></textarea>
                    </div>
                    <!-- alisin to pag isang textarea lang -->
                    <div>
                        <label>
                            <span class="font-semibold uppercase">
                                Summary of Recommendations
                            </span><br>
                        </label>
                        <div>
                            <label>
                                <span>
                                    1.
                                </span>
                            </label>
                            <textarea name="summary_recommendations" id="" placeholder="Summary of Recommendations"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <span>
                                    2.
                                </span>
                            </label>
                            <textarea name="summary_recommendations_2" id="" placeholder="Summary of Recommendations"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <span>
                                    3.
                                </span>
                            </label>
                            <textarea name="summary_recommendations_3" id="" placeholder="Summary of Recommendations"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <span>
                                    4.
                                </span>
                            </label>
                            <textarea name="summary_recommendations_4" id="" placeholder="Summary of Recommendations"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label>
                                <span>
                                    5.
                                </span>
                            </label>
                            <textarea name="summary_recommendations_5" id="" placeholder="Summary of Recommendations"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </div>

                        <!-- eto gamitin pag isang textarea lang -->
                        <!-- <textarea name="summary_recommendations" id=""
                            class="mt-1 w-full resize-none max-md:text-sm"></textarea> -->
                    </div>
                </div>
            </div>
            <!-- ICOMMENT NALANG TO PAG DI SA REVIEWER SIDE TONG LAST PART -->
            <div class="mt-3 p-1 max-w-full bg-lightgray rounded mx-auto shadow-md">
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
            <div class="mt-3 p-1 max-w-full bg-lightgray rounded mx-auto shadow-md">
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