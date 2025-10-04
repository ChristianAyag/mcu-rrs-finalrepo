@section('title', 'Form 3(D)')
<x-student-layout>
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <form action="" method="POST" class="block">
            <div class="mt-3 p-1 max-w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="text-right mt-3 mr-3 max-lg:text-sm max-md:text-sm max-sm:text-xs">FORM 3(D)</p>
                <h1
                    class="text-center mt-10 max-2xl:mt-6 max-lg:mt-6 max-md:mt-6 font-bold text-2xl max-xl:text-xl max-lg:text-lg max-md:text-base max-sm:text-sm mb-2 underline">
                    APPLICATION FOR REVIEW OF AMENDMENT</h1>
            </div>
            <div class="mt-3 p-1 max-w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="p-3 mt-2 space-y-2 text-base max-sm:text-sm">
                    <div class="grid grid-cols-[max-content_1fr] max-sm:grid-cols-1 gap-x-20 gap-y-3 max-w-full">
                        <div class="font-bold">Original MCUERB Code:</div>
                        <div class="max-sm:mb-2">2025-S1-001</div>

                        <div class="font-bold">Original Approval Date:</div>
                        <div class="max-sm:mb-2">8/26/2025</div>

                        <div class="font-bold">Original Research Title:</div>
                        <div class="max-sm:mb-2">Brain Injury: Prevention and Treatment of Chronic Brain Injury</div>

                        <div class="font-bold">Amended Project Title (if applicable):</div>
                        <div class="max-sm:mb-2">N/A</div>

                        <div class="font-bold">Original Principal Investigator (PI):</div>
                        <div class="max-sm:mb-2">John Doe</div>

                        <div class="font-bold">Institution:</div>
                        <div class="max-sm:mb-2">CAS</div>

                        <div class="font-bold">Email:</div>
                        <div class="max-sm:mb-2">user123@gmail.com</div>

                        <div class="font-bold">Date Submitted:</div>
                        <div class="max-sm:mb-2">8/26/2025</div>
                    </div>
                </div>
            </div>
            <div class="mt-3 p-1 max-w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="p-3 max-sm:text-sm/6">
                    <b>Simple, non-substantial <u>amendments</u></b> which do not alter or bring any additional ethical
                    considerations should be recorded but do not require ethical review. Check the boxes if any of the
                    following apply to your application:
                </p>
                <div class="p-3 mt-2 space-y-2 text-base max-sm:text-sm">
                    <div>
                        <label>
                            <input type="checkbox" id="toggleCheckBox" class="check max-sm:w-[14px] max-sm:h-[14px]">
                            <span>
                                Addition or removal of researchers (if yes, add details below)
                            </span>
                            <textarea name="add_remove" id="textBox" class="mt-1 w-full resize-none max-sm:text-sm"
                                disabled></textarea>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="checkbox" id="toggleCheckBox" class="check max-sm:w-[14px] max-sm:h-[14px]">
                            <span>
                                Addition of a new rsearch method (if yes, add the details below).
                            </span>
                            <textarea name="add_methods" id="textBox" class="mt-1 w-full resize-none max-sm:text-sm"
                                disabled></textarea>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="checkbox" id="toggleCheckBox" class="check max-sm:w-[14px] max-sm:h-[14px]">
                            <span>
                                Ask for additional data from your existing participants (if yes, add details below).
                            </span>
                            <textarea name="additional_data" id="textBox" class="mt-1 w-full resize-none max-sm:text-sm"
                                disabled></textarea>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="checkbox" id="toggleCheckBox" class="check max-sm:w-[14px] max-sm:h-[14px]">
                            <span>
                                Remove a group of participants or a research method from the project, and have not yet
                                commenced that part of the project (if yes, add details below).
                            </span>
                            <textarea name="remove_participants" id="textBox"
                                class="mt-1 w-full resize-none max-sm:text-sm" disabled></textarea>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="checkbox" id="toggleCheckBox" class="check max-sm:w-[14px] max-sm:h-[14px]">
                            <span>
                                Minor changes to study documents such as spelling and grammar, correcting errors, or
                                updates to contact details to reflect changes in the research team (if yes, briefly
                                summarize below and attach copies).
                            </span>
                            <textarea name="minor_changes" id="textBox" class="mt-1 w-full resize-none max-sm:text-sm"
                                disabled></textarea>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="checkbox" id="toggleCheckBox" class="check max-sm:w-[14px] max-sm:h-[14px]">
                            <span>
                                Apply for an extension to your current ethical approval (if yes, add details below).
                            </span>
                            <textarea name="extension" id="textBox" class="mt-1 w-full resize-none max-sm:text-sm"
                                disabled></textarea>
                        </label>
                    </div>
                </div>
            </div>
            <div class="mt-3 p-1 max-w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="p-3 mt-2 space-y-2 max-sm:text-sm">
                    <div class="mb-3">
                        <p>If you have checked any of these then review the following statements.</p>
                        <ul class="list-disc pl-6">
                            <li>These are the only changes requested</li>
                            <li>These changes do not alter or add to the ethical considerations as described in the
                                original
                                application</li>
                        </ul>
                    </div>

                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="confirmation_all_changes" class="w-4 h-4" />
                        <span class="font-medium">If these all apply, check the box. Otherwise, use the FULL
                            AMENDMENT APPLICATION.</span>
                    </label>
                </div>
            </div>
            <div class="mt-3 p-1 max-w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="p-3 mt-2 space-y-2 max-sm:text-sm">
                    <h2 class="font-bold text-lg mb-2">Ethical Amendment (Simple) – Document Checklist</h2>

                    <p class="max-sm:text-sm mb-2">
                        Please ensure that you have included copies of any of the documents listed below, if those
                        documents
                        are part of the project paperwork and have been amended, even if only slightly.
                    </p>
                    <p class="max-sm:text-sm mb-2">
                        For online research you may include relevant screenshots or excerpts of text instead of forms.
                    </p>
                    <p class="max-sm:text-sm mb-4 font-bold">
                        If all relevant documents are not included, your amendment application will be returned
                        without
                        review.
                    </p>
                    <div class="pt-2 space-y-3">
                        <div class="border-b pb-3">
                            Ethical Application Form (Simple)
                        </div>
                        <div class="border-b pb-3">
                            Amendments advertisements (online/paper)
                        </div>
                        <div class="border-b pb-3">
                            Amended letters to parents/guardians/children
                        </div>
                        <div class="border-b pb-3">
                            Amended Participant Information Sheet
                        </div>
                        <div class="border-b pb-3">
                            Amended Participants Consent Form
                        </div>
                        <div class="border-b pb-3">
                            Amended Participant Debriefing Form
                        </div>
                        <div class="border-b pb-3">
                            Amended external permissions: forms / email / NHS approval (in full)
                        </div>
                    </div>
                </div>
                <div class="p-3 mt-2 space-y-2 max-sm:text-sm">
                    <div>
                        <span>
                            Please list below any other documents that are included with this application
                        </span>
                        <textarea name="minor_changes" id="textBox"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>

                    <div class="mt-3 text-gray-600">
                        Under <b>no circumstances </b> should this form, or supplementary documents, contain
                        identifiable
                        information about your participants i.e. completed consent forms.
                    </div>
                </div>
            </div>
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
</x-student-layout>