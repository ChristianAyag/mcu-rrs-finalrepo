<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>FORM-3D</title>
    @vite('resources/css/app.css') {{-- Tailwind --}}
    <style>
        .page-break {
            break-before: page;
        }
    </style>
</head>

<body class="p-2 text-sm font-arial">
    <h1 class="text-xl font-times font-black text-center mb-6">MCUERB FORM 3(D) Application for Review of Amendment</h1>

    <x-formbanner>MCUERB FORM 3(D) Application for Review of Amendment</x-formbanner>

    <h1 class="text-base font-bold text-center underline mb-4">Application for Review of Amendment</h1>

    <div class="flex flex-col border">
        <div class="flex items-stretch">
            <!-- ORIGINAL MCUERB CODE -->
            <div class="w-[30.00%] text-sm border-r flex items-center ml-2">
                <p>Original MCUERB Code:</p>
            </div>
            <div class="w-[30.00%] border-r p-2">
                <p>{{-- original mcuerb code --}}</p>
            </div>

            <!-- ORIGINAL APPROVAL DATE -->
            <div class="w-[13.00%] text-sm border-r ml-2">
                Original Approval Date:
            </div>
            <div class="flex-1 p-2">
                <p>{{-- original approval date --}}</p>
            </div>
        </div>
        <div class="flex items-stretch border-t">
            <!-- ORIGINAL RESEARCH TITLE -->
            <div class="w-[30.00%] py-1 text-sm border-r ml-2">
                <p>Original Research Title:</p>
            </div>
            <div class="flex-1 p-2">
                <p>{{-- original research title --}}</p>
            </div>
        </div>
        <div class="flex items-stretch border-t">
            <!-- AMENDED PROJECT TITLE -->
            <div class="w-[30.00%] py-1 text-sm border-r ml-2">
                <p>Amended Project Title (if applicable):</p>
            </div>
            <div class="flex-1 p-2">
                <p>{{-- amended project title --}}</p>
            </div>
        </div>
        <div class="flex items-stretch border-t">
            <!-- ORIGINAL PRINCIPAL INVESTIGATOR -->
            <div class="w-[30.00%] py-1 text-sm border-r ml-2">
                <p>Original Principal Investigator (PI):</p>
            </div>
            <div class="flex-1 p-2">
                <p>{{-- original principal investigator --}}</p>
            </div>
        </div>
        <div class="flex items-stretch border-t">
            <!-- INSTITUTION -->
            <div class="w-[30.00%] text-sm border-r ml-2">
                <p>Institution:</p>
            </div>
            <div class="flex-1 p-2">
                <p>{{-- institution --}}</p>
            </div>
        </div>
        <div class="flex items-stretch border-t">
            <!-- EMAIL -->
            <div class="w-[30.00%] text-sm border-r ml-2">
                <p>Email:</p>
            </div>
            <div class="flex-1 p-2">
                <p>{{-- email --}}</p>
            </div>
        </div>
        <div class="flex items-stretch border-t">
            <!-- DATE SUBMITTED -->
            <div class="w-[30.00%] py-1 text-sm border-r ml-2">
                <p>Date Submitted:</p>
            </div>
            <div class="flex-1 p-2">
                <p>{{-- date submitted --}}</p>
            </div>
        </div>
    </div>

    <div class="mt-4"></div>

    <div class="flex flex-col border">
        <div class="mx-2">
            <p>
                <b>Simple, non-substantial amendments</b> which do not alter or bring any additional ethical
                considerations should be recorded but do not require ethical review. Check the boxes if any of the
                following apply to your application:
            </p>
        </div>
        <!-- NO.1 -->
        <div class="flex">
            <!-- QUESTION 1 -->
            <div class="py-1 w-[95.00%] border-t">
                <p class="mx-2">Additional or removal of researchers (if yes, add details below)</p>
            </div>
            <div class="flex-1 py-1 px-2 border-l border-t">
                <input type="checkbox" class="my-auto">
            </div>
        </div>
        <div class="flex">
            <!-- QUESTION 1 DETAILS -->
            <div class="py-1 w-[95.00%] border-t">
                <p class="mx-2">
                    {{-- question 1 details --}}
                </p>
            </div>
            <div class="flex-1 py-1 px-2 pb-16 border-l border-t"></div>
        </div>

        <!-- NO.2 -->
        <div class="flex">
            <!-- QUESTION 2 -->
            <div class="py-1 w-[95.00%] border-t">
                <p class="mx-2">Addition or removal of research sites or settings (if yes, add details below)</p>
                <br>
                <p class="mx-2">Note - ensure you have obtained risk assessments and permission to access sites, if
                    required</p>
            </div>
            <div class="flex-1 py-1 px-2 border-l border-t">
                <input type="checkbox" class="w-4 h-4 my-auto">
            </div>
        </div>
        <div class="flex">
            <!-- QUESTION 2 DETAILS -->
            <div class="py-1 w-[95.00%] border-t">
                <p class="mx-2">
                    {{-- question 2 details --}}
                </p>
            </div>
            <div class="flex-1 py-1 px-2 pb-20 border-l border-t"></div>
        </div>

        <!-- NO.3 -->
        <div class="flex">
            <!-- QUESTION 3 -->
            <div class="py-1 w-[95.00%] border-t">
                <p class="mx-2">Addition of new participant group (if yes, add details below)</p>
            </div>
            <div class="flex-1 py-1 px-2 border-l border-t">
                <input type="checkbox" class="w-4 h-4 my-auto">
            </div>
        </div>
        <div class="flex">
            <!-- QUESTION 3 DETAILS -->
            <div class="py-1 w-[95.00%] border-t">
                <p class="mx-2">
                    {{-- question 3 details --}}
                </p>
            </div>
            <div class="flex-1 py-1 px-2 pb-12 border-l border-t"></div>
        </div>

        <!-- NO.4 -->
        <div class="flex">
            <!-- QUESTION 4 -->
            <div class="py-1 w-[95.00%] border-t">
                <p class="mx-2">Addition of a new research method (if yes, add details below)</p>
            </div>
            <div class="flex-1 py-1 px-2 border-l border-t">
                <input type="checkbox" class="w-4 h-4 my-auto">
            </div>
        </div>
        <div class="flex">
            <!-- QUESTION 4 DETAILS -->
            <div class="py-1 w-[95.00%] border-t">
                <p class="mx-2">
                    {{-- question 4 details --}}
                </p>
            </div>
            <div class="flex-1 py-1 px-2 pb-10 border-l border-t"></div>
        </div>
    </div>

    <!-- Page 2 -->
    <div class="page-break"></div>

    <div class="flex flex-col border">
        <!-- NO.5 -->
        <div class="flex">
            <!-- QUESTION 5 -->
            <div class="py-1 w-[95.00%]">
                <p class="mx-2">Ask for additional data from your existing participants (if yes, add details below)</p>
            </div>
            <div class="flex-1 py-1 px-2 border-l">
                <input type="checkbox" class="w-4 h-4 my-auto">
            </div>
        </div>
        <div class="flex">
            <!-- QUESTION 5 DETAILS -->
            <div class="py-1 w-[95.00%] border-t">
                <p class="mx-2">
                    {{-- question 5 details --}}
                </p>
            </div>
            <div class="flex-1 py-1 px-2 pb-14 border-l border-t"></div>
        </div>

        <!-- NO.6 -->
        <div class="flex">
            <!-- QUESTION 6 -->
            <div class="py-1 w-[95.00%] border-t">
                <p class="mx-2">Remove a group of participants or a research method from the project, and have not yet
                    commenced that part of the project (if yes, add details below)</p>
            </div>
            <div class="flex-1 py-1 px-2 border-l border-t">
                <input type="checkbox" class="w-4 h-4 my-auto">
            </div>
        </div>
        <div class="flex">
            <!-- QUESTION 6 DETAILS -->
            <div class="py-1 w-[95.00%] border-t">
                <p class="mx-2">
                    {{-- question 6 details --}}
                </p>
            </div>
            <div class="flex-1 py-1 px-2 pb-16 border-l border-t"></div>
        </div>

        <!-- NO.7 -->
        <div class="flex">
            <!-- QUESTION 7 -->
            <div class="py-1 w-[95.00%] border-t">
                <p class="mx-2">Minor changes to study documents such as spelling and grammar, correcting errors, or
                    updates to contact details to reflect changes in the research team (if yes, add details below)</p>
            </div>
            <div class="flex-1 py-1 px-2 border-l border-t">
                <input type="checkbox" class="w-4 h-4 my-auto">
            </div>
        </div>
        <div class="flex">
            <!-- QUESTION 7 DETAILS -->
            <div class="py-1 w-[95.00%] border-t">
                <p class="mx-2">
                    {{-- question 7 details --}}
                </p>
            </div>
            <div class="flex-1 py-1 px-2 pb-14 border-l border-t"></div>
        </div>

        <!-- NO.8 -->
        <div class="flex">
            <!-- QUESTION 8 -->
            <div class="py-1 w-[95.00%] border-t">
                <p class="mx-2">Apply for an extension to your current ethical approval (if yes, add details below)</p>
            </div>
            <div class="flex-1 py-1 px-2 border-l border-t">
                <input type="checkbox" class="w-4 h-4 my-auto">
            </div>
        </div>
        <div class="flex">
            <!-- QUESTION 8 DETAILS -->
            <div class="py-1 w-[95.00%] border-t">
                <p class="mx-2">
                    {{-- question 8 details --}}
                </p>
            </div>
            <div class="flex-1 py-1 px-2 pb-10 border-l border-t"></div>
        </div>

        <!-- NO.9 -->
        <div class="flex">
            <!-- QUESTION 9 -->
            <div class="py-1 w-[95.00%] border-t">
                <p class="mx-2">
                    If you have checked any of these then review the following statements.
                <ul class="list-disc ml-10 mt-2">
                    <li>These are the only changes requested</li>
                    <li>These changes do not alter or add to the ethical considerations as described in the original
                        application</li>
                </ul>
                </p>
                <br><br>
                <p class="mx-2">If these <b>all</b> apply, check the box. Otherwise, use the FULL AMENDMENT APPLICATION
                </p>
            </div>
            <div class="flex-1 py-1 px-2 border-l border-t">
                <input type="checkbox" class="w-4 h-4 my-auto">
            </div>
        </div>
    </div>
    <div>
        <p class="text-center font-bold mt-4 mb-2 underline">Ethical Amendment (Simple) - Document Checklist</p>
        <p class="text-center mx-12 mt-2 mb-2">Please ensure that you have included copies of any documents listed
            below,
            if those documents are part of the project paperwork and have been amended, even if only slightly.</p>

        <p class="text-center mx-12 mt-2 mb-2">For online research you may include relevant screenshots or excerpts of
            text instead of forms.</p>

        <p class="font-bold text-center mx-12 mt-2 mb-2">If all relevant documents are not included, your amendment
            application will be returned without review</p>

        <div class="mx-12 border border-darkgray">
            <div>
                <div class="flex ml-2 py-1">Ethical Amendment Application Form (Simple)</div>
            </div>
            <div class="border-t border-darkgray">
                <div class="flex ml-2 py-1">Amended Advertisements (online/paper)</div>
            </div>
            <div class="border-t border-darkgray">
                <div class="flex ml-2 py-1">Amended letters to parents/guardians/children</div>
            </div>
            <div class="border-t border-darkgray">
                <div class="flex ml-2 py-1">Amended Participant Information Sheet</div>
            </div>
            <div class="border-t border-darkgray">
                <div class="flex ml-2 py-1">Amended Participant Consent Form</div>
            </div>
            <div class="border-t border-darkgray">
                <div class="flex ml-2 py-1">Amended Participant Debriefing Form</div>
            </div>
            <div class="border-t border-darkgray">
                <div class="flex ml-2 py-1">Amended external permissions: forms / emails / NHS approvals (in full)</div>
            </div>
        </div>
    </div>

    <!-- Page 3 -->
    <div class="page-break"></div>

    <div>
        <p class="mx-8">Please list below any other documents that are included with this application:</p>
        <div class="mx-8 mt-2 border pb-2 h-24">
            <div class="mx-2 text-sm w-full">
                {{-- list of other documents --}}
            </div>
        </div>
    </div>

    <div>
        <p class="mx-8 mt-4 mb-2">
            Under <b>no circumstances</b> should this form, or supplementary
            documents, contain identifiable information about your participants i.e. completed consent forms
        </p>

        <div class="mx-8 border">
            <div class="flex items-stretch">
                <!-- APPLICANT PI'S SIGNATURE -->
                <div class="pb-2 w-[23.00%] text-sm border-r flex items-center ml-2">
                    <p>Applicant PI's Signature:</p>
                </div>
                <div class="w-[35.00%] border-r p-2">
                    <p>{{-- signature --}}</p>
                </div>

                <!-- ORIGINAL APPROVAL DATE -->
                <div class="w-[10.00%] text-sm border-r ml-2">
                    Date:
                </div>
                <div class="flex-1 p-2">
                    <p>{{-- original approval date --}}</p>
                </div>
            </div>
            <div class="flex items-stretch border-t">
                <!-- APPLICANT PI'S SIGNATURE -->
                <div class="pb-2 w-[23.00%] text-sm border-r flex items-center ml-2">
                    <p>Noted by the Thesis Adviser:</p>
                </div>
                <div class="w-[35.00%] border-r p-2">
                    <p>{{-- signature --}}</p>
                </div>

                <!-- ORIGINAL APPROVAL DATE -->
                <div class="w-[10.00%] text-sm border-r ml-2">
                    Date:
                </div>
                <div class="flex-1 p-2">
                    <p>{{-- original approval date --}}</p>
                </div>
            </div>
            <div class="flex items-stretch border-t">
                <!-- APPLICANT PI'S SIGNATURE -->
                <div class="pb-2 w-[23.00%] text-sm border-r flex items-center ml-2">
                    <p>Approved by the Research Coordinator:</p>
                </div>
                <div class="w-[35.00%] border-r p-2">
                    <p>{{-- signature --}}</p>
                </div>

                <!-- ORIGINAL APPROVAL DATE -->
                <div class="w-[10.00%] text-sm border-r ml-2">
                    Date:
                </div>
                <div class="flex-1 p-2">
                    <p>{{-- original approval date --}}</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>