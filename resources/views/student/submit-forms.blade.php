@section('title', 'Submit Forms')
<x-student-layout>
    <!-- Main Content -->
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <h2 class="max-2xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            SUBMIT FORMS
        </h2>
        <br>
        <div class="p-6 max-md:p-0 space-y-10">
            <div class="my-4">
                <h2 class="mb-4 font-semibold text-[20px]">Deficiencies</h2>
                <!-- nilagyan ko lang ng href para madirect sa submit-form-layout page -->
                <a href="{{ url('student/submit-form-layout') }}">
                    <div
                        class="hover:bg-gray my-3 bg-lightgray p-4 rounded-lg flex justify-between items-center duration-200">
                        <div class="block items-center flex-wrap gap-[10px]">
                            <h2 class="text-lg max-sm:text-base font-semibold">FORM 2(A)</h2>
                            <p class="text-sm max-sm:text-xs">Due at 08/10/2025</p>
                            <label for="" class="mt-1 text-sm max-sm:text-xs">STUDY PROTOCOL REVIEW CHECKLIST</label>
                        </div>
                    </div>
                </a>
                <div
                    class="hover:bg-gray my-3 bg-lightgray p-4 rounded-lg flex justify-between items-center duration-200">
                    <div class="block items-center flex-wrap gap-[10px]">
                        <h2 class="text-lg max-sm:text-base font-semibold">FORM 2(B)</h2>
                        <p class="text-sm max-sm:text-xs">Due at 08/10/2025</p>
                        <label for="" class="mt-1 text-sm max-sm:text-xs">APPLICATION FOR INITIAL REVIEW</label>
                    </div>
                </div>
                <div
                    class="hover:bg-gray my-3 bg-lightgray p-4 rounded-lg flex justify-between items-center duration-200">
                    <div class="block items-center flex-wrap gap-[10px]">
                        <h2 class="text-lg max-sm:text-base font-semibold">FORM 2(C)</h2>
                        <p class="text-sm max-sm:text-xs">Due at 08/10/2025</p>
                        <label for="" class="mt-1 text-sm max-sm:text-xs">INFORMED CONSENT FORM</label>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-student-layout>
<script>
    // pede nyo icomment muna to, nasa sa inyo yan HAHAHAHA
    window.addEventListener("load", () => {
        const input = document.getElementById('upload');
        const filewrapper = document.getElementById('fileWrapper');

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
            showfileboxElem.classList.add("flex", "justify-between", "items-center", "my-[10px]", "px-3", "py-1", "shadow-md", "bg-gray", "border", "border-darkgray");

            // left side
            const leftElem = document.createElement("div");
            leftElem.classList.add("flex", "items-center", "flex-wrap", "gap-[10px]")

            // file title
            const filetitleElem = document.createElement("h3");
            filetitleElem.classList.add("font-semibold", "m-0");
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
        }
    });
</script>