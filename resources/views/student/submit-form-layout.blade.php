<x-student-layout>
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <h2 class="max-2xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            SUBMIT FORMS
        </h2>
        <br>
        <div class="p-6 max-md:p-0 space-y-10">
            <div class="duration-200 my-4 p-4 max-sm:p-0">
                <h2 class="font-semibold text-2xl max-sm:text-[19px]">Form 2(A)</h2>
                <p class="max-md:text-[15px]">Due at August 10, 2025 11:59PM</p><br>
                <p class="max-md:text-[15px]">Attach the files here</p>
                <div class="max-w-xs w-xs cursor-pointer">
                    <div class="">
                        <input type="file" name="uploadForms" id="upload" accept=".doc,.docx,.pdf" multiple hidden>
                        <label for="upload"
                            class="w-full text-md min-h-[50px] flex-col justify-center items-center rounded cursor-pointer">
                            <i class="bi bi-cloud-arrow-up-fill text-primary"></i>
                            <span class="text-primary mx-1 max-md:text-[15px]">
                                Click to upload file/s
                            </span>
                        </label>
                    </div>
                </div>
                <div id="fileWrapper">
                    <h3 class="my-[30px] max-md:mb-3 text-[20px] max-md:text-[17px] font-bold">
                        Uploaded Documents
                        <label for="" class="text-[16px] max-md:text-[13px]">
                            (.docx, .doc, or .pdf)
                        </label>
                    </h3>
                    <div id="scrollbar" class="h-64 px-2 border-2 border-gray">
                        <!-- Lists of all files to upload -->
                    </div>
                </div>

                <div class="">
                    <x-primary-button class="mt-4">
                        SUBMIT
                    </x-primary-button>
                </div>
            </div>
        </div>
    </main>
</x-student-layout>
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
            showfileboxElem.classList.add("flex", "text-base", "max-sm:text-sm", "justify-between", "items-center", "my-[10px]", "px-3", "py-1", "shadow-md", "bg-lightgray", "border", "border-darkgray");

            // left side
            const leftElem = document.createElement("div");
            leftElem.classList.add("flex", "items-center", "flex-wrap", "gap-[10px]")

            // file title
            const filetitleElem = document.createElement("h3");
            filetitleElem.classList.add("font-semibold", "break-all", "m-0");
            filetitleElem.innerHTML = filename;

            // right side(delete button)
            const rightElem = document.createElement("div");
            rightElem.classList.add("right");
            const crossElem = document.createElement("span");
            crossElem.classList.add("cursor-pointer", "text-primary", "text-[25px]");
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
</script>