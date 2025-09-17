@section('title', 'Approved Accounts')
<x-iacuc-layout>
    <!-- Main Content -->
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <h2 class="max-2xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            APPROVED ACCOUNTS
        </h2>
        <br>

        <table id="myTable"
            class="table-fixed min-w-full display overflow-scroll whitespace-no-wrap border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                <tr class="header-table">
                    <th>P.I. Name</th>
                    <th>Department</th>
                    <th>Research Title</th>
                    <th>Registration Date</th>
                    <th>Status</th>
                </tr>
            </thead>

            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                <tr>
                    <td>
                        <input type="checkbox" class="w-[14px] h-[14px] mb-1">
                        <span>John Doe</span>
                    </td>
                    <td>Information Technology</td>
                    <td>Brain Injury: Prevention and Treatment of Chronic Brain Injury</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td><button type="button" class="border-2 p-[5px] hover:bg-gray">Approve</button></td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="w-[14px] h-[14px] mb-1">
                        <span>Alfreds Futterkiste</span>
                    </td>
                    <td>Information Technology</td>
                    <td>Foods for Health: Personalized Food and Nutritional Metabolic Profiling to Improve
                        Health
                    </td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td>Approved</td>
                </tr>
            </tbody>
        </table>
        <!-- Main Layout -->
        <div class="flex mx-4 gap-6 grid grid-cols-2 max-md:grid-cols-1">
            <!-- Left Selection -->
            <div class="bg-lightgray p-4 shadow-md rounded-md">
                <h3 class="text-lg font-semibold mb-3">Assignment of Forms</h3>
                <div class="gap-x-2 gap-y-2 flex grid max-sm:grid-cols-2 md:grid-cols-4 font-medium">
                    <div class="room cursor-pointer bg-gray hover:bg-darkgray px-3 py-2 rounded-md"
                        data-room="Form 2A">Form 2A</div>
                    <div class="room cursor-pointer bg-gray hover:bg-darkgray px-3 py-2 rounded-md"
                        data-room="Form 2B">Form 2B</div>
                    <div class="room cursor-pointer bg-gray hover:bg-darkgray px-3 py-2 rounded-md"
                        data-room="Form 2C">Form 2C</div>
                    <div class="room cursor-pointer bg-gray hover:bg-darkgray px-3 py-2 rounded-md"
                        data-room="Form 2D">Form 2D</div>
                </div>
            </div>

            <!-- Right Display -->
            <div class="bg-lightgray p-4 shadow-md rounded-md">
                <h3 class="text-lg font-semibold mb-3">Assigned Rooms</h3>
                <ul id="assignedList" class="list-disc mx-2 pl-6 pt-2 flex grid grid-cols-3 max-sm:grid-cols-2 gap-x-2 gap-y-3"></ul>
            </div>
        </div>

        <!-- Button Outside, Right-Aligned -->
        <div class="flex justify-end mt-4 mx-4">
            <button id="submitBtn" class="bg-secondary hover:bg-primary text-primary hover:text-secondary px-4 py-3 rounded-md uppercase tracking-widest duration-200">
                Submit
            </button>
        </div>
    </main>
</x-iacuc-layout>
<script>
    const rooms = document.querySelectorAll(".room");
    const assignedList = document.getElementById("assignedList");
    const submitBtn = document.getElementById("submitBtn");

    rooms.forEach(room => {
        room.addEventListener("click", () => {
            const roomName = room.dataset.room;
            const existingItem = assignedList.querySelector(`[data-room="${roomName}"]`);

            if (existingItem) {
                // Remove if already assigned
                existingItem.remove();
            } else {
                // Add new item
                const li = document.createElement("li");
                li.textContent = roomName;
                li.setAttribute("data-room", roomName);
                assignedList.appendChild(li);
            }
        });
    });

    // Example action for submit
    submitBtn.addEventListener("click", () => {
        const assignedRooms = [...assignedList.querySelectorAll("li")].map(li => li.textContent);
        alert("Assigned Rooms: " + assignedRooms.join(", "));
    });
</script>