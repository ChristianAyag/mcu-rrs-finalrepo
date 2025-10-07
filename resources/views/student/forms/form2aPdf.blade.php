<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FORM-2A</title>
    @vite('resources/css/app.css') {{-- loads Tailwind --}}
</head>
<body class="p-8 text-sm font-arial">
    <!---Page 1-->
    <h1 class="text-xl font-times font-black text-center mb-6">MCUERB FORM 2(A): Study Protocol Review Checklist</h1>

    <x-formbanner>MCUERB FORM 2(A): Study Protocol Review Checklist</x-formbanner>
    
    <h1 class = "text-base font-bold text-center underline mb-4">STUDY PROTOCOL REVIEW CHECKLIST</h1>

    <h2 class = "text-sm font-bold text-l mb-2">STUDY PROTOCOL INFORMATION</h2>

    <div class ="flex items-center border">
        <div class = "px-2 w-1/3 border-r">
            <p class = "text-sm font-bold text-l mb-2">MCUERB Code:</p>
            <p class = "text-sm text-l italic">(To be accomplished by MCUERB Staff)</p>
        </div>
        <p class = "text-sm text-l mb-2">{{ $protocol->mcuerb_code }}</p>
    </div>
    <div class ="flex items-center border-b border-l border-r">
        <div class = "px-2 w-1/3 border-r">
            <p class = "text-sm font-bold text-l mb-2">Study Protocol Title:</p>
        </div>
        <p class = "text-sm text-l mb-2">{{ $protocol->title }}</p>
    </div>
    <div class ="flex items-center border-b border-l border-r">
        <div class = "px-2 w-1/3 border-r">
            <p class = "text-sm font-bold text-l mb-2">Principal Investigator:</p>
        </div>
        <p class = "text-sm text-l mb-2">{{ $protocol->principal_investigator }}</p>
    </div>
    <div class ="flex items-center border-b border-l border-r">
        <div class = "px-2 w-1/3 border-r">
            <p class = "text-sm font-bold text-l mb-2">Co-investigator:</p>
        </div>
        <p class = "text-sm text-l mb-2">{{ $protocol->co_investigator }}</p>
    </div>
    <div class ="flex items-center border-b border-l border-r">
        <div class = "px-2 w-full">
            <p class = "text-sm font-bold text-center m-4">To be filled up by the Thesis Adviser</p>
        </div>
    </div>
    <div class ="flex flex-col border-b border-l border-r">
        <div class = "ml-1 px-2 w-full">
            <p class = "text-sm font-bold text-l ml-1">Basic Documents (must submit for initial review)</p>
        </div>
        <div class = "flex ml-2 px-2 w-full">
            <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                @if($protocol->review_type === 'EXPEDITED')✓@endif
            </div>
            <span class = "text-sm ml-2 leading-snug">Cover letter from the thesis/dissertation advisor/mentor with noted by the College Dean - for MCU students</span>
        </div>
        <div class = "flex ml-2 px-2 w-full">
            <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                @if($protocol->review_type === 'EXPEDITED')✓@endif
            </div>
            <span class = "text-sm ml-2 leading-snug">Proof of enrollment (1 photocopied and e-copy of registration form) - for MCU students</span>
        </div>
        <div class = "flex ml-2 px-2 w-full">
            <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                @if($protocol->review_type === 'EXPEDITED')✓@endif
            </div>
            <span class = "text-sm ml-2 leading-snug">Proof of employment (letter of endorsement from direct supervisor) - for teaching, non-teaching, and administrative staff</span>
        </div>
        <div class = "flex ml-2 px-2 w-full">
            <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                @if($protocol->review_type === 'EXPEDITED')✓@endif
            </div>
            <span class = "text-sm ml-2 leading-snug">Letter from the thesis/dissertation advisor/mentor noted by the College Dean signifying that the protocol had undergone and passed technical review</span>
        </div>
        <div class = "flex ml-2 px-2 w-full">
            <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                @if($protocol->review_type === 'EXPEDITED')✓@endif
            </div>
            <span class = "text-sm ml-2 leading-snug">Completed
                <span class = "font-bold">MCUERB FORM 2(B) APPLICATION FOR INITIAL REVIEW</span>
                – 1 hard copy of printed and a soft copy
            </span>
        </div>
        <div class = "flex ml-2 px-2 w-full">
            <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                @if($protocol->review_type === 'EXPEDITED')✓@endif
            </div>
            <span class = "text-sm ml-2 leading-snug">Completed
                <span class = "font-bold">MCUERB FORM 2(A) PROTOCOL REVIEW CKECKLIST</span>
            </span>
        </div>
        <div class = "flex ml-2 px-2 w-full">
            <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                @if($protocol->review_type === 'EXPEDITED')✓@endif
            </div>
            <span class = "text-sm ml-2 leading-snug">
                Completed
                 <span class = "font-bold">MCUERB FORM 2(D) INFORMED CONSENT CHECKLIST for PRINCIPAL INVESTIGATOR (PI)</span>
            </span>
        </div>
        <div class = "ml-1 px-2 w-full">
            <p class = "text-sm font-bold text-l ml-1 mt-4">Protocol Package (must submit for initial review)</p>
        </div>
        <div class = "flex ml-2 px-2 w-full">
            <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                @if($protocol->review_type === 'EXPEDITED')✓@endif
            </div>
            <span class = "text-sm ml-2 leading-snug">
                Study Protocol (Chapters I, II, & III)</span>
            </span>
        </div>
        <div class = "flex ml-2 px-2 w-full">
            <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                @if($protocol->review_type === 'EXPEDITED')✓@endif
            </div>
            <span class = "text-sm ml-2 font-bold leading-snug">
                MCUERB FORM 2(C) INFORMED CONSENT FORM
                 <span class = "font-normal">- English Version</span>
            </span>
        </div>
        <div class = "flex ml-2 px-2 w-full">
            <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                @if($protocol->review_type === '')✓@endif
            </div>
            <span class = "text-sm ml-2 font-bold leading-snug">
                MCUERB FORM 2(C) INFORMED CONSENT FORM
                 <span class = "font-normal">- Filipino Version or in local language/dialect (if applicable)</span>
            </span>
        </div>
        <div class = "flex ml-2 px-2 w-full">
            <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                @if($protocol->review_type === '')✓@endif
            </div>
            <span class = "text-sm ml-2 leading-snug">Data collection forms/tools/instrument/questionnaire</span>
        </div>
        <div class = "flex ml-2 px-2 w-full">
            <div class="w-6 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                @if($protocol->review_type === '')✓@endif
            </div>
            <span class = "text-sm ml-2 leading-snug">Certificates of Validators of the tool(s)/instrument(s)/questionnaire (at least three (3) validators) – Researcher’s developed tool (if applicable)</span>
        </div>
        <div class = "flex ml-2 px-2 w-full">
            <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                @if($protocol->review_type === '')✓@endif
            </div>
            <span class = "text-sm ml-2 leading-snug">Child Assent for Children Ages 7-12 years – English Version (if applicable)</span>
        </div>
        <div class = "flex ml-2 px-2 w-full">
            <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                @if($protocol->review_type === '')✓@endif
            </div>
            <span class = "text-sm ml-2 leading-snug">Child Assent for Children Ages 7-12 years – Filipino/Dialect Version (if applicable)</span>
        </div>
        <div class = "flex ml-2 px-2 w-full">
            <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                @if($protocol->review_type === '')✓@endif
            </div>
            <span class = "text-sm ml-2 leading-snug">Recruitment advertisement(s) and/or social media Poster (as needed by the study protocol) (if applicable)</span>
        </div>
    </div>

    <div class = "page-break"></div>

    <!---Page 2-->
    <div class ="flex flex-col border mt-6">
        <div class = "flex ml-2 px-2 mt-2 w-full">
            <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                @if($protocol->review_type === '')✓@endif
            </div>
            <span class = "text-sm ml-2 leading-snug">Curriculum Vitae of PI and study team members</span>
        </div>
        <div class = "flex ml-2 px-2 w-full">
            <div class="w-6 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                @if($protocol->review_type === '')✓@endif
            </div>
            <div class = "text-sm ml-2 leading-snug">Good Clinical Practice (GCP) or Health Research Ethics Training Certificate of PI and Co-Investigators (GCP is required for clinical trials) obtained within the last three (3) years) (if applicable)</div>
        </div>
        <div class = "flex ml-2 mb-2 px-2 w-full">
            <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                @if($protocol->review_type === '')✓@endif
            </div>
            <span class = "text-sm ml-2">Gantt chart</span>
        </div>
        <div class ="flex items-center">
            <div class = "px-2 w-1/3 border-r">
                <p class = "text-sm font-bold text-l mb-2">Reviewed and Approved by Thesis Adviser</p>
            </div>
        </div>
        <div class ="flex items-center border-t">
            <div class = "px-2 w-1/3 border-r">
                <p class = "text-sm font-bold text-l mb-2">Signature and Date</p>
            </div>
        </div>
        <div class ="flex items-center border-t">
            <div class = "px-2 w-1/3 border-r">
                <p class = "text-sm font-bold text-l mb-2">Verified by Research Coordinator</p>
            </div>
        </div>
        <div class ="flex items-center border-t">
            <div class = "px-2 w-1/3 border-r">
                <p class = "text-sm font-bold text-l mb-2">Signature and Date</p>
            </div>
        </div>
        <div class ="flex items-center border-t">
            <div class = "px-2 w-1/3 border-r">
                <p class = "text-sm font-bold text-l mb-2">Study Protocol Submission Date:</p>
                <p class = "text-sm text-l italic">(To be accomplished by MCUERB Staff)</p>
            </div>
        </div>
        <div class ="flex items-center border-t">
            <div class = "px-2 w-1/3 border-r">
                <p class = "text-sm font-bold text-l mb-2">Classification of Review:</p>
                <p class = "text-sm text-l italic">(To be accomplished by MCUERB Staff)</p>
            </div>
            <div class = "flex flex-col items-start w-1/4 px-2">
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2 font-bold">EXPEDITED</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class = "text-sm ml-2 font-bold">FULL BOARD</span>
                </div>
                <div class = "flex items-center">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-sm ml-2 font-bold">EXPEDITED</span>
                </div>
            </div>
        </div>
        <div class ="flex items-center border-t">
            <div class = "px-2 w-1/3 border-r">
                <p class = "text-sm font-bold text-l mb-2">Classification by the:</p>
                <div class = "flex flex-col items-start px-2">
                    <div class = "flex items-center">
                        <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                            @if($protocol->review_type === '')✓@endif
                        </div>
                        <span class="text-sm ml-2 font-bold">EXPEDITED</span>
                    </div>
                    <div class = "flex items-center">
                        <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                            @if($protocol->review_type === '')✓@endif
                        </div>
                        <span class = "text-sm ml-2 font-bold">FULL BOARD</span>
                    </div>
                </div>
            </div>
        </div>
        <div class ="flex items-center border-t">
            <div class = "px-2 w-1/3 border-r">
                <p class = "text-sm font-bold text-l mb-2">Date:</p>
            </div>
        </div>
    </div>

    <p class = "text-sm font-arial mt-6">Details <span class = "font-bold">should be visible</span> in the research Methods (Chapter III) of the thesis /research proposal involving human participants, for the efficiency of the ERB review process. (To be filled up by the Researcher)</p>

    <p class = "text-sm font-arial mt-6">A. 1 Participant Selection</p>

    <p class = "text-sm font-arial mt-6 font-bold">1. Seniors</p>

    <div class ="flex flex-col border mt-6 mb-16">
        <div class ="flex items-stretch">
            <div class = "px-2 w-1/6 border-r">
                <p class = "text-sm font-bold text-center text-l mb-2">Checkbox</p>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-center font-bold text-l mb-2">Description</p>
            </div>
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2">Page Number where description is found</p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Informed Consent:</span> Ensure clarity and accessibility of consent forms, 
                                                                        considering cognitive and sensory impairments 
                                                                        (e.g., large fonts, simple language). <span class = "font-bold">How would you accomplish this?</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Cognitive Assessment:</span> Verify the capacity to consent and consider 
                                                                            involving legally authorized representatives if necessary.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
    </div>

    <div class = "page-break"></div>

    <!---Page 3-->
    <div class ="flex flex-col border mt-8">
        <div class ="flex items-stretch">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Physical Health Risks:</span> Evaluate potential health risks due to medical conditions or physical frailty.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Respect and Autonomy:</span> Ensure participants are not 
                                                                            coerced or unduly influenced due to age-related vulnerabilities.
                                                                            This must be explicit in the Methods text.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Privacy and Confidentiality:</span> Safeguard sensitive 
                                                                            health information and ensure respectful data handling. 
                                                                            Indicate the methods you would adopt to achieve this.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Intervention Suitability:</span> Confirm interventions are age-appropriate 
                                                                            and do not disproportionately burden seniors.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
    </div>

    <p class = "text-sm font-arial mt-6 font-bold">2. Minors (Include your details in each item)</p>

    <div class ="flex flex-col border mt-6 mb-4">
        <div class ="flex items-stretch">
            <div class = "px-2 w-1/6 border-r">
                <p class = "text-sm font-bold text-center text-l mb-2">Checkbox</p>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-center font-bold text-l mb-2">Description</p>
            </div>
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2">Page Number where description is found</p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Parental/Guardian Consent:</span> Require consent from parents or legal guardians, 
                                                                        and where appropriate, seek assent from the minors themselves.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Assent Process:</span> Tailor information for children’s 
                                                                            comprehension based on age, maturity, and developmental stage.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Protection from Harm:</span> Minimize psychological, 
                                                physical, and emotional risks. 
                                                Details on how should be specified.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Educational Balance:</span> Ensure participation does not interfere with schooling or 
                                                                            normal development. Detail on this is necessary.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Mandatory Reporting:</span> Ensure mechanisms are in place 
                                                                            to report suspected abuse or neglect.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Equitable Inclusion:</span> Avoid exploiting minors solely 
                                                    because they are an accessible population.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
    </div>

    <p class = "text-sm font-arial mt-2 font-bold">3. Persons with Disabilities (Include your details in each item)</p>

    <div class ="flex flex-col border mt-6 mb-4">
        <div class ="flex items-stretch">
            <div class = "px-2 w-1/6 border-r">
                <p class = "text-sm font-bold text-center text-l mb-2">Checkbox</p>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-center font-bold text-l mb-2">Description</p>
            </div>
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2">Page Number where description is found</p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Accessible Communication:</span> Adapt materials and processes for participants’ specific disabilities 
                                                                            (e.g., braille, sign language, or simplified text).</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
    </div>

    <div class = "page-break"></div>

    <!---Page 4-->
    
    <div class ="flex flex-col border mt-16 mb-4">
        <div class ="flex items-stretch">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Capacity to Consent:</span> Assess individual decision-making abilities 
                                                                            and involve legal representatives when necessary.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Risk Mitigation:</span> Address potential physical, emotional, or psychological harm.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Non-Discrimination:</span> Ensure the study promotes inclusion and avoids stigmatization or bias.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold"><span class = "font-bold">Reasonable Accommodations:</span> Provide necessary support, such as assistive devices or adaptive technologies.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Monitoring:</span> Implement mechanisms to monitor and address any adverse effects unique to the disability.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
    </div>

    <p class = "text-sm font-arial mt-2 font-bold">4. Persons Deprived of Liberty (include your details in each item).</p>

    <div class ="flex flex-col border mt-4 mb-4">
        <div class ="flex items-stretch">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Voluntary Participation:</span> Safeguard against coercion, considering the inherent power imbalances in detention or institutional settings. Indicate how?</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Equitable Selection:</span> Ensure inclusion is based on scientific reasons and, not convenience or vulnerability.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Privacy and Confidentiality:</span> Protect personal information, especially in environments with limited privacy.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold"><span class = "font-bold">Benefit and Risk Analysis:</span> Ensure the study offers direct benefits to participants or their communities and minimizes risks.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Independent Oversight:</span> Verify the absence of institutional conflicts of interest or undue influence.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Post-Study Support:</span> Address how findings or interventions will be accessible to participants after the study.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
    </div>

    <p class = "text-sm font-arial mt-2 font-bold">General Principles for All Groups:</p>

    <div class ="flex flex-col border mt-4 mb-4">
        <div class ="flex items-stretch">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Ethical Justification:</span> Clearly outline the necessity and appropriateness of including vulnerable populations.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Scientific Validity:</span> Confirm that the study design is rigorous and ethically justifiable.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Risk-Benefit Assessment:</span> Ensure that risks are minimal, and benefits outweigh potential harm.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t border-b">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Cultural Sensitivity:</span> Consider cultural norms and values relevant to each group.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">Compensation:</span> Ensure fair and non-coercive incentives or reimbursements.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
    </div>

    <!---page 5-->

    <p class = "text-sm font-arial mt-2 font-bold">A. 2 Process of Participant Recruitment:</p>

    <div class ="flex flex-col border mt-4 mb-4">
        <div class ="flex items-stretch">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2">Include how potential participants will be recruited, contacted, screened, and registered in the study described.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2">Specify conditions and characteristics applicable to the identification and selection of participants in the study and the conditions necessary for eligible persons to be included in the Inclusion criteria.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2">Specify whether there are any groups of people who might be more susceptible to the risks presented by the study and who therefore ought to be excluded from the research in the selection of participants.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2">Indicate if any, special vulnerability among prospective study participants that might be relevant to evaluating the risk of participation considered.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2">State explicitly possible indications of special measures to be implemented to protect the vulnerability of study participants.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2">State explicitly that the procedures for informing participants about the study and methods and for obtaining consent are clearly described. Indicate how you would do it.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
    </div>

    <p class = "text-sm font-arial mt-2 font-bold">B. Describe the sample size and suitable determination procedure based on your research design.</p>

    <p class = "text-sm font-arial mt-6 mb-8 w-full flex flex-wrap">1. <!---{{ $protocol->mcuerb_code }}--> </p>
    <p class = "text-sm font-arial mt-6 mb-8 w-full flex flex-wrap">2. <!---{{ $protocol->mcuerb_code }}--> </p>

    <p class = "text-sm font-arial mt-2 font-bold">C. Site of data Collection (interview online or in-person)</p>

    <div class ="flex flex-col border mt-4 mb-20">
        <div class ="flex items-stretch">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2">Specify measures to ensure the anonymity and confidentiality of the study participants and data collected 
                                                clearly indicated: Indicate how you would achieve this.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
    </div>

    <div class = "page-break"></div>

    <!---page 6-->
    <div class ="flex flex-col border mt-4 mb-4">
        <div class ="flex items-stretch">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2">Include procedures regarding confidentiality of the data, 
                                                including how confidentiality will be preserved during transmission, use, and storage of the data and
                                                the names of persons or positions responsible for technical and administrative 
                                                stewardship responsibilities properly discussed.</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-3/4 border-r">
                <p class = "text-sm text-l mb-2">Clearly include the procedures on how the final disposition of records, data, computer files, and specimens will be, 
                                                including the location for any relevant information to be stored discussed</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class = "px-2 w-1/3">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
    </div>

    <p class = "text-sm font-arial mt-6 font-bold">Signature</p>

    <p class = "text-sm font-arial mt-2 w-full flex flex-wrap"><!---{{ $protocol->mcuerb_code }}--> </p>

    <p class = "text-sm font-arial mt-6 font-bold">Thesis Adviser</p>

    <p class = "text-sm font-arial mt-6 font-bold">Noted by:</p>

    <p class = "text-sm font-arial mt-2 w-full flex flex-wrap"><!---{{ $protocol->mcuerb_code }}--> </p>

    <p class = "text-sm font-arial mt-2 font-bold">Research Coordinator</p>
</body>
</html>
