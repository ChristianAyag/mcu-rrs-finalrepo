@section('title', 'Assign Reviewer')
<x-erb-layout>  
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            ASSIGN REVIEWER
        </h2>
        <br>

        {{-- ✅ START FORM --}}
        <form id="assignForm" action="{{ route('assign-reviewer.store') }}" method="POST">
            @csrf

            <table id="myTable" class="display overflow-scroll border-collapse w-full">
                <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                    <tr class="header-table">
                        <th class="w-[16.66%]">Research Title</th>
                        <th class="w-[16.66%]">PI Name</th>
                        <th class="w-[16.66%]">Co-Investigators</th>
                        <th class="w-[16.66%]">Assign</th>
                    </tr>
                </thead>
                <tbody class="text-base/7 max-lg:text-sm/6">
                    @foreach ($piWithForms as $assignReviewer)
                    <tr>
                        <td>
                            <input type="checkbox" value="{{ $assignReviewer->user_ID }}">
                            <span>{{ $assignReviewer->researchInformation?->research_title }}</span>
                        </td>
                        <td>{{ $assignReviewer->user_Fname }} {{ $assignReviewer->user_MI }} {{ $assignReviewer->user_Lname }}</td>
                        <td>{{ $assignReviewer->researchInformation?->research_CoInvestigator }}</td>
                        <td>Pending</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="grid grid-cols-4 max-xl:grid-cols-2 max-sm:block gap-x-5">
                <div class="mt-2 max-sm:max-w-full">
                    <label for="reviewtype" class="block max-sm:text-sm">Type of Review</label>
                    <select name="review_type" id="reviewtype" class="w-full max-sm:text-sm border border-darkgray rounded-md h-[35px] leading-[18px]">
                        <option disabled selected>Choose type</option>
                        <option value="Exempted">Exempted</option>
                        <option value="Expedite">Expedite</option>
                        <option value="Full Board">Full Board</option>
                    </select>

                    <label for="reviewer1" class="mt-3 block max-sm:text-sm">Reviewer 1</label>
                    <select name="reviewer1" id="reviewer1" class="w-full border border-darkgray rounded-md h-[35px]">
                        <option disabled selected>Choose Reviewer</option>
                        <option value="N/A">N/A</option>
                        @foreach($erbReviewer as $reviewer)
                            <option 
                                value="{{ $reviewer->user_ID }}"
                                data-name="{{ $reviewer->user_Fname }} {{ $reviewer->user_Lname }}"
                                data-college="{{ $reviewer->reviewerInformation->Reviewer_Dept ?? 'N/A' }}"
                                data-prog="{{ $reviewer->reviewerInformation->Reviewer_Prog ?? 'N/A' }}"
                            >
                                {{ $reviewer->user_Fname }} {{ $reviewer->user_Lname }}
                            </option>
                        @endforeach
                    </select>

                    <label for="reviewer2" class="mt-3 block max-sm:text-sm">Reviewer 2</label>
                    <select name="reviewer2" id="reviewer2" class="w-full border border-darkgray rounded-md h-[35px]">
                        <option disabled selected>Choose Reviewer</option>
                        <option value="N/A">N/A</option>
                        @foreach($erbReviewer as $reviewer)
                            <option 
                                value="{{ $reviewer->user_ID }}"
                                data-name="{{ $reviewer->user_Fname }} {{ $reviewer->user_Lname }}"
                                data-college="{{ $reviewer->reviewerInformation->Reviewer_Dept ?? 'N/A' }}"
                                data-prog="{{ $reviewer->reviewerInformation->Reviewer_Prog ?? 'N/A' }}"
                            >
                                {{ $reviewer->user_Fname }} {{ $reviewer->user_Lname }}
                            </option>
                        @endforeach
                    </select>

                    {{-- ✅ Assignment of Forms --}}
                    <div class="max-md:mt-3 bg-lightgray p-3 font-semibold max-sm:text-sm shadow-md rounded-md">
                        <h3 class="text-lg font-semibold mb-3">Assignment of Forms</h3>
                        <div class="gap-x-3 gap-y-3 grid grid-cols-2">
                            @foreach ($forms as $form)
                                <div 
                                    class="room cursor-pointer bg-gray hover:bg-darkgray px-3 py-2 rounded-md"
                                    data-formid="{{ $form->form_id }}"
                                    data-code="{{ $form->form_code }}"
                                >
                                    {{ $form->form_code }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Reviewer 1 Info --}}
                <div class="mt-2 bg-lightgray shadow-md rounded-md p-3">
                    <h3 class="text-lg font-semibold mb-3">Reviewer 1</h3>
                    <div class="grid grid-cols-[max-content_1fr] gap-x-2 gap-y-3">
                        <div class="font-bold">Name:</div>
                        <div id="r1_name">—</div>

                        <div class="font-bold">College:</div>
                        <div id="r1_college">—</div>

                        <div class="font-bold">Program:</div>
                        <div id="r1_prog">—</div>

                        <div class="font-bold">Type of Review:</div>
                        <div id="r1_type">—</div>

                        <div class="font-bold">Forms Assigned:</div>
                        <div id="r1_forms">—</div>
                    </div>
                </div>

                {{-- Reviewer 2 Info --}}
                <div class="mt-2 bg-lightgray shadow-md rounded-md p-3">
                    <h3 class="text-lg font-semibold mb-3">Reviewer 2</h3>
                    <div class="grid grid-cols-[max-content_1fr] gap-x-2 gap-y-3">
                        <div class="font-bold">Name:</div>
                        <div id="r2_name">—</div>

                        <div class="font-bold">College:</div>
                        <div id="r2_college">—</div>

                        <div class="font-bold">Program:</div>
                        <div id="r2_prog">—</div>

                        <div class="font-bold">Type of Review:</div>
                        <div id="r2_type">—</div>

                        <div class="font-bold">Forms Assigned:</div>
                        <div id="r2_forms">—</div>
                    </div>
                </div>

                {{-- Assigned Forms --}}
                <div class="mt-2 bg-lightgray shadow-md rounded-md p-3">
                    <h3 class="text-lg font-semibold mb-3">Assigned Forms</h3>
                    <ul id="assignedList" class="list-disc px-6 grid grid-cols-2 max-md:text-sm gap-x-2 gap-y-3"></ul>
                </div>
            </div>

            {{-- ✅ Hidden Inputs --}}
            <input type="hidden" name="user_id" id="user_id">
            <input type="hidden" name="reviewer1_id" id="hidden_reviewer1">
            <input type="hidden" name="reviewer2_id" id="hidden_reviewer2">
            <input type="hidden" name="review_type" id="hidden_reviewtype">
            <input type="hidden" name="form_ids" id="hidden_forms">

            <div class="flex justify-start mt-4 mx-4">
                <button id="submitBtn"
                    class="bg-secondary hover:bg-primary text-primary hover:text-secondary px-4 py-3 rounded-md uppercase tracking-widest duration-200"
                    type="button">
                    Submit
                </button>
            </div>
        </form>
        {{-- ✅ END FORM --}}
    </main>
</x-erb-layout>

{{-- ✅ SCRIPT --}}
<script>
    const rooms = document.querySelectorAll(".room");
    const assignedList = document.getElementById("assignedList");

    const reviewer1 = document.getElementById("reviewer1");
    const reviewer2 = document.getElementById("reviewer2");
    const reviewType = document.getElementById("reviewtype");

    // Function to get assigned forms
    function getAssignedForms() {
        const forms = Array.from(assignedList.querySelectorAll("li")).map(li => li.textContent);
        return forms.length ? forms.join(", ") : "—";
    }

    // Update forms display
    function updateFormsDisplay() {
        document.getElementById("r1_forms").textContent = reviewer1.value !== "N/A" ? getAssignedForms() : "—";
        document.getElementById("r2_forms").textContent = reviewer2.value !== "N/A" ? getAssignedForms() : "—";
    }

    // Enable or disable form selection based on reviewer N/A
    function updateFormSelectionState() {
        const bothNA = reviewer1.value === "N/A" && reviewer2.value === "N/A";
        rooms.forEach(room => {
            room.classList.add("cursor-pointer"); // Always allow click, visual only
        });
    }

    // Toggle assigned forms visually
    rooms.forEach(room => {
        room.addEventListener("click", () => {
            const formId = room.dataset.formid;
            const formCode = room.dataset.code;

            const reviewer1NA = reviewer1.value === "N/A";
            const reviewer2NA = reviewer2.value === "N/A";

            // Only require forms if at least one reviewer is not N/A
            if (reviewer1NA && reviewer2NA) return;

            const existingItem = assignedList.querySelector(`[data-formid="${formId}"]`);
            if (existingItem) {
                existingItem.remove();
                room.classList.remove("bg-darkgray");
                room.classList.add("bg-gray");
            } else {
                const li = document.createElement("li");
                li.textContent = formCode;
                li.setAttribute("data-formid", formId);
                assignedList.appendChild(li);
                room.classList.add("bg-darkgray");
                room.classList.remove("bg-gray");
            }
            updateFormsDisplay();
        });
    });

    // Reviewer change handlers
    function updateReviewerInfo(reviewerElem, rName, rCollege, rProg, rType) {
        const sel = reviewerElem.options[reviewerElem.selectedIndex];
        document.getElementById(rName).textContent = sel.dataset.name || "—";
        document.getElementById(rCollege).textContent = sel.dataset.college || "—";
        document.getElementById(rProg).textContent = sel.dataset.prog || "—";
        document.getElementById(rType).textContent = reviewType.value || "—";
        updateFormsDisplay();
        updateFormSelectionState();
    }

    reviewer1.addEventListener("change", () => updateReviewerInfo(reviewer1, "r1_name", "r1_college", "r1_prog", "r1_type"));
    reviewer2.addEventListener("change", () => updateReviewerInfo(reviewer2, "r2_name", "r2_college", "r2_prog", "r2_type"));

    reviewType.addEventListener("change", () => {
        document.getElementById("r1_type").textContent = reviewType.value;
        document.getElementById("r2_type").textContent = reviewType.value;
    });

    // ✅ Select PI checkbox
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(cb => {
        cb.addEventListener("change", function() {
            checkboxes.forEach(c => { if (c !== this) c.checked = false; });
            document.getElementById("user_id").value = this.checked ? this.value : '';
        });
    });

    // ✅ AJAX submission
    const submitBtn = document.getElementById("submitBtn");
    const assignForm = document.getElementById("assignForm");

    submitBtn.addEventListener("click", function(e) {
        e.preventDefault();

        const userId = document.getElementById("user_id").value;
        const reviewer1Id = reviewer1.value;
        const reviewer2Id = reviewer2.value;
        const reviewTypeVal = reviewType.value;
        let selectedForms = Array.from(assignedList.querySelectorAll("li")).map(li => li.getAttribute("data-formid"));

        const bothNA = reviewer1Id === "N/A" && reviewer2Id === "N/A";

        if (!userId) return alert("Please select a Principal Investigator.");
        if (!reviewer1Id || !reviewer2Id) return alert("Please select both reviewers.");
        if (!bothNA && selectedForms.length === 0) return alert("Please select at least one form to assign.");
        if (!reviewTypeVal) return alert("Please select a review type.");

        // ✅ If both reviewers are N/A, send an empty array
        if (bothNA) selectedForms = [];

        submitBtn.disabled = true;
        submitBtn.textContent = "Submitting...";

        const data = {
            _token: '{{ csrf_token() }}',
            pis: [userId],
            reviewer1_ID: reviewer1Id,
            reviewer2_ID: reviewer2Id,
            review_type: reviewTypeVal,
            assigned_forms: selectedForms
        };

        fetch("{{ route('assign-reviewer.store') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(res => {
            submitBtn.disabled = false;
            submitBtn.textContent = "Submit";

            if (res.message) {
                alert("✅ " + res.message);
                assignForm.reset();
                assignedList.innerHTML = "";
                document.querySelectorAll(".room").forEach(r => {
                    r.classList.remove("bg-darkgray");
                    r.classList.add("bg-gray");
                });
                document.getElementById("r1_name").textContent = "—";
                document.getElementById("r2_name").textContent = "—";
                document.getElementById("r1_forms").textContent = "—";
                document.getElementById("r2_forms").textContent = "—";
            } else {
                alert("⚠️ Something went wrong while saving.");
            }
        })
        .catch(err => {
            console.error(err);
            alert("❌ Failed to save. Check console for details.");
            submitBtn.disabled = false;
            submitBtn.textContent = "Submit";
        });
    });

    // Initialize form selection state on page load
    updateFormSelectionState();
</script>