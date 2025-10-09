@section('title', 'Pending Reviews')
<x-erb-layout>
    <!-- Main Content -->
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            PENDING REVIEWS
        </h2>
        <br>

        <table id="myTable" class="display overflow-scroll border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                <tr class="header-table">
                    <th class="w-[16.66%]">Protocol ID</th>
                    <th class="w-[16.66%]">Research Title</th>
                    <th class="w-[16.66%]">P.I. Name</th>
                    <th class="w-[16.66%]">Co-Investigator</th>
                    <th class="w-[16.66%]">Status</th>
                    <th class="w-[16.66%]">Date Submitted</th>
                    <th class="w-[16.66%]">Review Date</th>
                </tr>
            </thead>

            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                @forelse($evaluatedProtocols as $review)
                <tr>
                    <!-- Protocol ID with checkbox (moved to first column) -->
                    <td>
                        <input 
                            type="checkbox" 
                            class="protocol-checkbox w-[14px] h-[14px] mb-1" 
                            value="{{ $review->protocol_ID }}" 
                            data-title="{{ $review->research_title }}">
                        <span>{{ $review->protocol_ID }}</span>
                    </td>

                    <!-- Research Title -->
                    <td>{{ $review->research_title }}</td>

                    <!-- Principal Investigator Name -->
                    <td>{{ $review->user_Fname }}</td>

                    <td>{{ $review->co_investigator }}</td>

                    <!-- Status -->
                    <td>{{ $review->status ?? 'Pending' }}</td>

                    <!-- Date Submitted -->
                    <td>
                        @if($review->date_submitted)
                            {{ \Carbon\Carbon::parse($review->date_submitted)->format('m/d/Y H:i') }}
                        @else
                            N/A
                        @endif
                    </td>

                    <!-- Review Date -->
                    <td>
                        @if($review->review_date)
                            {{ \Carbon\Carbon::parse($review->review_date)->format('m/d/Y H:i') }}
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-gray-500 py-4">No pending reviews available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Selected Protocol and Decision Section -->
        <div class="flex mx-4 gap-6 grid grid-cols-2 max-md:grid-cols-1 mt-6">
            <!-- Selected Protocol -->
            <div class="bg-lightgray p-4 shadow-md rounded-md">
                <h3 class="font-semibold text-lg max-md:text-base mb-3">SELECTED PROTOCOL</h3>
                <div class="h-16 overflow-y-auto">
                    <ul id="selectedProtocols" class="list-disc pl-5 flex grid grid-cols-2 max-md:grid-cols-1 max-md:text-sm"></ul>
                </div>
            </div>

            <!-- Decision Tab -->
            <div class="bg-lightgray p-4 shadow-md rounded-md">
                <h3 class="font-semibold text-lg max-md:text-base mb-4">DECISION TAB</h3>
                <div class="flex h-16 grid grid-cols-3 max-md:grid-cols-2">
                    <div class="flex gap-x-1">
                        <input type="radio" name="decision" value="Resubmission" class="mt-1 w-[14px] h-[14px]">
                        <span>Resubmission</span>
                    </div>
                    <div class="flex gap-x-1">
                        <input type="radio" name="decision" value="Approved" class="mt-1 w-[14px] h-[14px]">
                        <span>Approved</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-start mt-4 mx-4">
                <button id="submitBtn"
                    class="bg-secondary hover:bg-primary text-primary hover:text-secondary px-4 py-3 rounded-md uppercase tracking-widest duration-200"
                    type="button">
                    Submit
                </button>
            </div>
        </div>
    </main>
    <script>
        // ✅ Keep your checkbox logic (only one can be selected)
        const protocolCheckboxes = document.querySelectorAll(".protocol-checkbox");
        const selectedProtocolsList = document.getElementById("selectedProtocols");

        protocolCheckboxes.forEach(checkbox => {
            checkbox.addEventListener("change", () => {
                // Allow only one protocol selection at a time
                protocolCheckboxes.forEach(cb => {
                    if (cb !== checkbox) cb.checked = false;
                });

                selectedProtocolsList.innerHTML = "";

                if (checkbox.checked) {
                    const li = document.createElement("li");
                    li.textContent = `Protocol ID: ${checkbox.value} — ${checkbox.dataset.title}`;
                    li.setAttribute("data-protocol-id", checkbox.value);
                    selectedProtocolsList.appendChild(li);
                }
            });
        });

        // ✅ Handle decision submission
        document.getElementById("submitBtn").addEventListener("click", function () {
            const selectedRadio = document.querySelector('input[name="decision"]:checked');
            const selectedProtocol = document.querySelector(".protocol-checkbox:checked");

            if (!selectedProtocol) {
                alert("⚠️ Please select a protocol first.");
                return;
            }

            if (!selectedRadio) {
                alert("⚠️ Please select a decision type.");
                return;
            }

            const decision = selectedRadio.value;
            const protocolID = selectedProtocol.value;

            fetch("{{ route('erb.pending-reviews.store') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    protocol_id: protocolID,
                    decision: decision
                }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("✅ " + data.message);
                    selectedProtocol.closest("tr").classList.add("bg-green-100");
                    selectedProtocol.checked = false;
                    document.querySelector('input[name="decision"]:checked').checked = false;
                    selectedProtocolsList.innerHTML = '';
                } else {
                    alert("❌ " + (data.message || "An error occurred."));
                }
            })
            .catch(error => {
                console.error(error);
                alert("❌ Unexpected error occurred.");
            });
        });
    </script>
</x-erb-layout>
