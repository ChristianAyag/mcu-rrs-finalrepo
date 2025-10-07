<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form-3E</title>
    @vite('resources/css/app.css') {{-- Tailwind --}}
    <style>
        .page-break {
            break-before: page;
        }
    </style>
</head>

<body class="p-2 text-sm font-arial">
    <h1 class="text-xl font-times font-black text-center mb-6">MCUERB Form 3(E) Amendments</h1>

    <x-formbanner>MCUERB FORM 3(E) Amendments</x-formbanner>

    <h1 class="text-base font-bold text-center underline my-2">AMENDMENTS FORM</h1>

    <div class="mt-8 flex flex-col border">
        <div class="items-stretch bg-gray">
            <div class="w-full">
                <p class="text-sm font-bold py-1 mx-2">STUDY PROTOCOL INFORMATION</p>
            </div>
        </div>

        <!-- MCUERB CODE -->
        <div class="flex items-stretch border-t">
            <div class="w-[25.00%] border-r py-1 mx-2">
                <p><b>MCUERB Code</b> <i>(To be provided by ERB)</i></p>
            </div>
            <div class="w-[72.00%] py-1">
                <p>{{-- mcuerb code --}}</p>
            </div>
        </div>

        <!-- STUDY PROTOCOL TITLE -->
        <div class="flex items-stretch border-t">
            <div class="w-[25.00%] border-r py-1 mx-2">
                <p class="font-bold">Study Protocol Title</p>
            </div>
            <div class="w-[72.00%] py-1">
                <p>{{-- study protocol title --}}</p>
            </div>
        </div>

        <!-- PI, CO-INVESTIGATOR & CONTACT INFO -->
        <div class="flex items-stretch border-t">
            <div class="w-[55.00%] border-r flex flex-col">
                <div class="flex">
                    <div class="w-[45.80%] items-center border-r py-1 mx-2">
                        <p class="font-bold py-2">Principal Investigator (PI)</p>
                    </div>
                    <div class="w-[50.00%] py-1">
                        <p class="">{{-- principal investigator --}}</p>
                    </div>
                </div>
                <div class="flex items-center border-t">
                    <div class="w-[45.80%] border-r py-2 mx-2">
                        <p class="font-bold py-4">Co-Investigator(s)</p>
                    </div>
                    <div class="w-[50.00%] py-1">
                        <p>{{-- co-investigator(s) --}}</p>
                    </div>
                </div>
            </div>
            <div class="w-[13.00%] flex items-center border-r ml-2 py-1">
                <p>Contact Information</p>
            </div>
            <div class="flex-1">
                <!-- MOBILE NUMBER -->
                <div class="flex items-center">
                    <div class="w-[28.00%] border-r">
                        <p class="font-bold ml-1 py-0.5">Mobile No.</p>
                    </div>
                    <div class="mx-1">
                        <p class="break-all">{{-- mobile no. --}}</p>
                    </div>
                </div>

                <!-- EMAIL -->
                <div class="flex items-center border-t">
                    <div class="w-[28.00%] py-2 border-r">
                        <p class="font-bold ml-1 py-4">Email</p>
                    </div>
                    <div class="w-[66.00%] px-1">
                        <p class="break-all">{{-- email --}}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- INSTITUTION -->
        <div class="flex items-stretch border-t">
            <div class="w-[25.00%] border-r py-1 mx-2">
                <p class="font-bold">Institution</p>
            </div>
            <div class="w-[72.00%] py-1">
                <p>{{-- institution --}}</p>
            </div>
        </div>

        <!-- ADDRESS OF INSTITUTION -->
        <div class="flex items-stretch border-t">
            <div class="w-[25.00%] border-r py-1 mx-2">
                <p class="font-bold">Address of Institution</p>
            </div>
            <div class="w-[72.00%] py-1">
                <p>{{-- address of institution --}}</p>
            </div>
        </div>

        <!-- COLLEGE/DEPARTMENT -->
        <div class="flex items-stretch border-t">
            <div class="w-[25.00%] border-r py-1 mx-2">
                <p class="font-bold">College/Department</p>
            </div>
            <div class="w-[72.00%] py-1">
                <p>{{-- college/department --}}</p>
            </div>
        </div>

        <!-- STUDY PROTOCOL SUBMISSION DATE -->
        <div class="flex items-stretch border-t">
            <div class="w-[25.00%] border-r py-1 mx-2">
                <p class="font-bold">Study Protocol Submission Date</p>
            </div>
            <div class="w-[72.00%] py-1">
                <p>{{-- study protocol submission date --}}</p>
            </div>
        </div>

        <!-- STUDY PROTOCOL APPROVAL DATE -->
        <div class="flex items-stretch border-t">
            <div class="w-[25.00%] border-r py-1 mx-2">
                <p class="font-bold">Study Protocol Approval Date</p>
            </div>
            <div class="w-[72.00%] py-1">
                <p>{{-- study protocol approval date --}}</p>
            </div>
        </div>

        <!-- VERSION NUMBER -->
        <div class="flex items-stretch border-t">
            <div class="w-[25.00%] border-r py-1 mx-2">
                <p class="font-bold">Version Number</p>
            </div>
            <div class="w-[72.00%] py-1">
                <p>{{-- version number --}}</p>
            </div>
        </div>
    </div>
    <div class="mt-4 mx-8">
        <div class="flex">
            <p class="font-bold">Signature over Printed Name of Principal Investigator:</p>&nbsp;
            <p class="border border-t-0 border-l-0 border-r-0 border-b-2 h-5 w-48">{{-- signature of pi --}}</p>
        </div>
        <div class="flex mt-4">
            <p class="font-bold">Date:</p>&nbsp;
            <p class="border border-t-0 border-l-0 border-r-0 border-b-2 h-5 w-48">{{-- date --}}</p>
        </div>
    </div>
    <div class="mx-8 mt-4 border">
        <div class="flex items-stretch">
            <div class="p-4 font-bold">
                <p>PRIMARY REVIEWER</p>
            </div>
            <div class="flex ml-24 px-2 py-4">
                <p>Signature</p>
                <p class="border border-t-0 border-l-0 border-r-0 border-b h-4 ml-2 w-48"></p>
            </div>
        </div>
        <div class="flex items-stretch">
            <div class="flex p-4">
                <p>Date</p>
                <p class="border border-t-0 border-l-0 border-r-0 border-b h-4 ml-2 w-28"></p>
            </div>
            <div class="flex pl-24 py-4">
                <p>Name</p>
                <p class="border border-t-0 border-l-0 border-r-0 border-b h-4 ml-2 w-48"></p>
            </div>
        </div>
    </div>

    <!-- Page 2 -->
    <div class="page-break"></div>

    <div class="mt-8 flex border">
        <div class="w-[20.00%]">
            <div class="font-bold flex items-center justify-center border-r py-1 h-28">
                <p class="text-center">
                    Procedure / provisions to be
                    amended (Use
                    additional sheets
                    if necessary)
                </p>
            </div>
            <div class="font-bold items-center border-r py-1 break-all border-t h-48">
                <p class="text-center">
                    {{-- procedure/provisions --}}
                </p>
            </div>
            <div class="font-bold items-center border-r py-1 break-all border-t h-48">
                <p class="text-center">
                    {{-- procedure/provisions --}}
                </p>
            </div>
        </div>
        <div class="w-[20.00%]">
            <div class="font-bold flex items-center justify-center border-r py-1 h-28">
                <p class="text-center">
                    Original Procedure / Provisions
                </p>
            </div>
            <div class="font-bold flex items-center justify-center border-r py-1 break-all border-t h-48">
                <p class="text-center">
                    {{-- original procedure/provisions --}}
                </p>
            </div>
            <div class="font-bold items-center border-r py-1 break-all border-t h-48">
                <p class="text-center">
                    {{-- original procedure/provisions --}}
                </p>
            </div>
        </div>
        <div class="w-[20.00%]">
            <div class="font-bold flex items-center justify-center border-r py-1 h-28">
                <p class="text-center">
                    Proposed Amendment/s
                </p>
            </div>
            <div class="font-bold items-center border-r py-1 break-all border-t h-48">
                <p class="text-center">
                    {{-- proposed amendments --}}
                </p>
            </div>
            <div class="font-bold items-center border-r py-1 break-all border-t h-48">
                <p class="text-center">
                    {{-- proposed amendments --}}
                </p>
            </div>
        </div>
        <div class="w-[20.00%]">
            <div class="font-bold flex items-center justify-center border-r py-1 h-28">
                <p class="text-center">
                    Justification
                </p>
            </div>
            <div class="font-bold items-center border-r py-1 break-all border-t h-48">
                <p class="text-center">
                    {{-- justification --}}
                </p>
            </div>
            <div class="font-bold items-center border-r py-1 break-all border-t h-48">
                <p class="text-center">
                    {{-- justification --}}
                </p>
            </div>
        </div>
        <div class="w-[20.00%]">
            <div class="font-bold flex items-center justify-center py-1 h-28">
                <p class="text-center">
                    Remarks (To be filled up by the Primary Reviewer)
                </p>
            </div>
            <div class="font-bold items-center py-1 break-all border-t h-48">
                <p class="text-center">
                    {{-- remarks --}}
                </p>
            </div>
            <div class="font-bold items-center py-1 break-all border-t h-48">
                <p class="text-center">
                    {{-- remarks --}}
                </p>
            </div>
        </div>
    </div>
</body>

</html>