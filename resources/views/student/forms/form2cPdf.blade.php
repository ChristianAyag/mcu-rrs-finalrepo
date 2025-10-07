<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FORM-2C</title>
    @vite('resources/css/app.css') {{-- loads Tailwind --}}
</head>
<style>
    .page-break {
        break-before: page;
    }
</style>
<body class="p-8 text-sm font-arial">
    <h1 class="text-xl font-times font-black text-center mb-6">MCUERB FORM 2(C): INFORMED CONSENT FORM</h1>

    <x-formbanner>MCUERB FORM 2(C): Informed Consent Form</x-formbanner>

    <h1 class = "text-base font-bold text-center underline mb-4">INFORMED CONSENT FORM</h1>

    <p class = "text-sm font-bold text-center m-1">Part 1: INFORMATION</p>

    <div class ="flex flex-col border">
        <div class = "w-full">
            <p class = "text-sm font-bold text-center m-1">TO BE FILLED OUT BY PRINCIPAL INVESTIGATOR (PI)</p>
        </div>
        <div class ="flex items-center border-t">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l mb-2">MCUERB CODE: <p class ="text-sm text-l italic mb-2" >(To be filled out by MCUERB Staff)</p></p>
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
                <p class = "text-sm font-bold text-l mb-2">Institution</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l mb-2">Address of Institution</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
        <div class = "flex items-center border-t">
            <div class = "px-2 w-1/4 border-r">
                <p class = "text-sm font-bold text-l mb-2">Ethics Review Board Contact</p>
            </div>
            <p class = "text-sm text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
        </div>
    </div>

    <p class = "text-sm font-bold text-center mt-3">Part II: INTRODUCTION</p>

    <p class = "text-sm w-full flex flex-wrap text-justify mt-3">I am / We are (3rd year/4th year) students of the (College). (OR)
                                                                I am / We are undertaking a research on (topic of research) ____________________. (OR)
                                                                I am Dr. / Mr. / Ms. ____________________ working in the (College / Department) _____________________as (Designation) ____________________.</p>

    <p class = "text-sm w-full flex flex-wrap text-justify mt-3">This form provides you information and invites you to be part of this research study. You may discuss the research with anyone you are comfortable with before making a decision to participate or not.</p>

    <p class = "text-sm w-full flex flex-wrap text-justify mt-3">This form may contain certain words that you not clearly understand. Please do not hesitate to inquire from me/us at any point if you have any questions or need clarification. If any questions/doubts arise at a later time, you may inquire from me/us at any time during this research.</p>

    <div class = "page-break"></div>
    <!----page 2-->

    <p class = "text-sm font-bold text-center mt-3">Part III: RESEARCH STUDY</p>

    <p class = "text-sm font-bold text-center mt-2">Description and Purpose of the Research:</p>

    <p class = "text-sm w-full flex flex-wrap italic text-justify mt-2">Briefly describe background of the problem, justification and the objectives of the research in layman’s terms.</p>

    <p class = "text-sm w-full flex flex-wrap underline text-justify mt-2"><!---{{ $protocol->mcuerb_code }}--></p>

    <p class = "text-sm font-bold text-center mt-4">Procedures of Research:</p>

    <p class = "text-sm w-full flex flex-wrap italic text-justify mt-2">In layman’s terms, give a concise description of the procedures in the exact order in a step-by-step manner. Include information on the assessments, tests, measurements that will be performed. Please indicate which procedures are routine and which are experimental or research. Participants should understand clearly what to expect and what is expected of them.</p>

    <p class = "text-sm w-full flex flex-wrap underline text-justify mt-2"><!---{{ $protocol->mcuerb_code }}--></p>

    <p class = "text-sm font-bold text-center mt-4">Participant selection and voluntary:</p>

    <p class = "text-sm w-full flex flex-wrap italic text-justify mt-2">Briefly describe how and from where participants are selected for your study. Justify why they were selected.</p>

    <p class = "text-sm w-full flex flex-wrap underline text-justify mt-2"><!---{{ $protocol->mcuerb_code }}--></p>

    <p class = "text-sm font-bold text-center mt-4">Participation in the Study:</p>

    <p class = "text-sm w-full flex flex-wrap italic text-justify mt-2">Reiterate that their participation in the study is VOLUNTARY.</p>

    <p class = "text-sm w-full flex flex-wrap underline text-justify mt-2"><!---{{ $protocol->mcuerb_code }}--></p>

    <p class = "text-sm font-bold text-center mt-4">Duration:</p>

    <p class = "text-sm w-full flex flex-wrap italic text-justify mt-2">Mention the estimated duration of the research study; specify dates if possible.</p>

    <p class = "text-sm w-full flex flex-wrap underline text-justify mt-2"><!---{{ $protocol->mcuerb_code }}--></p>

    <p class = "text-sm font-bold text-center mt-4">Potential Risks/Hazards/Discomforts:</p>

    <p class = "text-sm w-full flex flex-wrap italic text-justify mt-2">If there are any risks/hazards/discomforts involved in the research study, mention all clearly.</p>

    <p class = "text-sm w-full flex flex-wrap underline text-justify mt-2"><!---{{ $protocol->mcuerb_code }}--></p>

    <p class = "text-sm font-bold text-center mt-4">Potential Benefits:</p>

    <p class = "text-sm w-full flex flex-wrap italic text-justify mt-2">If there are any potential benefits directly or indirectly to the participants, to practice, policy, research, theory, and/or to the community as a whole as a result of your research study, all benefits should be mentioned.</p>

    <p class = "text-sm w-full flex flex-wrap underline text-justify mt-2"><!---{{ $protocol->mcuerb_code }}--></p>

    <p class = "text-sm font-bold text-center mt-4">Management of Study-Related Injuries/Harms</p>

    <p class = "text-sm w-full flex flex-wrap italic text-justify mt-2">Describe how occurrence of study related injuries/harms (physical, psychological, mental, and social) would be managed and addressed.</p>

    <p class = "text-sm w-full flex flex-wrap underline text-justify mt-2"><!---{{ $protocol->mcuerb_code }}--></p>

    <p class = "text-sm font-bold text-center mt-4">Compensation:</p>

    <p class = "text-sm w-full flex flex-wrap italic text-justify mt-2">If the participants are compensated either monetarily or otherwise (e.g., tokens, refreshments), please mention the details, including any payment to the participant indicating the amount or details of the token(s) if necessary, when it would be paid/given and any conditions attached to it. If no compensations will be given, please mention this as well.</p>

    <p class = "text-sm w-full flex flex-wrap underline text-justify mt-2"><!---{{ $protocol->mcuerb_code }}--></p>

    <p class = "text-sm font-bold text-center mt-4">Confidentiality and Anonymity:</p>

    <!---page 3-->

    <p class = "text-sm w-full flex flex-wrap italic text-justify mt-2">Briefly describe what measures are taken to ensure the participants’ confidentiality by participating in your research study.</p>

    <p class = "text-sm w-full flex flex-wrap underline text-justify mt-2"><!---{{ $protocol->mcuerb_code }}--></p>

    <p class = "text-sm font-bold text-center mt-4">Right to Refuse or Withdraw:</p>

    <p class = "text-sm w-full flex flex-wrap italic text-justify mt-2">Include a statement informing about their right to withdraw from participation or refuse to participate.</p>

    <p class = "text-sm w-full flex flex-wrap underline text-justify mt-2"><!---{{ $protocol->mcuerb_code }}--></p>

    <p class = "text-sm font-bold text-center mt-4">Whom to Contact:</p>

    <p class = "text-sm w-full flex flex-wrap italic text-justify mt-2">Provide details of ALL investigators that should be contacted in the following format:</p>

    <p class = "text-sm text-center mt-4">Name with title:</p>

    <p class = "text-sm w-full flex flex-wrap underline text-justify mt-2"><!---{{ $protocol->mcuerb_code }}--></p>

    <p class = "text-sm text-center mt-4">Institution:</p>

    <p class = "text-sm w-full flex flex-wrap underline text-justify mt-2"><!---{{ $protocol->mcuerb_code }}--></p>

    <p class = "text-sm text-center mt-4">Contact numbers:</p>

    <p class = "text-sm w-full flex flex-wrap underline text-justify mt-2"><!---{{ $protocol->mcuerb_code }}--></p>

    <p class = "text-sm text-center mt-4">Email Addresses:</p>

    <p class = "text-sm w-full flex flex-wrap underline text-justify mt-2"><!---{{ $protocol->mcuerb_code }}--></p>

    <p class = "text-sm font-bold text-center mt-4">Approval by the MCUERB:</p>

    <p class = "text-sm w-full flex flex-wrap italic text-justify mt-2">Inform the participants that this study protocol/proposal has been reviewed and approved by the MCU-ERB. The committee is a group of scientific and non–scientific individuals who perform the initial and ongoing ethical review of the research with the study participants’/patients’ welfare in mind.</p>

    <p class = "text-sm w-full flex flex-wrap underline text-justify mt-2"><!---{{ $protocol->mcuerb_code }}--></p>

    <p class = "text-sm font-bold text-center mt-4">Where to Contact MCUERB:</p>

    <p class = "text-sm w-full flex flex-wrap italic text-justify mt-2">Indicate the Contact information of the MCUERB.</p>

    <p class = "text-sm w-full flex flex-wrap underline text-justify mt-2"><!---{{ $protocol->mcuerb_code }}--></p>

    <p class = "text-sm font-bold text-center mt-4 mb-2">Part IV: CERTIFICATE OF CONSENT</p>

    <div class = "flex flex-col border">
        <div class ="flex items-stretch">
            <div class = "px-2 w-2/3 border-r">
                <p class = "text-sm font-bold text-center text-l mb-2">To be completed by the Study Participants</p>
            </div>
            <div class = "px-2 w-1/6 border-r">
                <p class = "text-sm text-center font-bold text-l mb-2">YES</p>
            </div>
            <div class = "px-2 w-1/6">
                <p class = "text-sm font-bold text-center mb-2">NO</p>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class = "px-2 w-2/3 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">1. Have you read the information sheet? (Please keep a copy for yourself)</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-1/6 flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class = "px-2 w-2/3 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">2. Have you had an opportunity to discuss this study and ask any questions?</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-1/6 flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class = "px-2 w-2/3 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">3. Have you had satisfactory answers to all your questions?</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-1/6 flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class = "px-2 w-2/3 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">4. Have you received enough information about the study?</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-1/6 flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class = "px-2 w-2/3 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">5. Do you fully understand the full nature and procedure of the study?</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-1/6 flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class = "px-2 w-2/3 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">6. Do you understand that you are free to withdraw from the study at any time, without having to give a reason and without affecting your future medical care?</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-1/6 flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
        </div>
    </div>

    <div class = "page-break"></div>

    <div class = "flex flex-col border">
        <div class ="flex items-stretch border-t">
            <div class = "px-2 w-2/3 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">7. Sections of your medical notes, may be examined by the investigator / members of the research team. 
                                                                            All personal details will be treated as STRICTLY CONFIDENTIAL. 
                                                                            Do you give your permission for the access to your records? (as applicable)</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-1/6 flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class = "px-2 w-2/3 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">8. Do you allow that the whole interview process will be audio-recorded? (as applicable)</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-1/6 flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class = "px-2 w-2/3 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">9. Have you had sufficient time to come to your decision?</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-1/6 flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
        </div>
        <div class ="flex items-stretch border-t">
            <div class = "px-2 w-2/3 border-r">
                <p class = "text-sm text-l mb-2"><span class = "font-bold">10. Do you voluntarily and freely given without influence, force or intimidation 
                                                                            from any person agree to take part in this study?</p>
            </div>
            <!---dito ka maglagay ng backend mo for page number-->
            <div class="px-2 w-1/6 border-r flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
            <div class="px-2 w-1/6 flex justify-center items-center">
                <!---edit mo yung variable at condition-->
                <div class="w-4 h-4 border border-black flex items-center justify-center text-[10px] leading-none">
                    @if($protocol->review_type === 'FULL BOARD')✓@endif
                </div>
            </div>
        </div>
    </div>

    <p class = "text-sm w-full flex flex-wrap text-justify mt-2">I have read the foregoing information, or it has been read to me. 
                                                                        I have had the opportunity to ask questions about it and any questions 
                                                                        that I have asked have been answered to my satisfaction. 
                                                                        I consent voluntarily to participate as a participant in this research.</p>

    <p class = "text-sm w-full text-center mt-2">Name of Participant (optional) __________________</p>
    <p class = "text-sm w-full text-center mt-2">Signature of Participant ________________________</p>
    <p class = "text-sm w-full text-center mt-2">Date ________________________________________</p>
    
    <p class = "text-sm font-bold text-l mt-4 mb-2">Part V: TO BE COMPLETED BY THE INVESTIGATOR</p>

    <p class = "text-sm w-full flex flex-wrap text-justify mt-2">I have explained the study to the above study participants and he/ she has indicated 
                                                                his/her willingness to take part in my research study..</p>

    <p class = "text-sm w-full text-center mt-2">_______________________</p>
    <p class = "text-sm w-full text-center mt-2">Signature over Printed Name of Investigator</p>
    <p class = "text-sm w-full text-center mt-2">_______________________</p>
    <p class = "text-sm w-full text-center mt-2">Date</p>

    <p class = "text-sm font-bold text-l mt-4 mb-2">Note: The Principal Investigator (s) must keep a copy of the signed, 
                                                    dated consent form and a copy must be given to the study participant.</p>
    
    <p class = "text-sm font-bold text-l mt-4 mb-2">Noted by the Research Adviser:</p>
    <p class = "text-sm text-l mt-4 mb-2">Date and signature:</p>

    <p class = "text-sm font-bold text-l mt-4 mb-2">Approved by the Research Coordinator:</p>
    <p class = "text-sm text-l mt-4 mb-2">Date and signature:</p>
</body>
</html>