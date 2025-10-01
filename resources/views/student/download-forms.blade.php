@section('title', 'Download Forms')
<x-student-layout>
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            DOWNLOAD FORMS
        </h2>
        <br>
        <div class="p-6 max-md:p-0 space-y-10">
            <div>
                <h2 class="text-xl font-semibold mb-4">FORMS</h2>
                <div class="grid max-md:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @if ($assignedForms->isEmpty())
                        <p class="text-gray-500">⚠ No forms have been assigned to you yet.</p>
                    <div class="grid max-md:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @else
                        @foreach($assignedForms as $form)
                            <a href="{{ url( $form->form_view) }}">
                                <div class="card bg-lightgray p-4 rounded-lg flex justify-between items-center cursor-pointer">
                                    <div class="block items-center flex-wrap gap-[10px]">
                                        <h2 class="text-xl max-md:text-[18px] font-semibold">
                                            {{ $form->form_code }}
                                        </h2>
                                        <p class="text-xs font-medium">
                                            {{ $form->form_name }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-student-layout>

<!----
                    <a href="{{ url('student/forms/form2a') }}">
                        <div class="card bg-lightgray p-4 rounded-lg flex justify-between items-center cursor-pointer">
                            <div class="block items-center flex-wrap gap-[10px]">
                                <h2 class="text-xl max-md:text-[18px] font-semibold">FORM 2(A)</h2>
                                <p class="text-xs font-medium">STUDY PROTOCOL REVIEW CHECKLIST</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('student/forms/form2b') }}">
                        <div class="card bg-lightgray p-4 rounded-lg flex justify-between items-center">
                            <div class="block items-center flex-wrap gap-[10px]">
                                <h2 class="text-xl max-md:text-[18px] font-semibold">FORM 2(B)</h2>
                                <p class="text-xs font-medium">APPLICATION FOR INITIAL REVIEW</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('student/forms/form2c') }}">
                        <div class="card bg-lightgray p-4 rounded-lg flex justify-between items-center">
                            <div class="block items-center flex-wrap gap-[10px]">
                                <h2 class="text-xl max-md:text-[18px] font-semibold">FORM 2(C)</h2>
                                <p class="text-xs font-medium">INFORMED CONSENT FORM</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('student/forms/form2d') }}">
                        <div class="card bg-lightgray p-4 rounded-lg flex justify-between items-center">
                            <div class="block items-center flex-wrap gap-[10px]">
                                <h2 class="text-xl max-md:text-[18px] font-semibold">FORM 2(D)</h2>
                                <p class="text-xs font-medium">INFORMED CONSENT FORM FOR P.I.</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('student/forms/form5e') }}">
                        <div class="card bg-lightgray p-4 rounded-lg flex justify-between items-center">
                            <div class="blockitems-center flex-wrap gap-[10px]">
                                <h2 class="text-xl max-md:text-[18px] font-semibold">FORM 5(E)</h2>
                                <p class="text-xs font-medium">DOCUMENT HISTORY</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('student/forms/form2e') }}">
                        <div class="card bg-lightgray p-4 rounded-lg flex justify-between items-center">
                            <div class="block items-center flex-wrap gap-[10px]">
                                <h2 class="text-xl max-md:text-[18px] font-semibold">FORM 2(E)</h2>
                                <p class="text-xs font-medium">PROTOCOL EVALUATION CHECKLIST</p>
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="card bg-lightgray p-4 rounded-lg flex justify-between items-center">
                            <div class="block items-center flex-wrap gap-[10px]">
                                <h2 class="text-xl max-md:text-[18px] font-semibold">FORM 2(J)</h2>
                                <p class="text-xs font-medium">INFORMED CONSENT EVALUATION CHECKLIST</p>
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="card bg-lightgray p-4 rounded-lg flex justify-between items-center">
                            <div class="block items-center flex-wrap gap-[10px]">
                                <h2 class="text-xl max-md:text-[18px] font-semibold">FORM 3(A)</h2>
                                <p class="text-xs font-medium">RESUBMISSION</p>
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="card bg-lightgray p-4 rounded-lg flex justify-between items-center">
                            <div class="block items-center flex-wrap gap-[10px]">
                                <h2 class="text-xl max-md:text-[18px] font-semibold">FORM 3(B)</h2>
                                <p class="text-xs font-medium">REVIEW OF RESUBMITTED STUDY PROTOCOL</p>
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="card bg-lightgray p-4 rounded-lg flex justify-between items-center">
                            <div class="block items-center flex-wrap gap-[10px]">
                                <h2 class="text-xl max-md:text-[18px] font-semibold">FORM 3(D)</h2>
                                <p class="text-xs font-medium">APPLICATION FOR REVIEW OF AMENDMENT</p>
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="card bg-lightgray p-4 rounded-lg flex justify-between items-center">
                            <div class="block items-center flex-wrap gap-[10px]">
                                <h2 class="text-xl max-md:text-[18px] font-semibold">FORM 3(E)</h2>
                                <p class="text-xs font-medium">AMENDMENTS</p>
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="card bg-lightgray p-4 rounded-lg flex justify-between items-center">
                            <div class="block items-center flex-wrap gap-[10px]">
                                <h2 class="text-xl max-md:text-[18px] font-semibold">FORM 3(C)</h2>
                                <p class="text-xs font-medium">PROGRESS REPORTS</p>
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="card bg-lightgray p-4 rounded-lg flex justify-between items-center">
                            <div class="block items-center flex-wrap gap-[10px]">
                                <h2 class="text-xl max-md:text-[18px] font-semibold">FORM 3(L)</h2>
                                <p class="text-xs font-medium">FINAL REPORTS</p>
                            </div>
                        </div>
                    </a>
                    ---->