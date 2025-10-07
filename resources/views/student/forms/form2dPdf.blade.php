<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FORM-2D</title>
    @vite('resources/css/app.css') {{-- loads Tailwind --}}
</head>
<style>
    .page-break {
        break-before: page;
    }
</style>
<body class="p-8 text-sm font-arial">
    <h1 class="text-xl font-times font-black text-center mb-6">MCUERB FORM 2(D) Informed Consent Checklist for Principal Investigator</h1>

    <x-formbanner>MCUERB FORM 2(D) Informed Consent Checklist for Principal Investigator</x-formbanner>

    <h1 class = "text-base font-bold text-center underline mb-4">INFORMED CONSENT CHECKLIST FOR PRINCIPAL INVESTIGATOR</h1>

    <div class ="flex flex-col border">
        <div class = "w-full bg-[#9ca3af]">
            <p class = "text-sm font-bold text-center m-1">TO BE FILLED OUT BY MCUERB STAFF</p>
        </div>
        <div class = "w-full border-t">
            <p class = "text-sm font-bold text-L m-1">STUDY PROTOCOL INFORMATION</p>
        </div>
        <div class ="flex items-center border-t">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l mb-2">MCUERB CODE:</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l mb-2">Study Protocol Title</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l mb-2">Principal Investigator (PI)</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l mb-2">Co-Investigators</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l mb-2">PI Contact Numbers</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l mb-2">PI Email Address</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l mb-2">Study Protocol Submission Date</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l mb-2">Study Protocol Review Date</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
    </div>

    <p class="text-sm w-full text-justify mt-2">
                                                Please indicate <span class="font-bold">YES</span> or 
                                                <span class="font-bold">NO</span> in the space provided whether or not the 
                                                informed consent form (ICF) addresses the specified component or 
                                                <span class="font-bold">N/A</span> if Not Applicable. 
                                                To facilitate the evaluation of the assessment point, indicate the page and paragraph where this information can be found.
    </p>

    <div class = "flex flex-col border">
        <div class = "flex items-stretch bg-[#9ca3af]">
            <div class = "w-full flex items-center border-r">
                <p class = "text-sm font-bold text-center m-1">TO BE FILLED UP BY PRINCIPAL INVESTIGATOR</p>
            </div>
            <p class = "text-xs font-bold text-center m-1">Page and paragraph where component is found</p>
        </div>
        <div class = "flex items-stretch border-t">
            <div class = "px-2 w-5/6 border-r">
                
            </div>
            <div class = "px-2 w-16 border-r">
                <p class = "text-xs text-center text-l mb-2">YES</p>
            </div>
            <div class = "px-2 w-16 border-r">
                <p class = "text-xs text-center text-l mb-2">NO</p>
            </div>
            <div class = "px-2 w-16 border-r">
                <p class = "text-xs text-center text-l mb-2">N/A</p>
            </div>
            <div class = "px-2 w-1/2">
                <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
        <div class = "flex items-stretch border-t">
            <div class = "px-2 w-5/6 border-r">
                <p class = "text-sm text-l mb-2">• Statement indicating the study involves research</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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
                <p class = "text-sm text-l mb-2">• Statement indicating clearly the purpose of the study</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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
                <p class = "text-sm text-l mb-2">• Explanation to the study participants why they were included in the study</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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
                <p class = "text-sm text-l mb-2">• Provisions ensuring that the study participant’s participation in the study is voluntary</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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

    <div class="page-break"></div>

    <!---page 2--->

    <div class = "flex flex-col border">
        <div class = "flex items-stretch">
            <div class = "px-2 w-5/6 border-r">
                <p class = "text-sm text-l mb-2">• Provisions ensuring that the study participant’s participation in the study is voluntary</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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
                <p class = "text-sm text-l mb-2">• Statement indicating that participation may be withdrawn anytime without penalty or loss of benefit to which the participant is entitled</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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
                <p class = "text-sm text-l mb-2">• Statement explaining the nature and procedure of the study</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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
                <p class = "text-sm text-l mb-2">• Disclosure of the anticipated risks and benefits to the study participants disclosed?</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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
                <p class = "text-sm text-l mb-2">• Statements indicating the potential benefits to the community or to society, or contributions to scientific knowledge stated</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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
                <p class = "text-sm text-l mb-2">• Provisions for the mitigation of risks in the protocol consistent with what is in the ICF?</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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
                <p class = "text-sm text-l mb-2">• Lists of alternative procedure(s) or course(s) of treatment that may be available to the study participant and their important potential benefits and risks?</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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
                <p class = "text-sm text-l mb-2">• Statement informing study participant of his/her responsibilities</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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
                <p class = "text-sm text-l mb-2">• Statement indicating if there are any anticipated expenses to the study participants in the course of the study</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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
                <p class = "text-sm text-l mb-2">• Statement indicating if there is a compensation and/or treatment available to the study participants in the event of study-related injury</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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
                <p class = "text-sm text-l mb-2">• Statement indicating if there is a compensation and/or treatment available to the study participants in the event of study-related injury</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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
                <p class = "text-sm text-l mb-2">• Statement that the records identifying the participant will be kept confidential and will not be made publicly available, 
                                                    to the extent permitted by law; and that the identity of the participant will 
                                                    remain confidential in the event the study results are published; including 
                                                    limitations to the investigator’s ability to guarantee confidentiality</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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

    <!---page 3-->

    <div class = "flex flex-col border">
        <div class = "flex items-stretch">
            <div class = "px-2 w-5/6 border-r">
                <p class = "text-sm text-l mb-2">• Description of data protection plan and details about storage 
                                                    (including who has access to the study-related documents, 
                                                    how long identifying data will be stored, and manner of storage)</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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
                <p class = "text-sm text-l mb-2">• Expected duration of the subject’s participation in the study specified</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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
                <p class = "text-sm text-l mb-2">• Approximate number of study subjects stated</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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
                <p class = "text-sm text-l mb-2">• Statement that the MCUERB has approved the study, and may be reached through the 
                                                    following contact for information regarding rights of study participants, including grievances and complaints
                                                    Email Address: erb@mcu.edu.ph</p>
                <p class = "text-sm text-l mb-2">Manila Central University Ethics Review Board</p>
                <p class = "text-sm text-l mb-2">Email Address: erb@mcu.edu.ph</p>
                <p class = "text-sm text-l mb-2">Contact Number: (02) 8364 1071</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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
                <p class = "text-sm text-l mb-2">• Manifestation that the language and presentation of the information to be conveyed appropriate to the study participant</p>
                <p class = "text-sm text-l mb-2">(Consider the level of complexity and the need for translation into a language/dialect other than English.)</p>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-16 border-r flex justify-center items-center">
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

    <p class = "text-sm font-bold text-l mt-12 mb-2">Noted by the Research Adviser:</p>
    <p class = "text-sm text-l mt-4 mb-2">Date and signature:</p>

    <p class = "text-sm font-bold text-l mt-4 mb-2">Approved by the Research Coordinator:</p>
    <p class = "text-sm text-l mt-4 mb-2">Date and signature:</p>
</body>
</html>