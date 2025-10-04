@section('title','Form 3(E)')
<x-erb-reviewer>
    <main class="ml-[335px] max-xl:ml-auto p-4">
        <form action="" method="POST" class="block">
            <div class="mt-3 p-1 max-w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="text-right mt-3 mr-3 max-lg:text-sm max-md:text-sm max-sm:text-xs">FORM 3(E)</p>
                <h1
                    class="text-center mt-10 max-2xl:mt-6 max-lg:mt-6 max-md:mt-6 font-bold text-2xl max-xl:text-xl max-lg:text-lg max-md:text-base max-sm:text-sm mb-2 underline">
                    AMENDMENTS
                </h1>
            </div>
            <div class="mt-3 p-1 max-w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="p-3 mt-2 max-sm:text-sm">
                    <div class="grid grid-cols-[max-content_1fr] max-sm:grid-cols-1 gap-x-20 gap-y-3 max-w-full">
                        <div class="font-bold">MCUERB Code:</div>
                        <div class="max-sm:mb-2">2025-S1-001</div>

                        <div class="font-bold">Study Protocol Title:</div>
                        <div class="max-sm:mb-2">Brain Injury: Prevention and Treatment of Chronic Brain Injury</div>

                        <div class="font-bold">Principal Investigator (PI):</div>
                        <div class="max-sm:mb-2">John Doe</div>

                        <div class="font-bold">Co-Investigator(s):</div>
                        <div class="max-sm:mb-2">John Doe, Alfreds Futterkiste</div>

                        <div class="font-bold">PI Contact Number:</div>
                        <div class="max-sm:mb-2">09XX-XXX-XX74</div>

                        <div class="font-bold">Email Address:</div>
                        <div class="max-sm:mb-2">email123@gmail.com</div>

                        <div class="font-bold">Institution:</div>
                        <div class="max-sm:mb-2">Institution</div>

                        <div class="font-bold">College/Department:</div>
                        <div class="max-sm:mb-2">BS Computer Science</div>

                        <div class="font-bold">Study Protocol Submission Date:</div>
                        <div class="max-sm:mb-2">2025-05-05</div>

                        <div class="font-bold">Study Protocol Approval Date:</div>
                        <div class="max-sm:mb-2">2025-05-05</div>

                        <div class="font-bold">Version Number</div>
                        <div class="max-sm:mb-2">2.0</div>
                    </div>
                </div>
            </div>
            <div class="mt-3 p-1 max-w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="p-3 mt-2 space-y-2 max-sm:text-sm">
                    <div>
                        <label>
                            <span>
                                Procedure/provisions to be amended
                            </span>
                            <textarea
                                class="mt-1 w-full resize-none max-sm:text-sm" readonly>aweaweaw</textarea>
                        </label>
                    </div>
                    <div>
                        <label>
                            <span>
                                Original Procedure/provision
                            </span>
                            <textarea
                                class="mt-1 w-full resize-none max-sm:text-sm" readonly>aweawe</textarea>
                        </label>
                    </div>
                    <div>
                        <label>
                            <span>
                                Proposed Amendment/s
                            </span>
                            <textarea
                                class="mt-1 w-full resize-none max-sm:text-sm" readonly>aweawe</textarea>
                        </label>
                    </div>
                    <div>
                        <label>
                            <span>
                                Justification
                            </span>
                            <textarea
                                class="mt-1 w-full resize-none max-sm:text-sm" readonly>aweawe</textarea>
                        </label>
                    </div>
                    <div>
                        <label>
                            <span>
                                Remarks (to be filled up by reviewer)
                            </span>
                            <textarea name="remarks"
                                class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                        </label>
                    </div>
                </div>
            </div>
            <!-- BUTTONS -->
            <div class="mt-3 p-1 max-w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="p-3 flex items-center justify-center space-x-2">
                    <button type="button"
                        class="bg-primary text-secondary hover:bg-secondary hover:text-primary duration-200 tracking-widest p-4 max-sm:p-3 rounded max-sm:text-sm">SAVE</button>
                    <a href="">
                        <button type="submit"
                            class="bg-secondary text-primary hover:bg-primary hover:text-secondary duration-200 tracking-widest p-4 max-sm:p-3 rounded max-sm:text-sm">EXPORT
                            TO PDF
                        </button>
                    </a>
                </div>
            </div>
        </form>
    </main>
</x-erb-reviewer>