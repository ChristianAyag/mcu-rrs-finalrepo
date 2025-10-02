<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FORM-2B</title>
    @vite('resources/css/app.css') {{-- loads Tailwind --}}
</head>
<style>
    .page-break {
        break-before: page;
    }
</style>
<body class="p-8 text-sm font-arial">
    <h1 class="text-xl font-times font-black text-center mb-6">MCUERB FORM 2(B): APPLICATION FOR INITIAL REVIEW</h1>

    <x-formbanner>MCUERB FORM 2(B): Application for Initial Review</x-formbanner>

    <h1 class = "text-base font-bold text-center underline mb-4">APPLICATION FOR INITIAL REVIEW</h1>

    <div class ="flex flex-col border">
        <div class ="flex items-center">
            <div class = "w-full border-b">
                <p class = "text-sm font-bold text-center m-1">SECTION I: APPLICATION INFORMATION</p>
            </div>
        </div>
        <div class ="flex items-center">
            <div class = "w-full border-b">
                <p class = "text-sm font-bold text-center m-1">TO BE FILLED UP BY MCUERB STAFF</p>
            </div>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/3 border-r">
                <p class = "text-sm font-bold text-l mb-2">Study Protocol Code:</p>
            </div>
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm text-l mb-2">MCUERB CODE:</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l mb-2">Date of Submission:</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class ="flex items-center border-b">
            <div class = "w-full">
                <p class = "text-sm font-bold text-center m-1">TO BE FILLED UP BY PRINCIPAL INVESTIGATOR (PI)</p>
            </div>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l m-1">Study Protocol Title</p>
            </div>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l m-1">Principal Investigator (PI)</p>
            </div>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l m-1">PI Contact Numbers</p>
            </div>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l m-1">PI Email Address</p>
            </div>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l m-1">Co-Investigator(s)</p>
            </div>
        </div>
        <div class ="flex items-stretch border-b">
            <div class = "px-2 w-1/4 flex items-center border-r">
                <p class = "text-sm font-bold text-l mb-2">Category of Investigator</p>
            </div>
            <div class = "flex flex-col items-start px-2">
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">5.1 MCU Undergraduate Student(s)</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class = "text-sm ml-2">5.2 MCU Graduate Student (MA, MS, PhD, Medical Student)</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">5.3 MCU Faculty</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">5.4 MCU Non-Teaching Staff</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">5.5 MCU Administrative Staff</span>
                </div>
            </div>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l m-1">Endorsing/College/ Unit/ Institution</p>
            </div>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l m-1">Submitted by:</p>
            </div>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l m-1">Principal investigator (PI) Signature</p>
            </div>
        </div>
        <div class ="flex items-center border-b">
            <div class = "w-full">
                <p class = "text-sm font-bold text-center m-1">Section II: PROTOCOL INFORMATION</p>
            </div>
        </div>
        <div class ="flex items-stretch border-b">
            <div class = "px-2 w-1/4 flex items-center border-r">
                <p class = "text-sm font-bold text-l mb-2">Type of Study</p>
            </div>
            <div class = "flex flex-col items-start px-2">
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">Academic Requirement (Thesis, Dissertation, Training Requirement)</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class = "text-sm ml-2">Independent Research Work/Researcher Initiated</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">Multi-Disciplinary, Multi-Institutional or Multi-Country collaboration</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">Others (specify):</span>
                </div>
            </div>
        </div>
    </div>

    <div class = "page-break"></div>

    <!----page 2--->
    <div class ="flex flex-col border">
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l mb-2">Study Protocol Title</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l mb-2">Study Protocol Brief Description</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class ="flex items-stretch border-b">
            <div class = "px-2 w-1/4 flex items-center border-r">
                <p class = "text-sm font-bold text-l mb-2">Study Duration</p>
            </div>
            <div class = "flex flex-col items-start px-2">
                <div class = "flex items-center">
                    <span class="text-sm ml-2">Start Date:</span>
                </div>
                <div class = "flex items-center">
                    <span class="text-sm ml-2">End Date:</span>
                </div>
            </div>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l m-1">Study Setting or Site/s</p>
            </div>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l m-1">Number of Study Participants</p>
            </div>
        </div>
        <div class ="flex items-stretch border-b">
            <div class = "px-2 w-1/4 flex items-center border-r">
                <p class = "text-sm font-bold text-l mb-2">Source of Funding</p>
            </div>
            <div class = "flex flex-col items-start px-2">
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">Self-Funded</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class = "text-sm ml-2">Government-Funded</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">Research Grant/Scholarship</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">Institution-Funded</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">Sponsored by Pharmaceutical Company</span>
                </div>
                <div class = "flex items-center">
                    <span class="text-sm ml-2">Specify: <span class = "text-sm underline"><!---{{ $protocol->mcuerb_code }}--></span></span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">Others</span>
                </div>
                <div class = "flex items-center">
                    <span class="text-sm ml-2">Specify: <span class = "text-sm underline"><!---{{ $protocol->mcuerb_code }}--></span></span>
                </div>
            </div>
        </div>
        <div class ="flex items-stretch border-b">
            <div class = "px-2 w-1/4 flex items-center border-r">
                <p class = "text-sm font-bold text-l mb-2">Has the Research undergone Technical Review?</p>
            </div>
            <div class = "flex flex-col items-start w-2/3 px-2">
                <div class = "flex items-start mt-2">
                    <div class="w-8 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2 leading-snug">Yes (please attach certification of technical review results and approval from Research Adviser noted by the Dean of the College))</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">No</span>
                </div>
            </div>
        </div>
        <div class ="flex items-stretch border-b">
            <div class = "px-2 w-1/4 flex items-center border-r">
                <p class = "text-sm font-bold text-l mb-2">Has the Research been submitted to another ERB?</p>
            </div>
            <div class = "flex flex-col items-start w-2/3 px-2">
                <div class = "flex items-start mt-2">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2 leading-snug">Yes</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">No</span>
                </div>
            </div>
        </div>
        <div class ="flex items-center">
            <div class = "w-full border-b">
                <p class = "text-sm font-bold text-center m-1">SECTION III: ETHICAL CONSIDERATIONS</p>
            </div>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm text-l m-1">a. Protection of privacy and confidentiality of research information including data protection plan</p>
            </div>
            <p class = "text-sm italic w-[500px] text-l m-1">The section on ethical considerations should be stated in the study protocol. Please write a summary on protection of privacy and confidentiality of research information including data protection plan.</p>
        </div>
        <div class ="flex items-stretch border-b">
            <div class = "flex flex-col items-start px-2 w-1/3 border-r">
                <div class = "flex items-start">
                    <span class="text-sm ml-2">1.</span>
                </div>
                <div class = "flex items-center">
                    <span class="text-sm ml-2">2.</span>
                </div>
                <div class = "flex items-start">
                    <span class="text-sm ml-2">3.</span>
                </div>
                <div class = "flex items-center">
                    <span class="text-sm ml-2">4.</span>
                </div>
                <div class = "flex items-start">
                    <span class="text-sm ml-2">5.</span>
                </div>
                <div class = "flex items-center">
                    <span class="text-sm ml-2">6.</span>
                </div>
                <div class = "flex items-start">
                    <span class="text-sm ml-2">7.</span>
                </div>
                <div class = "flex items-center">
                    <span class="text-sm ml-2">8.</span>
                </div>
                <div class = "flex items-center">
                    <span class="text-sm ml-2">9.</span>
                </div>
            </div>
            <div class = "px-2 flex w-full items-center">
                <p class = "text-sm italic text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
    </div>
    <div class = "page-break"></div>
    <!----page 3--->

    <div class ="flex flex-col border">
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm text-l mb-2">a. Vulnerability of research participants</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm text-l mb-2">b. Risks of the study</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm text-l mb-2">c. Benefits of the study</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm text-l m-1">a. Protection of privacy and confidentiality of research information including data protection plan</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm text-l mb-2">e. Informed consent process and recruitment procedures</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm text-l mb-2">f. Community considerations</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm text-l mb-2">g. Dissemination/data sharing plan</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class ="flex items-center border-b">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm text-l mb-2">h. Terms of reference of collaborative study</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class ="flex items-stretch">
            <div class = "px-2 w-1/4 flex items-center border-r">
                <p class = "text-sm font-bold text-l mb-2">Use of special populations or vulnerable groups</p>
            </div>
            <div class = "flex flex-col items-start w-2/3 px-2">
                <div class = "flex items-start mt-2">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2 leading-snug">11.1 Children (under 18)</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">11.2 Indigenous People</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">11.3 Indigenous People</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">11.4 People on welfare/social assistance</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">11.5 Poor and unemployed</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">11.6 Patients in emergency care</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">11.7 Homeless persons</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">11.8 Refugees or displaced persons</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">11.9 Patients with incurable diseases</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">11.10 Others (indicate):</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">11.11 Not applicable</span>
                </div>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class = "px-2 w-1/4 flex items-center border-r">
                <p class = "text-sm font-bold text-l mb-2">Use of special populations or vulnerable groups</p>
            </div>
            <div class = "flex flex-col items-start w-2/3 px-2">
                <div class = "flex items-start mt-2">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2 leading-snug">12.1 Children aged less than 7 years old</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">12.2 Children aged 7 years old to less than 12 years old</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">12.3 Children aged 12 years old to less than 15 years old</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">12.4 Children aged 15 years old to less than 18 years old</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2">12.5 Not applicable</span>
                </div>
            </div>
        </div>
    </div>

    <div class = "page-break"></div>
    <!---page 4-->

    <p class = "text-sm font-arial mt-8 font-bold">Noted by the Research Adviser:</p>

    <p class = "text-sm font-arial mt-8 font-bold">Approved by the Research Coordinator:</p>
</body>
</html>