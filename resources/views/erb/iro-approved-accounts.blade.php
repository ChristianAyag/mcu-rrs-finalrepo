@section('title', 'Approved Accounts')
<x-erb-layout>
    <!-- Main Content -->
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            APPROVED ACCOUNTS
        </h2>
        <br>

        <table id="myTable" class="display overflow-scroll border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                <tr class="header-table">
                    <th class="w-[20.00%]">P.I. Name</th>
                    <th class="w-[20.00%]">Department</th>
                    <th class="w-[20.00%]">Research Title</th>
                    <th class="w-[20.00%]">Registration Date</th>
                    <th class="w-[20.00%]">Status</th>
                </tr>
            </thead>

            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                @foreach($approvedAccounts as $user)
                    <tr>
                        <td>
                            <input type="checkbox" class="user-checkbox w-[14px] h-[14px] mb-1"
                                value="{{ $user->user_ID }}">
                            <span>{{ $user->user_Fname }} {{ $user->user_Lname }}</span>
                        </td>
                        <td>{{ $user->researchInformation?->research_department ?? 'N/A' }}</td>
                        <td>{{ $user->researchInformation?->research_title ?? 'N/A' }}</td>
                        <td>
                            {{ $user->created_at ? $user->created_at->format('m/d/Y') : 'N/A' }}<br>
                            {{ $user->created_at ? $user->created_at->format('H:i:s') : '' }}
                        </td>
                        <td>{{ $user->classifications?->classificationStatus ?? 'N/A' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Main Layout -->
        @if($approvedAccounts->isNotEmpty())
            <!-- Main Layout -->
            <div class="flex mx-4 gap-6 grid grid-cols-2 max-md:grid-cols-1">
                <!-- Left Selection -->
                <div class="bg-lightgray p-4 shadow-md rounded-md">
                    <h3 class="text-lg font-semibold max-md:text-base mb-3">Assignment of Forms</h3>
                    <div class="flex grid grid-cols-3 max-sm:grid-cols-2 gap-y-3 gap-x-3 font-semibold max-md:text-sm">
                        @foreach ($selectForms as $form)
                            <div class="room cursor-pointer bg-gray hover:bg-darkgray px-3 py-2 rounded-md"
                                data-room="{{ $form->form_id }}" data-view="{{ $form->form_view }}">
                                {{ $form->form_code }}
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Right Display -->
                <div class="bg-lightgray p-4 shadow-md rounded-md">
                    <h3 class="text-lg font-semibold max-md:text-base mb-3">Assigned Forms</h3>
                    <ul id="assignedList"
                        class="list-disc mx-2 pl-6 pt-2 flex grid grid-cols-3 max-sm:grid-cols-2 gap-x-2 gap-y-3 max-md:text-sm"></ul>
                </div>
            </div>

            <!-- Button Outside, Right-Aligned -->
            <div class="flex justify-end mt-4 mx-4">
                <button id="submitBtn"
                    class="bg-secondary hover:bg-primary text-primary hover:text-secondary px-4 py-3 rounded-md uppercase tracking-widest duration-200"
                    type="button">
                    Submit
                </button>
            </div>
        @else
            <div class="text-center p-6 bg-lightgray rounded-md text-gray-500 mt-6">
                ⚠ No approved accounts available for form assignment.
            </div>
        @endif
    </main>
</x-erb-layout>
<script>
    const rooms = document.querySelectorAll(".room");
    const assignedList = document.getElementById("assignedList");
    const submitBtn = document.getElementById("submitBtn");

    rooms.forEach(room => {
        room.addEventListener("click", () => {
            const formId = room.dataset.room;
            const formCode = room.textContent;
            const existingItem = assignedList.querySelector(`[data-room="${formId}"]`);

            if (existingItem) {
                // Remove if already assigned
                existingItem.remove();
            } else {
                // Add new item
                const li = document.createElement("li");
                li.textContent = formCode;
                li.setAttribute("data-room", formId);
                assignedList.appendChild(li);
            }
        });
    });

    // Example action for submit
    submitBtn.addEventListener("click", (e) => {
        console.log("Submit button clicked ✅");

        const selectedUsers = [...document.querySelectorAll(".user-checkbox:checked")].map(cb => cb.value);
        const selectedForms = [...assignedList.querySelectorAll("li")].map(li => li.dataset.room);

        console.log("Users:", selectedUsers);
        console.log("Forms:", selectedForms);

        if (selectedUsers.length === 0 || selectedForms.length === 0) {
            alert("Please select at least one user and one form.");
            return;
        }

        fetch("{{ route('assign.forms.ajax') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                user_ids: selectedUsers,
                form_ids: selectedForms
            })
        })
            .then(res => res.json())
            .then(data => {
                console.log("Server response:", data);
                if (data.success) {
                    alert(data.message);

                    // Reset UI
                    document.querySelectorAll(".user-checkbox").forEach(cb => cb.checked = false);
                    assignedList.innerHTML = "";
                } else {
                    alert("Something went wrong.");
                }
            })
            .catch(err => console.error("Fetch error:", err));
    });
</script>