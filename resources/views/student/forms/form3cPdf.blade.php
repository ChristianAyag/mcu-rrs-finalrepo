<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>FORM-3C</title>
    @vite('resources/css/app.css') {{-- Tailwind --}}
    <style>
        .page-break {
            break-before: page;
        }
    </style>
</head>

<body class="p-2 text-sm font-arial">
    <h1 class="text-xl font-times font-black text-center mb-6">MCUERB FORM 3(C) Progress Reports</h1>

    <x-formbanner>MCUERB FORM 3(C) Progress Reports</x-formbanner>

    <div class="mt-8 flex flex-col border">
        <div class="flex items-center">
            <div class="w-full bg-gray">
                <p class="text-sm font-bold text-center py-1">TO BE FILLED UP BY MCUERB STAFF</p>
            </div>
        </div>
        <div class="flex items-stretch border-t">
            <div class="w-full">
                <p class="text-sm font-bold py-1 mx-2">STUDY PROTOCOL INFORMATION</p>
            </div>
        </div>

        <!-- MCUERB CODE -->
        <div class="flex items-stretch border-t">
            <div class="w-[29.00%] font-bold border-r py-1 mx-2">
                MCUERB Code
            </div>
            <div class="mx-2 py-1">
                {{-- mcuerb code --}}
            </div>
        </div>

        <!-- STUDY PROTOCOL TITLE -->
        <div class="flex items-stretch border-t">
            <div class="w-[29.00%] font-bold border-r py-1 mx-2">
                STUDY Protocol Title:
            </div>
            <div class="mx-2 py-1">
                {{-- study protocol title --}}
            </div>
        </div>

        <!-- PRINICIPAL INVESTIGATOR -->
        <div class="flex items-stretch border-t">
            <div class="w-[29.00%] font-bold border-r py-1 mx-2">
                Prinicipal Investigator (PI)
            </div>
            <div class="mx-2 py-1">
                {{-- principal investigator --}}
            </div>
        </div>

        <!-- PI CONTACT NUMBERS -->
        <div class="flex items-stretch border-t">
            <div class="w-[29.00%] font-bold border-r py-1 mx-2">
                PI Contact Numbers
            </div>
            <div class="mx-2 py-1">
                {{-- pi contact numbers --}}
            </div>
        </div>

        <!-- PI EMAIL ADDRESS -->
        <div class="flex items-stretch border-t">
            <div class="w-[29.00%] font-bold border-r py-1 mx-2">
                PI Email Address
            </div>
            <div class="mx-2 py-1">
                {{-- pi email address --}}
            </div>
        </div>

        <!-- STUDY PROTOCOL SUBMISSION DATE -->
        <div class="flex items-stretch border-t">
            <div class="w-[29.00%] font-bold border-r py-1 mx-2">
                Study Protocol Submission Date
            </div>
            <div class="mx-2 py-1">
                {{-- study protocol submission date --}}
            </div>
        </div>

        <!-- STUDY PROTOCOL REVIEW DATE -->
        <div class="flex items-stretch border-t">
            <div class="w-[29.00%] font-bold border-r py-1 mx-2">
                Study Protocol Review Date
            </div>
            <div class="mx-2 py-1">
                {{-- study protocol review date --}}
            </div>
        </div>
    </div>
    <br>
    <h1 class="text-sm font-bold text-center underline uppercase mb-4">Progress Report</h1>
    <div class="mx-8 font-bold italic">
        Instructions to the Researcher: Please accomplish this form and ensure that you have included in your submission
        the relevant documents.
    </div>

    <div class="mt-2 mx-8 flex flex-col border">
        <div class="flex bg-gray">
            <div class="mx-2 font-bold py-1">General Information</div>
        </div>

        <!-- TITLE OF STUDY -->
        <div class="flex items-stretch border-t">
            <div class="w-[23.00%] font-bold border-r py-1 mx-2">
                <p>Title of Study</p>
            </div>
            <div class="mx-2 py-1">
                {{-- title of study --}}
            </div>
        </div>

        <!-- MCUERB CODE & STUDY SITE -->
        <div class="flex items-stretch border-t">
            <!-- MCUERB CODE -->
            <div class="w-[23.00%] font-bold border-r flex items-center mx-2">
                <p>MCUERB Code (To be provided by MCUERB)</p>
            </div>
            <div class="w-[29.00%] border-r p-2">
                <p>{{-- mcuerb code --}}</p>
            </div>

            <!-- STUDY SITE -->
            <div class="w-[17.00%] flex items-center font-bold border-r mx-2">
                <p>Study Site</p>
            </div>
            <div class="flex-1 p-2">
                <p>{{-- study site --}}</p>
            </div>
        </div>

        <!-- NAME OF RESEARCHER & CONTACT INFORMATION -->
        <div class="flex items-stretch border-t">
            <!-- NAME OF RESEARCHER -->
            <div class="w-[23.00%] flex items-center font-bold border-r mx-2 py-1">
                <p>Name of Researcher/PI</p>
            </div>
            <div class="w-[29.00%] border-r p-2">
                <p>{{-- name of researcher --}}</p>
            </div>

            <!-- CONTACT INFORMATION -->
            <div class="w-[17.00%] flex items-center font-bold border-r ml-2 py-1">
                <p>Contact Information</p>
            </div>
            <div class="flex-1">
                <!-- MOBILE NUMBER -->
                <div class="flex items-center">
                    <p class="py-1 font-bold">Mobile No:</p>&nbsp;
                    <p>{{-- mobile no. --}}</p>
                </div>

                <!-- EMAIL -->
                <div class="flex items-center border-t">
                    <p class="py-1 font-bold">Email:</p>&nbsp;
                    <p class="break-all">{{-- email --}}</p>
                </div>
            </div>
        </div>

        <!-- INSTITUTION -->
        <div class="flex items-stretch border-t">
            <div class="w-[23.00%] font-bold border-r py-1 mx-2">
                <p>Institution</p>
            </div>
            <div class="mx-2 py-1">
                <p>{{-- institution --}}</p>
            </div>
        </div>

        <!-- ADDRESS OF INSTITUTION -->
        <div class="flex items-stretch border-t">
            <div class="w-[23.00%] font-bold border-r py-1 mx-2">
                <p>Address of Institution</p>
            </div>
            <div class="mx-2 py-1">
                <p>{{-- address of institution --}}</p>
            </div>
        </div>
    </div>

    <!-- Page 2 -->
    <div class="page-break"></div>

    <div class="mt-2 mx-8 flex flex-col border">
        <!-- COLLEGE / DEPARTMENT / UNIT -->
        <div class="flex items-stretch">
            <div class="w-[23.00%] font-bold border-r py-1 mx-2">
                <p>College / Department / Unit</p>
            </div>
            <div class="mx-2 py-1">
                <p>{{-- college / department / unit --}}</p>
            </div>
        </div>

        <!-- ETHICAL CLEARANCE EFFECTIVITY PERIOD -->
        <div class="flex items-stretch border-t">
            <div class="w-[23.00%] font-bold border-r py-1 mx-2">
                <p>Ethical clearance effectivity period</p>
            </div>
            <div class="mx-2 py-1">
                <p>{{-- ethical clearance effectivity period --}}</p>
            </div>
        </div>

        <!-- PROGRESS REPORT -->
        <div class="flex items-center border-t">
            <div class="w-full">
                <p class="text-sm font-bold text-center py-1">PROGRESS REPORT</p>
            </div>
        </div>

        <!-- START OF STUDY -->
        <div class="flex items-stretch border-t">
            <div class="w-[50.00%] border-r py-1 mx-2">
                <p>Start of study</p>
            </div>
            <div class="mx-2 py-1">
                <p>{{-- start of study --}}</p>
            </div>
        </div>

        <!-- EXPECTED END OF STUDY -->
        <div class="flex items-stretch border-t">
            <div class="w-[50.00%] border-r py-1 mx-2">
                <p>Expected end of study</p>
            </div>
            <div class="mx-2 py-1">
                <p>{{-- expected end of study --}}</p>
            </div>
        </div>

        <!-- NUMBER OF ENROLLED PARTICIPANTS -->
        <div class="flex items-stretch border-t">
            <div class="w-[50.00%] border-r py-1 mx-2">
                <p>Number of enrolled participants</p>
            </div>
            <div class="mx-2 py-1">
                <p>{{-- number of enrolled participants --}}</p>
            </div>
        </div>

        <!-- NUMBER OF REQUIRED PARTICIPANTS -->
        <div class="flex items-stretch border-t">
            <div class="w-[50.00%] border-r py-1 mx-2">
                <p>Number of required participants</p>
            </div>
            <div class="mx-2 py-1">
                <p>{{-- number of required participants --}}</p>
            </div>
        </div>

        <!-- NUMBER OF PARTICIPANTS WHO WITHDREW -->
        <div class="flex items-stretch border-t">
            <div class="w-[50.00%] border-r py-1 mx-2">
                <p>Number of participants who withdrew</p>
            </div>
            <div class="mx-2 py-1">
                <p>{{-- number of participants who withdrew --}}</p>
            </div>
        </div>

        <!-- DEVIATIONS FROM THE APPROVED PROTOCOL -->
        <div class="flex items-stretch border-t">
            <div class="w-[50.00%] border-r py-1 mx-2">
                <p>Deviations from the approved protocol</p>
            </div>
            <div class="mx-2 py-1">
                <p>{{-- deviations from the approved protocol --}}</p>
            </div>
        </div>

        <!-- NEW INFORMATION -->
        <div class="flex items-stretch border-t">
            <div class="w-[50.00%] border-r py-1 mx-2">
                <p>New information (literature or in the conduct of the study) that may significantly change the
                    risk-benefit ratio</p>
            </div>
            <div class="mx-2 py-1">
                <p>{{-- new information --}}</p>
            </div>
        </div>

        <!-- ISSUES/PROBLEMS ENCOUNTERED -->
        <div class="flex items-stretch border-t">
            <div class="w-[50.00%] border-r py-1 mx-2">
                <p>Issues/problems encountered</p>
            </div>
        </div>
    </div>

    <div class="mx-8">
        <p class="text-sm font-arial mt-6">Submitted by:</p>

        <p class="text-sm font-arial mt-2 w-full flex flex-wrap"></p>

        <p class="text-sm font-arial mt-2 italic">
            < Signature>
        </p>

        <p class="text-sm font-arial mt-2 italic">
            < Name of the Principal Investigator>
        </p>

        <p class="text-sm font-arial mt-2">Principal Investigator</p>

        <p class="text-sm font-arial mt-6 font-bold">Noted by the Research Adviser:</p>

        <p class="text-sm font-arial mt-2">Date and Signature:</p>

        <p class="text-sm font-arial mt-6 font-bold">Approved by the Research Coordinator:</p>

        <p class="text-sm font-arial mt-2">Date and Signature:</p>
    </div>
</body>

</html>