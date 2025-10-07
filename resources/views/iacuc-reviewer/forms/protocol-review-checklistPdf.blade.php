<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>IACUC-PROTOCOL-REVIEW-CHECKLIST</title>
    @vite('resources/css/app.css') {{-- Tailwind --}}
    <style>
        .page-break {
            break-before: page;
        }
    </style>
</head>

<body class="font-arial text-sm">
    <x-iacucformbanner>IACUC PROTOCOL REVIEW CHECKLIST</x-iacucformbanner>

    <div class="mt-10 mx-10 border">
        <div class="ml-1 mt-2 mb-2">
            <div class="flex">
                <!-- IACUC PROTOCOL NO. -->
                <p class="font-bold">
                    IACUC Protocol No:
                </p>
                <p class="border border-t-0 border-l-0 border-r-0 border-b-2 h-5 ml-1 w-80">
                    {{-- date --}}
                </p>

                <!-- DATE -->
                <p class="ml-1 font-bold">
                    Date:
                </p>
                <p class="border border-t-0 border-l-0 border-r-0 border-b-2 h-5 ml-1 w-24">
                    {{-- date --}}
                </p>
            </div>
        </div>

        <div class="ml-1 mt-3 mb-2">
            <div class="flex">
                <!-- STUDY PROTOCOL TITLE -->
                <p class="font-bold">
                    Study Protocol Title:
                </p>
                <p class="border border-t-0 border-l-0 border-r-0 border-b-2 h-5 ml-1 w-96">
                    {{-- study protocol title --}}
                </p>
            </div>
        </div>

        <div class="ml-1 mt-3 mb-2">
            <div class="flex">
                <!-- PI/RESPONSIBLE PERSON -->
                <p class="font-bold">
                    PI/Resp. Person
                </p>
                <p class="border border-t-0 border-l-0 border-r-0 border-b-2 h-5 ml-1 w-64">
                    {{-- pi/responsible person --}}
                </p>

                <!-- ADVISER -->
                <p class="ml-1 font-bold">
                    Adviser
                </p>
                <p class="border border-t-0 border-l-0 border-r-0 border-b-2 h-5 ml-1 w-40">
                    {{-- adviser --}}
                </p>
            </div>
        </div>

        <div class="border-t mt-5">
            <!-- HEADER -->
            <div class="flex font-bold">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="text-center items-center">All Protocols</p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">YES</p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">NO</p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">N/A</p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="text-center items-center">COMMENTS</p>
                </div>
            </div>

            <!-- QUESTION 1 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        Has a satisfactory review of scientific merit been performed?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>

            <!-- QUESTION 2 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        Are the training and experience of the individuals performing the procedures satisfactory?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>

            <!-- QUESTION 3 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        Is the overview section completed in layman's terms?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>

            <!-- QUESTION 4 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        Is the rationale/justification/alternative for using the specified vertebrate animals complete?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>

            <!-- QUESTION 5 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        Is there adequate justification for the number of animals requested?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>

            <!-- QUESTION 6 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        Is the documentation of unnecessary duplication and/or pain and distress complete?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>

            <!-- QUESTION 7 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        Are the experimental procedures for the animal clear and precise?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>

            <!-- QUESTION 8 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        Are the experimental endpoints and duration of experiments clear?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>

            <!-- QUESTION 9 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        Is the pain category appropriate for the research being done?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>

            <!-- QUESTION 10 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        If alternative housing and husbandry methods are proposed, are they acceptable and justified?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Page 2 -->
    <div class="page-break"></div>

    <div class="mx-10 border">
        <div>
            <!-- HEADER -->
            <div class="flex font-bold">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="text-center items-center">As applicable</p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">YES</p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">NO</p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">N/A</p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="text-center items-center">COMMENTS</p>
                </div>
            </div>

            <!-- QUESTION 1 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        If hazardous material use is proposed, are appropriate measures described for handling?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>

            <!-- QUESTION 2 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        If multiple survival surgery is proposed, is the scientific justification adequate?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>

            <!-- QUESTION 3 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        If pain relief would be withheld, is the scientific justification adequate?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>

            <!-- QUESTION 4 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        If animals may become seriously ill or debilitated, are criteria for interventional euthanasia
                        defined?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>

            <!-- QUESTION 5 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        Do you anticipate complications to the procedures not considered by the investigator?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>

            <!-- BREAK -->
            <div class="border-t border-b h-8"></div>

            <!-- HEADER -->
            <div class="flex font-bold">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="text-center items-center">Veterinary Review</p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">YES</p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">NO</p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">N/A</p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="text-center items-center">COMMENTS</p>
                </div>
            </div>

            <!-- QUESTION 1 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        Are the proposed anesthesia and analgesia appropriate?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>

            <!-- QUESTION 2 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        Are post-procedural care and observation adequate?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>

            <!-- QUESTION 3 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        Are there refinements to the procedures which you would like the Investigator to consider?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>

            <!-- QUESTION 4 -->
            <div class="flex border-t">
                <div class="border-r py-1 w-[45.00%]">
                    <p class="mx-1 items-center">
                        Are the methods of euthanasia appropriate?
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- yes --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- no --}}
                    </p>
                </div>
                <div class="border-r py-1 w-[7.00%]">
                    <p class="text-center items-center">
                        {{-- n/a --}}
                    </p>
                </div>
                <div class="py-1 w-[34.00%]">
                    <p class="items-center">
                        {{-- comments --}}
                    </p>
                </div>
            </div>
        </div>

        <!-- BREAK -->
        <div class="border-t h-8"></div>

        <div class="border-t p-1">
            <div class="flex">
                <!-- IACUC PROTOCOL NO. -->
                <p class="font-bold">
                    IACUC Protocol No:
                </p>
                <p class="border border-t-0 border-l-0 border-r-0 border-b-2 h-5 ml-1 w-80">
                    {{-- date --}}
                </p>

                <!-- DATE -->
                <p class="ml-1 font-bold">
                    Date:
                </p>
                <p class="border border-t-0 border-l-0 border-r-0 border-b-2 h-5 ml-1 w-24">
                    {{-- date --}}
                </p>
            </div>
            <div class="mt-3 grid grid-cols-2 gap-y-2">
                <div class="flex space-x-1">
                    <input type="checkbox" class="mt-0.5 h-[14px] w-[14px]">
                    <span>RECOMMENDATION</span>
                </div>
                <div class="flex space-x-1">
                    <input type="checkbox" class="mt-0.5 h-[14px] w-[14px]">
                    <span>APPROVED</span>
                </div>
                <div class="flex space-x-1">
                    <input type="checkbox" class="mt-0.5 h-[14px] w-[14px]">
                    <span>EXEMPTED</span>
                </div>
                <div class="flex space-x-1">
                    <input type="checkbox" class="mt-0.5 h-[14px] w-[14px]">
                    <span>REQUIRE REVISION</span>
                </div>
                <div class="flex space-x-1">
                    <input type="checkbox" class="mt-0.5 h-[14px] w-[14px]">
                    <span>NEED FURTHER INFORMATION</span>
                </div>
                <div class="flex space-x-1">
                    <input type="checkbox" class="mt-0.5 h-[14px] w-[14px]">
                    <span>FOR FULL REVIEW</span>
                </div>
                <div class="flex space-x-1">
                    <input type="checkbox" class="mt-0.5 h-[14px] w-[14px]">
                    <span>DISAPPROVED</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Page 3 -->
    <div class="page-break"></div>

    <div class="mx-10 border">
        <div class="font-bold m-1">
            <p>Summary/Comments:</p>
        </div>
        <div class="border border-darkgray mb-2 mx-2 h-56">
            <p class="mx-1">
                {{-- summary/comments --}}
            </p>
        </div>
    </div>

    <!-- REVIEWER, IACUC CHAIR, SIGNATURE & DATE -->
    <div class="mx-10 mt-10">
        <div class="flex">
            <!-- REVIEWER -->
            <p class="font-bold">
                Reviewer:
            </p>
            <p class="border border-t-0 border-l-0 border-r-0 border-b-2 h-5 ml-1 w-52">
                {{-- reviewer --}}
            </p>

            <!-- SIGNATURE -->
            <p class="ml-3 font-bold">
                Signature:
            </p>
            <p class="border border-t-0 border-l-0 border-r-0 border-b-2 h-5 ml-1 w-36">
                {{-- signature --}}
            </p>

            <!-- DATE -->
            <p class="ml-1 font-bold">
                Date:
            </p>
            <p class="border border-t-0 border-l-0 border-r-0 border-b-2 h-5 ml-1 w-16">
                {{-- date --}}
            </p>
        </div>
        <div class="my-10">
            <p class="font-bold">
                Attested by:
            </p>
        </div>

        <div class="flex">
            <!-- IACUC CHAIR -->
            <p class="font-bold">
                IACUC Chair:
            </p>
            <p class="border border-t-0 border-l-0 border-r-0 border-b-2 h-5 ml-1 w-48">
                {{-- iacuc chair --}}
            </p>

            <!-- SIGNATURE -->
            <p class="ml-1 font-bold">
                Signature:
            </p>
            <p class="border border-t-0 border-l-0 border-r-0 border-b-2 h-5 ml-1 w-36">
                {{-- signature --}}
            </p>

            <!-- DATE -->
            <p class="ml-1 font-bold">
                Date:
            </p>
            <p class="border border-t-0 border-l-0 border-r-0 border-b-2 h-5 ml-1 w-16">
                {{-- date --}}
            </p>
        </div>
    </div>
</body>

</html>