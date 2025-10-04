<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FORM-2J</title>
    @vite('resources/css/app.css') {{-- loads Tailwind --}}
</head>
<style>
    .page-break {
        break-before: page;
    }
</style>
<body class="p-8 text-sm font-arial">
    <h1 class="text-xl font-times font-black text-center mb-6">MCUERB FORM 2J Informed Consent Evaluation Checklist</h1>

    <x-formbanner>MCUERB FORM 2J Informed Consent Evaluation Checklist</x-formbanner>

    <h1 class = "text-base font-bold text-center underline mt-2 mb-4">STUDY PROTOCOL INFORMED CONSENT EVALUATION CHECKLIST</h1>

    <div class ="flex flex-col border">
        <div class = "w-full bg-[#9ca3af]">
            <p class = "text-xs font-bold text-center m-1">TO BE FILLED UP</p>
        </div>
        <div class = "w-full border-t">
            <p class = "text-xs font-bold text-L m-1">STUDY PROTOCOL INFORMATION</p>
        </div>
        <div class ="flex items-center border-t">
            <div class = "px-2 w-1/3 border-r">
                <p class = "text-xs font-bold text-l mb-2">MCUERB CODE:</p>
            </div>
            <p class = "text-xs text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-1/3 border-r">
                <p class = "text-xs font-bold text-l mb-2">Study Protocol Title</p>
            </div>
            <p class = "text-xs text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-1/3 border-r">
                <p class = "text-xs font-bold text-l mb-2">Principal Investigator (PI)</p>
            </div>
            <p class = "text-xs text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-1/3 border-r">
                <p class = "text-xs font-bold text-l mb-2">Co-Investigators</p>
            </div>
            <p class = "text-xs text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-1/3 border-r">
                <p class = "text-xs font-bold text-l mb-2">PI Contact Numbers</p>
            </div>
            <p class = "text-xs text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-1/3 border-r">
                <p class = "text-xs font-bold text-l mb-2">PI Email Address</p>
            </div>
            <p class = "text-xs text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-1/3 border-r">
                <p class = "text-xs font-bold text-l mb-2">Study Protocol Submission Date</p>
            </div>
            <p class = "text-xs text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-1/3 border-r">
                <p class = "text-xs font-bold text-l mb-2">Study Protocol Review Date</p>
            </div>
            <p class = "text-xs text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-full">
                <p class = "text-xs font-bold text-center text-l m-2">PROTOCOL EVALUATION FORM</p>
            </div>
        </div>
        <div class = "w-full bg-[#9ca3af] border-t">
            <p class = "text-xs font-bold text-center m-1">TO BE FILLED UP BY THE NON-SCIENTIST MEMBER</p>
        </div>
        <div class = "flex items-stretch border-t">
            <div class = "px-2 w-5/6 border-r">
                <p class = "text-xs text-center text-l">GUIDE QUESTIONS</p>
            </div>
            <div class = "px-2 w-20 border-r">
                <p class = "text-xs text-center text-l">YES</p>
            </div>
            <div class = "px-2 w-20 border-r">
                <p class = "text-xs text-center text-l">NO</p>
            </div>
            <div class = "px-2 w-1/2">
                <p class = "text-xs text- font-bold">COMMENTS</p>
            </div>
        </div>
        <div class = "flex items-stretch border-t">
            <div class = "px-2 w-5/6 border-r">
                <p class = "text-xs text-center text-l">Is the manner in which potential participants will be recruited, contacted, screened, and registered in the study described?</p>
            </div>
            <div class="px-2 w-20 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-20 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-1/2">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class = "flex items-stretch border-t">
            <div class = "px-2 w-5/6 border-r">
                <p class = "text-xs text-center text-l">Are conditions and characteristics applicable to the identification and selection of participants in the study and the 
                    conditions necessary for eligible persons to be included discussed? (Inclusion criteria)</p>
            </div>
            <div class="px-2 w-20 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-20 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-1/2">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class = "flex items-stretch border-t">
            <div class = "px-2 w-5/6 border-r">
                <p class = "text-xs text-center text-l">Are there any groups of people who might be 
                    more susceptible to the risks presented by the study and who therefore ought to be excluded from the research?</p>
            </div>
            <div class="px-2 w-20 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-20 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-1/2">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class = "flex items-stretch border-t">
            <div class = "px-2 w-5/6 border-r">
                <p class = "text-xs text-center text-l">Has any special vulnerability among prospective study participants 
                    that might be relevant to evaluating the risk of participation taken into account?</p>
            </div>
            <div class="px-2 w-20 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-20 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-1/2">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class = "flex items-stretch border-t">
            <div class = "px-2 w-5/6 border-r">
                <p class = "text-xs text-center text-l">Is there an indication of special measures to be 
                    implemented to protect vulnerability of study participants?</p>
            </div>
            <div class="px-2 w-20 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-20 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-1/2">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class = "flex items-stretch border-t">
            <div class = "px-2 w-5/6 border-r">
                <p class = "text-xs text-center text-l">Are procedures for informing participants 
                    about study and methods and for obtaining consent clearly described?</p>
            </div>
            <div class="px-2 w-20 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-20 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-1/2">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class = "flex items-stretch border-t">
            <div class = "px-2 w-5/6 border-r">
                <p class = "text-xs text-center text-l">Are measures to ensure anonymity and 
                    confidentiality of the study participants and data collected clearly indicated?</p>
            </div>
            <div class="px-2 w-20 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-20 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-1/2">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
    </div>

    <div class = "page-break"></div>

    <!---page 2-->

    <div class = "flex flex-col border">
        <div class = "flex items-stretch">
            <div class = "px-2 w-5/6 border-r">
                <p class = "text-xs text-center text-l">Are procedures regarding confidentiality of the data, including how confidentiality will be preserved during transmission, use and storage of the data and the names of persons or positions responsible 
                    for technical and administrative stewardship responsibilities properly discussed?</p>
            </div>
            <div class="px-2 w-20 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-20 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-1/2">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class = "flex items-stretch border-t">
            <div class = "px-2 w-5/6 border-r">
                <p class = "text-xs text-center text-l">Are procedures on how final disposition of records, data, 
                    and computer files, and specimens will be, including location for any relevant 
                    information to be stored discussed?</p>
            </div>
            <div class="px-2 w-20 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-20 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class = "px-2 w-1/2">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
    </div>

    <div class = "mt-4"></div>
    <div class = "flex flex-col border">
        <div class = "w-full">
            <p class = "text-xs font-bold text-center m-1">Summary of Recommendations:</p>
        </div>
        <div class = "w-full border-t">
            <p class = "text-xs font-bold text-center m-1"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "w-full border-t">
            <p class = "text-xs font-bold text-center m-1">Recommended Action:</p>
        </div>
        <div class ="flex items-stretch border-t pt-1 pb-1">
            <div class = "flex flex-col w-full items-start px-2">
                <div class = "flex items-center pb-2">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-xs ml-2">Approve</span>
                </div>
                <div class = "flex items-center pb-2">
                    <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                        @if($protocol->review_type === '')✓@endif
                    </div>
                    <span class="text-xs ml-2">Disapprove</span>
                </div>
            </div>
        </div>
        <div class ="flex items-center border-b">
            <div class = "w-full border-t">
                <p class = "text-xs font-bold text-center m-1">Justification for Recommended Action:</p>
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class ="flex items-center">
            <div class = "w-2/5">
                <p class = "text-xs font-bold text-l m-1">Lay Member/Non-Scientist Member</p>
            </div>
            <p class = "text-xs text-l m-1">Signature: ______________________________</p>
        </div>
        <div class ="flex items-center">
            <div class = "w-2/5">
                <p class = "text-xs text-l ml-1 mt-4">Date:<!---{{ $protocol->mcuerb_code }}--></p>
            </div>
            <p class = "text-xs text-l m-1">Name: <!---{{ $protocol->mcuerb_code }}--></p>
        </div>
    </div>
</body>
</html>