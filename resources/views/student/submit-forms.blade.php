@section('title', 'Submit Forms')
<x-student-layout>
    <!-- Main Content -->
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            SUBMIT FORMS
        </h2>
        <br>
        <div class="p-6 max-md:p-0 space-y-10">
            <div class="my-4">
                <h2 class="mb-4 font-semibold text-[20px]">Deficiencies</h2>
                @forelse($submissionForms as $form)
                    <a href="{{ route('student.submit.form', $form->form_id) }}">
                        <div
                            class="hover:bg-gray my-3 bg-lightgray p-4 rounded-lg flex justify-between items-center duration-200">
                            <div class="block items-center flex-wrap gap-[10px]">
                                <h2 class="text-lg max-sm:text-base font-semibold">
                                    {{ $form->form_code }}
                                </h2>
                                <label class="mt-1 text-sm max-sm:text-xs">
                                    {{ $form->form_name }}
                                </label>
                            </div>
                        </div>
                    </a>
                @empty
                    <p class="text-sm text-gray-600">No assigned forms to submit.</p>
                @endforelse
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