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
                    <th class="w-[16.66%]">P.I. Name</th>
                    <th class="w-[16.66%]">Research Title</th>
                    <th class="w-[16.66%]">Assigned Reviewer</th>
                    <th class="w-[16.66%]">Status</th>
                    <th class="w-[16.66%]">Date Submitted</th>
                    <th class="w-[16.66%]">Review Date</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                <tr>
                    <td>
                        <input type="checkbox" class="user-checkbox w-[14px] h-[14px] mb-1" value="1" data-name="John Doe">
                        <span>John Doe</span>
                    </td>
                    <td>Brain Injury: Prevention and Treatment of Chronic Brain Injury</td>
                    <td><button type="button" class="border-2 p-[5px] hover:bg-gray">Assign</button></td>
                    <td>Not Reviewed</td>
                    <td>N/A</td>
                    <td>N/A</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="user-checkbox w-[14px] h-[14px] mb-1" value="2" data-name="Alfreds Futterkiste">
                        <span>Alfreds Futterkiste</span>
                    </td>
                    <td>Foods for Health: Personalized Food and Nutritional Metabolic Profiling to Improve
                        Health
                    </td>
                    <td>Mario Pontes</td>
                    <td>Ongoing Review</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td>4/15/2025<br>22:37:50</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="user-checkbox w-[14px] h-[14px] mb-1" value="3" data-name="Alfreds Futterkiste">
                        <span>Alfreds Futterkiste</span>
                    </td>
                    <td>Foods for Health: Personalized Food and Nutritional Metabolic Profiling to Improve
                        Health
                    </td>
                    <td>Mario Pontes</td>
                    <td>Ongoing Review</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td>4/15/2025<br>22:37:50</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="user-checkbox w-[14px] h-[14px] mb-1" value="4" data-name="Alfreds Futterkiste">
                        <span>Alfreds Futterkiste</span>
                    </td>
                    <td>Foods for Health: Personalized Food and Nutritional Metabolic Profiling to Improve
                        Health
                    </td>
                    <td>Mario Pontes</td>
                    <td>Ongoing Review</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td>4/15/2025<br>22:37:50</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="user-checkbox w-[14px] h-[14px] mb-1" value="5" data-name="Alfreds Futterkiste">
                        <span>Alfreds Futterkiste</span>
                    </td>
                    <td>Foods for Health: Personalized Food and Nutritional Metabolic Profiling to Improve
                        Health
                    </td>
                    <td>Mario Pontes</td>
                    <td>Ongoing Review</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td>4/15/2025<br>22:37:50</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="user-checkbox w-[14px] h-[14px] mb-1" value="6" data-name="Alfreds Futterkiste">
                        <span>Alfreds Futterkiste</span>
                    </td>
                    <td>Foods for Health: Personalized Food and Nutritional Metabolic Profiling to Improve
                        Health
                    </td>
                    <td>Mario Pontes</td>
                    <td>Ongoing Review</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td>4/15/2025<br>22:37:50</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="user-checkbox w-[14px] h-[14px] mb-1" value="7" data-name="Alfreds Futterkiste">
                        <span>Alfreds Futterkiste</span>
                    </td>
                    <td>Foods for Health: Personalized Food and Nutritional Metabolic Profiling to Improve
                        Health
                    </td>
                    <td>Mario Pontes</td>
                    <td>Ongoing Review</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td>4/15/2025<br>22:37:50</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="user-checkbox w-[14px] h-[14px] mb-1" value="8" data-name="Alfreds Futterkiste">
                        <span>Alfreds Futterkiste</span>
                    </td>
                    <td>Foods for Health: Personalized Food and Nutritional Metabolic Profiling to Improve
                        Health
                    </td>
                    <td>Mario Pontes</td>
                    <td>Ongoing Review</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td>4/15/2025<br>22:37:50</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="user-checkbox w-[14px] h-[14px] mb-1" value="9" data-name="Alfreds Futterkiste">
                        <span>Alfreds Futterkiste</span>
                    </td>
                    <td>Foods for Health: Personalized Food and Nutritional Metabolic Profiling to Improve
                        Health
                    </td>
                    <td>Mario Pontes</td>
                    <td>Ongoing Review</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td>4/15/2025<br>22:37:50</td>
                </tr>
            </tbody>
        </table>
        <div class="flex mx-4 gap-6 grid grid-cols-2 max-md:grid-cols-1">
            <div class="bg-lightgray p-4 shadow-md rounded-md">
                <h3 class="font-semibold text-lg max-md:text-base mb-3">LISTS OF USERS</h3>
                <div class="h-16 overflow-y-auto">
                    <ul id="selectedUsers" class="list-disc pl-5 flex grid grid-cols-2 max-md:grid-cols-1 max-md:text-sm"></ul>
                </div>
            </div>
            <div class="bg-lightgray p-4 shadow-md rounded-md">
                <h3 class="font-semibold text-lg max-md:text-base mb-4">DECISION TAB</h3>
                <div class="flex h-16 grid grid-cols-3 max-md:grid-cols-2">
                    <div class="flex gap-x-1">
                        <input type="radio" name="decision" value="Resubmission" class="mt-1 w-[14px] h-[14px] max-sm:w-[12px] max-sm:h-[12px]">
                        <span>Resubmission</span>
                    </div>
                    <div class="flex gap-x-1">
                        <input type="radio" name="decision" value="Amendments" class="mt-1 w-[14px] h-[14px] max-sm:w-[12px] max-sm:h-[12px]">
                        <span>Amendments</span>
                    </div>
                    <div class="flex gap-x-1">
                        <input type="radio" name="decision" value="Approved" class="mt-1 w-[14px] h-[14px] max-sm:w-[12px] max-sm:h-[12px]">
                        <span>Approved</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        const userCheckboxes = document.querySelectorAll(".user-checkbox");
        const selectedUsersList = document.getElementById("selectedUsers");

        userCheckboxes.forEach(checkbox => {
            checkbox.addEventListener("change", () => {
                const userId = checkbox.value;
                const userName = checkbox.dataset.name;

                const existing = selectedUsersList.querySelector(`[data-user-id="${userId}"]`);

                if (checkbox.checked && !existing) {
                    // Add to list
                    const li = document.createElement("li");
                    li.textContent = userName;
                    li.setAttribute("data-user-id", userId);
                    selectedUsersList.appendChild(li);
                } else if (!checkbox.checked && existing) {
                    // Remove from list
                    existing.remove();
                }
            });
        });
    </script>
</x-erb-layout>