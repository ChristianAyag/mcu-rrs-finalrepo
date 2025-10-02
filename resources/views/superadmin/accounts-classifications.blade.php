@section('title', 'Classification of Accounts')
<x-superadmin-layout>
    <div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
        <button id="closeModalBtn" class="absolute top-2 right-2 text-gray hover:text-black text-xl">&times;</button>
        <!-- Modal layout -->
        <div
            class="bg-white rounded-md mt-6 max-sm:mx-2 px-6 py-4 border-4 border-gray max-w-lg w-full max-h-[80vh] overflow-y-auto relative max-sm:max-h-[75vh] max-sm:overflow-y-auto max-sm:relative">
            <h2 class="mb-6 font-semibold text-2xl max-sm:text-[18px]">Classification of Accounts</h2>
            <!-- Form -->
             
            <form method="POST" id="modalForm">
                @csrf
                <!-- User ID -->
                <div class="mt-2">
                    <div class="grid gap-x-20 gap-y-3 max-w-full">
                        <div class="font-semibold max-sm:text-sm">Principal Investigator:</div>
                        <div class="max-sm:mb-2 max-sm:text-sm" id="piName">John Doe</div>

                        <div class="font-semibold max-sm:text-sm">Co-Investigators:</div>
                        <div class="max-sm:mb-2 max-sm:text-sm" id="coInvestigators">John Doe</div>
                        <div class="font-semibold max-sm:text-sm">Research Title:</div>
                        <div class="max-sm:mb-2 max-sm:text-sm" id="piTitle"></div>

                        <div class="font-semibold max-sm:text-sm">Endorsement Letter:</div>
                        <div class="max-sm:mb-2 max-sm:text-sm" id="endorsementLetter">
                            <a href="#">
                                <button type="button" class="border-2 px-[10px] py-[5px] hover:bg-gray">View</button>
                            </a>
                        </div>
                        <div class="font-semibold max-sm:text-sm">Classification of Accounts:</div>
                        <div class="max-sm:mb-2 max-sm:text-sm" id="reviewClassification" name="reviewClassification">
                            <x-combobox-classify-accounts id="reviewClassification" name="reviewClassification" class="max-sm:text-sm" />
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <x-primary-button class="mt-4 max-sm:text-sm">
                        Submit
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
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
                    <th class="w-[25.00%]">P.I. Name</th>
                    <th class="w-[25.00%]">Research Title</th>
                    <!-- binago lang ung column header from "Classification of Accounts" to "Classify Account" -->
                    <th class="w-[25.00%]">Classify Account</th>
                    <th class="w-[25.00%]">Date Classified</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                @foreach ($pi as $user)
                <tr>
                    <td>{{ $user -> user_Fname }} {{ $user->user_MI ? $user->user_MI : '' }} {{ $user->user_Lname }}</td>
                    <td>{{ $user -> researchInformation?->research_title }}</td>
                    <td>
                        <button type="button"
                            class="openModalBtn border-2 px-[10px] py-[5px] hover:bg-gray"
                            data-id="{{ $user->user_ID }}" 
                            data-pi-name="{{ $user->user_Fname }} {{ $user->user_MI ? $user->user_MI : '' }} {{ $user->user_Lname }}"
                            data-pi-title="{{ $user->researchInformation?->research_title }}"
                            data-co-investigators="{{ $user->researchInformation?->research_CoInvestigator ?? 'N/A' }}"
                            data-endorsement="{{ $user->researchInformation?->research_Endorsement ? asset('storage/'.$user->id.'/'.$user->researchInformation->research_Endorsement) : '#' }}"
                            data-classification="{{ $user->classification ?? '' }}">View</button>
                    </td>
                    <td>{{ optional($user->classifications?->classificationDate)->format('n/j/Y') ?? 'N/A' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</x-superadmin-layout>
<script>
document.addEventListener("click", function (e) {
    if (e.target.classList.contains("openModalBtn")) {
        const btn = e.target;

        // Set modal content
        document.getElementById("piName").innerText = btn.dataset.piName;
        document.getElementById("piTitle").innerText = btn.dataset.piTitle;
        document.getElementById("coInvestigators").innerText = btn.dataset.coInvestigators;

        document.getElementById("endorsementLetter").innerHTML =
            `<a href="${btn.dataset.endorsement}" target="_blank">
                <button type="button" class="border-2 px-[10px] py-[5px] hover:bg-gray">View</button>
            </a>`;

        // Set combobox value
        const combo = document.getElementById("reviewClassification");
        combo.value = btn.dataset.classification;

        // ✅ Set the form action dynamically for this PI
        document.getElementById("modalForm").action = `/superadmin/classifications/${btn.dataset.id}/update`;

        // Show modal
        const modal = document.getElementById("modalOverlay");
        modal.classList.remove("hidden");
        modal.classList.add("flex");
    }
});

// Close modal with X button
document.getElementById("closeModalBtn").addEventListener("click", () => {
    const modal = document.getElementById("modalOverlay");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
});

// Close modal when clicking outside content
document.getElementById("modalOverlay").addEventListener("click", (e) => {
    if (e.target.id === "modalOverlay") {
        const modal = document.getElementById("modalOverlay");
        modal.classList.add("hidden");
        modal.classList.remove("flex");
    }
});
</script>