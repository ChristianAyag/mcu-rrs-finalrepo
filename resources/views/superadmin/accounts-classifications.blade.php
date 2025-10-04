@section('title', 'Classification of Accounts')
<x-superadmin-layout>
    <!-- Main Content -->
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            ACCOUNTS CLASSIFICATION
        </h2>
        <br>

        <table id="myTable" class="display overflow-scroll border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                <tr class="header-table">
                    <th class="w-[20%]">P.I. Name</th>
                    <th class="w-[20%]">Research Title</th>
                    <th class="w-[20%]">Endorsement Letter File</th>
                    <th class="w-[20%]">Date Classified</th>
                    <th class="w-[20%]">Status</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                @foreach ($pi as $user)
                    <tr data-user-id="{{ $user->user_ID }}">
                        <td>
                            <input type="checkbox" class="user-checkbox w-[14px] h-[14px] mb-1" value="{{ $user->user_ID }}"
                                data-name="{{ $user->user_Fname }} {{ $user->user_MI ? $user->user_MI : '' }} {{ $user->user_Lname }}">
                            <span>{{ $user->user_Fname }} {{ $user->user_MI ? $user->user_MI : '' }} {{ $user->user_Lname }}</span>
                        </td>
                        <td>{{ $user->researchInformation?->research_title }}</td>
                        <td>
                            @if($user->researchInformation?->research_Endorsement)
                                <a href="{{ asset('storage/' . $user->id . '/' . $user->researchInformation->research_Endorsement) }}" target="_blank">
                                    <button type="button" class="border-2 px-[10px] py-[5px] hover:bg-gray">View</button>
                                </a>
                            @else
                                N/A
                            @endif
                        </td>
                        <td class="date-classified">{{ optional($user->classifications?->classificationDate)->format('n/j/Y') ?? 'N/A' }}</td>
                        <td class="status">{{ $user->classification ?? 'Unclassified' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="grid grid-cols-2 max-md:grid-cols-1 max-md:block gap-x-5 mt-4">
            <div class="max-md:mt-3 bg-lightgray shadow-md rounded-md p-3">
                <h3 class="text-lg font-semibold max-md:text-base mb-3">USERS LIST</h3>
                <div class="h-16 overflow-y-auto">
                    <ul id="selectedUsers" class="max-md:text-sm flex grid grid-cols-3 max-md:grid-cols-2 list-disc pl-5"></ul>
                </div>
            </div>

            <div class="max-md:mt-3 bg-lightgray shadow-md rounded-md p-3">
                <h3 class="text-lg font-semibold max-md:text-base mb-3">CLASSIFY ACCOUNTS</h3>
                <div class="h-16 max-sm:mb-2 max-sm:text-sm grid grid-cols-3 gap-x-2">
                    <div class="flex gap-x-1">
                        <input type="radio" name="reviewClassification" value="ERB" class="mt-1 w-[14px] h-[14px] max-sm:w-[12px] max-sm:h-[12px]">
                        <span>ERB</span>
                    </div>
                    <div class="flex gap-x-1">
                        <input type="radio" name="reviewClassification" value="IACUC" class="mt-1 w-[14px] h-[14px] max-sm:w-[12px] max-sm:h-[12px]">
                        <span>IACUC</span>
                    </div>
                    <div class="flex gap-x-1">
                        <input type="radio" name="reviewClassification" value="ERB/IACUC" class="mt-1 w-[14px] h-[14px] max-sm:w-[12px] max-sm:h-[12px]">
                        <span>ERB/IACUC</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-start mt-4 mx-4 max-md:mx-0">
            <button id="submitBtn" class="bg-secondary hover:bg-primary text-primary hover:text-secondary px-4 py-2 rounded-md uppercase tracking-widest duration-200 max-sm:text-sm" type="button">
                Submit
            </button>
        </div>
    </main>
</x-superadmin-layout>

<script>
    const userCheckboxes = document.querySelectorAll(".user-checkbox");
    const selectedUsersList = document.getElementById("selectedUsers");
    const submitBtn = document.getElementById("submitBtn");

    // Manage selected users list
    userCheckboxes.forEach(checkbox => {
        checkbox.addEventListener("change", () => {
            const userId = checkbox.value;
            const userName = checkbox.dataset.name;

            const existing = selectedUsersList.querySelector(`[data-user-id="${userId}"]`);
            if (checkbox.checked && !existing) {
                const li = document.createElement("li");
                li.textContent = userName;
                li.setAttribute("data-user-id", userId);
                selectedUsersList.appendChild(li);
            } else if (!checkbox.checked && existing) {
                existing.remove();
            }
        });
    });

    // Submit bulk classification
        submitBtn.addEventListener("click", () => {
        const selectedUsers = [...document.querySelectorAll(".user-checkbox:checked")].map(cb => cb.value);
        const selectedClassification = document.querySelector('input[name="reviewClassification"]:checked')?.value;

        if (selectedUsers.length === 0) {
            alert("Please select at least one user.");
            return;
        }

        if (!selectedClassification) {
            alert("Please select a classification type.");
            return;
        }

        fetch("{{ route('classifications.bulk-update') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                user_ids: selectedUsers,
                reviewClassification: selectedClassification
            })
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                alert(data.message);

                // Reset checkboxes and selected users
                document.querySelectorAll(".user-checkbox").forEach(cb => cb.checked = false);
                selectedUsersList.innerHTML = "";

                // Remove rows of classified users from table
                selectedUsers.forEach(id => {
                    const row = document.querySelector(`tr[data-user-id="${id}"]`);
                    if (row) {
                        row.remove(); // remove the row from UI
                    }
                });
            } else {
                alert("Something went wrong.");
            }
        })
        .catch(err => console.error("Fetch error:", err));
    });
</script>
