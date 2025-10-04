<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Default title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- body layout -->
    <div
        class="min-h-screen flex sm:flex flex-col justify-center items-center sm:justify-center sm:items-center pt-6 sm:pt-0 max-sm:mx-2 max-sm:mt-auto">
        <div>
            <!-- DTO UNG LOGO KAYA HNDI NAKA CENTERALIZED BY Y-AXIS -->
            <x-application-logo class="w-8 text-gray-500" />
        </div>

        <div
            class="w-full max-w-[450px] mt-2 px-6 py-4 shadow-lg border-4 border-gray text-black overflow-hidden max-sm:max-h-[80vh] max-sm:overflow-y-auto max-sm:relative rounded-lg max-sm:rounded-lg">
            <form method="POST" action="">
                <h2 class="mb-4 font-medium uppercase text-xl max-sm:text-base text-primary">FOR NEW USER</h2>
                @csrf
                <div class="mt-2">
                    <x-input-label for="reviewer_College" :value="__('College')" />
                    <x-combo-box id="reviewer_College" name="reviewer_College" onchange="updateDepartments()"
                        class="block border-gray mt-1 w-full text-sm max-sm:text-[13px] h-[35px] leading-[15px]" />
                    <x-input-error :messages="$errors->get('reviewer_College')" class="mt-2" />
                </div>
                <div class="mt-2">
                    <x-input-label for="reviewer_Dept" :value="__('Department')" />
                    <div id="departmentWrapper">
                        <select id="department" name="reviewer_Dept"
                            class="w-full text-sm mt-1 border-gray rounded-md">
                            <option value="" disabled selected>-- Select Department --</option>
                        </select>
                    </div>
                    <x-input-error :messages="$errors->get('reviewer_Dept')" class="mt-2" />
                </div>
                <button type="submit"
                    class="mt-4 bg-secondary hover:bg-primary px-4 py-2 text-primary hover:text-secondary uppercase tracking-widest duration-200 rounded-lg">
                    Submit
                </button>
            </form>
        </div>
    </div>
</body>
<script>
    // Program → Department mapping
    const departmentOptions = {
        cas: ["Bachelor of Science in Biology", "Bachelor of Science in Computer Science",
            "Bachelor of Science in Information Technology", "Bachelor of Science in Psychology",
            "Bachelor of Arts in Communication", "Bachelor of Science in Entertainment and Multimedia Computing"],
        ioe: ["Bachelor of Secondary Education"],
        sbm: ["Bachelor of Science in Business Administration", "Bachelor of Accountancy",
            "Bachelor of Science in Entrepreneurship", "Bachelor of Science in Hospitality Management",
            "Bachelor of Science in Tourism Management"],
        medical: ["Bachelor of Science in Radiologic Technology", "Bachelor of Science in Medical Technology",
            "Doctor of Dental Medicine", "Doctor of Medicine", "Bachelor of Science in Nursing",
            "Doctor of Optometry", "Bachelor of Science in Pharmacy", "Bachelor of Science in Physical Therapy"]
    };

    function updateDepartments() {
        const program = document.getElementById("pi_program").value;
        const departmentSelect = document.getElementById("department");
        const departmentWrapper = document.getElementById("departmentWrapper");

        // Clear old options
        departmentSelect.innerHTML = '<option value="" disabled selected>-- Select Department --</option>';

        if (program && departmentOptions[program]) {
            // Show department dropdown
            departmentWrapper.style.display = "block";

            departmentOptions[program].forEach(dept => {
                const option = document.createElement("option");
                option.textContent = dept;
                departmentSelect.appendChild(option);
            });
        }
    }

    let currentStep = 1;
    const totalSteps = 2;

    function showStep(step) {
        // hide all steps
        for (let i = 1; i <= totalSteps; i++) {
            document.getElementById("step" + i).classList.remove("active");
            // disable required for hidden inputs
            document.querySelectorAll("#step" + i + " [required]").forEach(input => {
                input.dataset.required = "true";
                input.removeAttribute("required");
            });
        }

        // show current step
        const currentDiv = document.getElementById("step" + step);
        currentDiv.classList.add("active");
        // enable required for visible inputs
        currentDiv.querySelectorAll("[data-required]").forEach(input => {
            input.setAttribute("required", "true");
        });
    }

    function nextStep() {
        const form = document.getElementById("studentForm");
        if (form.checkValidity()) { // validate current step
            currentStep++;
            showStep(currentStep);
        } else {
            form.reportValidity(); // show validation error
        }
    }

    function prevStep() {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    }

    // initialize
    document.addEventListener("DOMContentLoaded", () => showStep(currentStep));
</script>

</html>