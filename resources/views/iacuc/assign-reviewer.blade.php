@section('title', 'Assign Reviewer')
<x-iacuc-layout>
    <div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
        <!-- Modal layout -->
        <div class="bg-white rounded-md mt-6 max-sm:mx-2 px-6 py-4 border-4 border-gray max-w-lg w-full">
            <button id="closeModalBtn"
                class="absolute top-2 right-2 text-gray hover:text-black text-xl">&times;</button>
            <h2 class="mb-6 font-semibold text-2xl max-sm:text-[18px]">Assign Reviewer</h2>
            <!-- Form -->
            <form method="POST" action="" id="modalForm">
                <!-- User ID -->
                <div class="mt-2">
                    <x-input-label for="userID" :value="__('User ID')" />
                    <x-text-input id="userID" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]"
                        type="text" name="userID" required autocomplete="userID" placeholder="User ID" />
                    <x-input-error :messages="$errors->get('userID')" class="mt-2" />
                </div>

                <!-- Research Title -->
                <div class="mt-2">
                    <x-input-label for="userResearchTitle" :value="__('Research Title')" />
                    <x-text-input id="userResearchTitle"
                        class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]" type="text"
                        name="userResearchTitle" required autocomplete="userResearchTitle"
                        placeholder="Research Title" />
                    <x-input-error :messages="$errors->get('userResearchTitle')" class="mt-2" />
                </div>

                <!-- Upload Files -->
                <div class="mt-2">
                    <x-input-label for="upload" :value="__('Upload File')" />
                    <div class="mt-1 flex justify-center items-center">
                        <form action="">
                            <input type="file" name="uploadForms" id="upload" accept=".doc,.docx,.pdf" multiple hidden>
                            <label for="upload"
                                class="max-w-full w-full min-h-[50px] border border-solid p-2 max-sm:p-1 flex flex-col justify-center items-center cursor-pointer">
                                <span class="text-[20px]"><i class="bi bi-cloud-arrow-up-fill text-primary"></i></span>
                                <p class="text-[16px] max-sm:text-[14px] text-primary text-center">Click to Upload File
                                </p>
                            </label>
                        </form>
                    </div>
                    <div id="fileWrapper">
                        <h3 class="mt-[25px] text-[20px] max-sm:text-[15px] font-bold">
                            Uploaded Documents
                            <label for="" class="text-[14px] font-medium max-sm:text-[11px]">
                                (.docx, .doc, or .pdf)
                            </label>
                        </h3>
                        <div id="scrollbar"
                            class="overflow-y-auto h-40 px-2 max-sm:px-2 max-sm:mt-1 border-2 border-gray">
                            <!-- dito ung mga inupload na file -->
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="py-2 px-6 my-5 max-sm:my-2 max-sm:py-2 max-sm:px-5 max-sm:text-[15px] tracking-widest rounded text-primary bg-secondary hover:bg-primary hover:text-secondary duration-200">
                            SUBMIT
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Main Content -->
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            ASSIGN REVIEWER
        </h2>
        <br>

        <table id="myTable" class="display overflow-scroll border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                <tr class="header-table">
                    <th class="w-[16.66%]">Research Title</th>
                    <th class="w-[16.66%]">PI Name</th>
                    <th class="w-[16.66%]">Co-Investigators</th>
                    <th class="w-[16.66%]">Assign</th>
                    <th class="w-[16.66%]">Assigned Reviewer</th>
                    <th class="w-[16.66%]">Date Reviewed</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                <tr>
                    <td>
                        <input type="checkbox">
                        <span>Brain Injury: Prevention and Treatment of Chronic Brain Injury</span>
                    </td>
                    <td>John Doe</td>
                    <td>John Doe, Alfreds Futterkiste</td>
                    <td id="openModalBtn" class="cursor-pointer">
                        Pending
                    </td>
                    <td>N/A</td>
                    <td>08/10/2025<br>18:06:25</td>
                </tr>
            </tbody>
        </table>
        <div class="grid grid-cols-4 max-sm:block gap-x-5">
            <div class="max-sm:max-w-full">
                <label for="reviewer1" class="block max-sm:text-sm">Reviewer 1</label>
                <select name="reviewer1" id="reviewer1" class="w-full max-sm:text-sm border border-darkgray rounded-md">
                    <option disabled selected>Choose Reviewer</option>
                    <option value="no1">no.1</option>
                    <option value="no2">no.2</option>
                    <option value="no3">no.3</option>
                </select>
                <label for="reviewer2" class="mt-3 block max-sm:text-sm">Reviewer 2</label>
                <select name="reviewer2" id="reviewer2" class="w-full max-sm:text-sm border border-darkgray rounded-md">
                    <option disabled selected>Choose Reviewer</option>
                    <option value="no1">no.1</option>
                    <option value="no2">no.2</option>
                    <option value="no3">no.3</option>
                </select>

                <div class="max-md:mt-3 bg-lightgray p-3 font-semibold max-sm:text-sm shadow-md rounded-md">
                    <h3 class="text-lg font-semibold max-md:text-base mb-3">Assignment of Forms</h3>
                    <div class="gap-x-3 gap-y-3 grid grid-cols-2">
                        <div class="room cursor-pointer bg-gray hover:bg-darkgray px-3 py-2 rounded-md" data-room="Form 2E">
                            Form 2E
                        </div>
                        <div class="room cursor-pointer bg-gray hover:bg-darkgray px-3 py-2 rounded-md" data-room="Form 2J">
                            Form 2J
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-md:mt-3 bg-lightgray shadow-md rounded-md p-3">
                <h3 class="text-lg font-semibold max-md:text-base mb-3">Reviewer 1</h3>
                <div class="grid grid-cols-[max-content_1fr] max-sm:grid-cols-1 gap-x-2 gap-y-3">
                    <div class="font-bold max-sm:text-sm">Name:</div>
                    <div class="mb-2 max-sm:text-sm">John Doe</div>

                    <div class="font-bold max-sm:text-sm">Type of Review:</div>
                    <div class="mb-2 max-sm:text-sm">Review Type</div>

                    <div class="font-bold max-sm:text-sm">Forms Assigned:</div>
                    <div class="mb-2 max-sm:text-sm">Form 2E</div>
                </div>
            </div>
            <div class="max-md:mt-3 bg-lightgray shadow-md rounded-md p-3">
                <h3 class="text-lg font-semibold max-md:text-base mb-3">Reviewer 2</h3>
                <div class="grid grid-cols-[max-content_1fr] max-sm:grid-cols-1 gap-x-2 gap-y-3">
                    <div class="font-bold max-sm:text-sm">Name:</div>
                    <div class="mb-2 max-sm:text-sm">John Doe</div>

                    <div class="font-bold max-md:text-sm">Type of Review:</div>
                    <div class="mb-2 max-sm:text-sm">Review Type</div>

                    <div class="font-bold max-md:text-sm">Forms Assigned:</div>
                    <div class="mb-2 max-md:text-sm">Form 2E</div>
                </div>
            </div>
            <div class="max-md:mt-3 bg-lightgray shadow-md rounded-md p-3">
                <h3 class="text-lg font-semibold max-md:text-base mb-3">Assigned Forms</h3>
                <ul id="assignedList" class="list-disc px-6 grid grid-cols-2 max-md:text-sm gap-x-2 gap-y-3"></ul>
            </div>
        </div>
        <div class="flex justify-start mt-4 mx-4">
            <button id="submitBtn"
                class="bg-secondary hover:bg-primary text-primary hover:text-secondary px-4 py-3 rounded-md uppercase tracking-widest duration-200"
                type="button">
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

    // pede nyo icomment muna to, nasa sa inyo yan HAHAHAHA
    window.addEventListener("load", () => {
        const input = document.getElementById('upload');
        const filewrapper = document.getElementById('scrollbar');

        // uploading multiple files at the same time
        input.addEventListener("change", (e) => {
            const files = e.target.files;
            for (let i = 0; i < files.length; i++) {
                let filename = files[i].name;
                let filetype = files[i].name.split(".").pop();
                fileshow(filename, filetype);
            }
        });

        const fileshow = (filename, filetype) => {
            // file box
            const showfileboxElem = document.createElement("div");
            showfileboxElem.classList.add("flex", "justify-between", "items-center", "my-[10px]", "max-sm:my-[5px]", "px-3", "py-1", "max-sm:py-0", "shadow-md", "bg-gray", "border", "border-darkgray");

            // left side
            const leftElem = document.createElement("div");
            leftElem.classList.add("flex", "items-center", "flex-wrap", "gap-[10px]", "max-sm:text-[13px]")

            // file title
            const filetitleElem = document.createElement("h3");
            filetitleElem.classList.add("font-semibold", "m-0");
            filetitleElem.innerHTML = filename;

            // right side(delete button)
            const rightElem = document.createElement("div");
            rightElem.classList.add("right");
            const crossElem = document.createElement("span");
            crossElem.classList.add("cursor-pointer", "text-primary", "text-[25px]", "max-sm:text-[20px]");
            crossElem.innerHTML = "&#215;";

            // adds the content to right side of the file box
            rightElem.append(crossElem);

            // adds the content to the left side of the file box
            leftElem.append(filetitleElem);

            // adds the right and left content of the file box
            showfileboxElem.append(leftElem);
            showfileboxElem.append(rightElem);

            // adds the file box
            filewrapper.append(showfileboxElem);

            crossElem.addEventListener("click", () => {
                filewrapper.removeChild(showfileboxElem);
            });
        }
    });

    // modal form (open, close)
    const openBtn = document.getElementById('openModalBtn');
    const closeBtn = document.getElementById('closeModalBtn');
    const modal = document.getElementById('modalOverlay');

    openBtn.addEventListener('click', () => {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });

    closeBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    // Optional: close modal when clicking outside the modal content
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });
</script>