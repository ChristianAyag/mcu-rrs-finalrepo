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
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <h2 class="max-2xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            ASSIGN REVIEWER
        </h2>
        <br>

        <table id="myTable" class="min-w-full display overflow-scroll whitespace-no-wrap border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-[18px]/7 max-lg:text-[16px]">
                <tr class="header-table">
                    <th class="w-[20.00%]">Protocol ID</th>
                    <th class="w-[20.00%]">Research Title</th>
                    <th class="w-[20.00%]">Assign</th>
                    <th class="w-[20.00%]">Assigned Reviewer</th>
                    <th class="w-[20.00%]">Date Reviewed</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-[17px]/6 max-lg:text-[15px]">
                <tr>
                    <td>001</td>
                    <td>Brain Injury: Prevention and Treatment of Chronic Brain Injury</td>
                    <td id="openModalBtn" class="cursor-pointer">
                        Pending
                    </td>
                    <td>N/A</td>
                    <td>08/10/2025<br>18:06:25</td>
                </tr>
            </tbody>
        </table>
    </main>
</x-iacuc-layout>
<script>
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