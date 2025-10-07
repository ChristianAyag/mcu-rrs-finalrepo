<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FORM-5(E)</title>
    @vite('resources/css/app.css') {{-- loads Tailwind --}}
</head>
<style>
    .page-break {
        break-before: page;
    }
</style>
<body class="p-8 text-sm font-arial">
    <h1 class="text-xl font-times font-black text-center mb-6">MCUERB FORM 5 (E) Document History</h1>

    <x-formbanner>MCUERB FORM 5 (E) Document History</x-formbanner>

    <h1 class = "text-base font-bold text-center underline mb-4">DOCUMENT HISTORY</h1>

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

    <div class ="flex flex-col border mt-12">
        <div class = "flex items-stretch">
            <div class = "px-2 w-1/5 border-r">
                <p class = "text-sm font-bold text-l mb-2">Version</p>
            </div>
            <div class = "px-2 w-1/5 border-r">
                <p class = "text-sm font-bold text-l mb-2">Date</p>
            </div>
            <div class = "px-2 w-full">
                <p class = "text-sm font-bold text-l mb-2">Describe what is submitted from initial submission and describe the main change/revision</p>
            </div>
        </div>
        <div class = "flex items-stretch">
            <div class = "px-2 w-1/5 border-r">
                <p class = "text-sm font-bold text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
            <div class = "px-2 w-1/5 border-r">
                <p class = "text-sm font-bold text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
            <div class = "px-2 w-full">
                <p class = "text-sm font-bold text-l mb-2"><!---{{ $protocol->mcuerb_code }}--></p>
            </div>
        </div>
    </div>
</body>
</html>