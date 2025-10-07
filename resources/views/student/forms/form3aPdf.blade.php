<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FORM-3A</title>
    @vite('resources/css/app.css') {{-- Tailwind --}}
    <style>
        .page-break {
            break-before: page;
        }
    </style>
</head>
<body class="p-8 text-sm font-arial">
    <h1 class="text-xl font-times font-black text-center mb-6">MCUERB FORM 3(A) Resubmission</h1>

    <x-formbanner>MCUERB FORM 3(A) Resubmission</x-formbanner>

    <h1 class="text-base font-bold text-center underline mb-4">RESUBMISSION FORM</h1>

    <div class="flex flex-col border">
        <!-- Section Header -->
        <div class="w-full bg-gray-400">
            <p class="text-sm font-bold m-1">General Information</p>
        </div>

        <!-- Title of Study -->
        <div class="flex items-center border-t">
            <div class="w-1/4 border-r border-black p-2">Title of Study</div>
            <div class="flex-1 p-2">{{ $protocol->title ?? '' }}</div>
        </div>
        
        <!-- Version number/date -->
        <div class="flex items-center border-t">
            <div class="w-1/4 border-r border-black p-2">Version number/date</div>
            <div class="flex-1 p-2">{{ $protocol->version ?? '' }}</div>
        </div>

        <!-- MCUERB Code + Study Site -->
        <div class="flex items-stretch border-t">
            <div class="w-1/6 border-r ml-2">
                <p class="text-xs mb-2">MCUERB Code</p>
                <p class="text-xs italic">(To be provided by MCUERB)</p>
            </div>
            <div class="w-1/4 border-r p-2">
                {{ $protocol->mcuerb_code ?? '' }}
            </div>
            <div class="w-1/6 border-r ml-2 text-center">Study Site</div>
            <div class="w-1/4 p-2 font-bold">{{ $protocol->study_site ?? '' }}</div>
        </div>

        <!-- Investigator + Contact Info -->
        <div class="flex border-t text-xs">
            <!-- Investigator Info -->
            <div class="w-1/2 border-r flex flex-col">
                <div class="flex border-b">
                    <div class="w-1/4 border-r ml-2">Name of Investigator</div>
                    <div class="w-1/4 p-2">{{ $protocol->principal_investigator ?? '' }}</div>
                </div>
                <div class="flex">
                    <div class="w-1/4 border-r ml-2">Co-Investigator/s (if any)</div>
                    <div class="w-1/2 p-2">{{ $protocol->co_investigator ?? '' }}</div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="w-1/2 flex">
                <!-- Left cell spanning -->
                <div class="w-1/4 border-r flex items-center justify-center p-2 font-bold text-center">
                    Contact Information
                </div>
                <!-- Right rows -->
                <div class="flex flex-col w-3/4">
                    <div class="flex border-b">
                        <div class="w-1/3 border-r p-2">Tel No:</div>
                        <div class="w-2/3 p-2">{{ $protocol->tel_no ?? '' }}</div>
                    </div>
                    <div class="flex border-b">
                        <div class="w-1/3 border-r p-2">Mobile No:</div>
                        <div class="w-2/3 p-2">{{ $protocol->mobile_no ?? '' }}</div>
                    </div>
                    <div class="flex">
                        <div class="w-1/3 border-r p-2">Email:</div>
                        <div class="w-2/3 p-2">{{ $protocol->email ?? '' }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-xs font-bold text-l mb-2">Institution of Investigator(s)</p>
            </div>
            <p class = "text-xs text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-xs font-bold text-l mb-2">Address of Institution</p>
            </div>
            <p class = "text-xs text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
    </div>
    
    <div class = "mt-4"></div>

    <div class = "flex flex-col border">
        <div class = "flex items-stretch">
            <div class = "px-2 w-2/3 border-r">
                <p class = "text-xs text-center text-l mb-2">MCUERB Recommendations</p>
            </div>
            <div class = "px-2 w-2/3 border-r">
                <p class = "text-xs text-center text-l mb-2">Response of Researcher(s)</p>
            </div>
            <div class = "px-2 w-1/4">
                <p class = "text-xs text-center text-l mb-2">Section and page number of revisions</p>
            </div>
        </div>
        <div class = "flex items-stretch border-t">
            <div class = "px-2 w-2/3 border-r">
                <p class = "text-xs text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
            <div class = "px-2 w-2/3 border-r">
                <p class = "text-xs text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
            <div class = "px-2 w-1/4">
                <p class = "text-xs text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
    </div>

    <p class = "text-xs font-bold text-l mt-4 mb-2">Signature of Researcher: ______________________</p>
    <p class = "text-xs font-bold text-l mt-4 mb-2">Date: _____________</p>
    <p class = "text-xs font-bold text-l mt-4 mb-2">Noted by the adviser: ______________________</p>
    <p class = "text-xs font-bold text-l mt-4 mb-2">Approved by the Research Coordinator: ______________________</p>
</body>
</html>
