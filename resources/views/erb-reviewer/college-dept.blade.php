<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Reviewer Information')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md mt-6 px-6 py-4 shadow-lg border-4 border-gray text-black overflow-hidden rounded-lg bg-white">

        <form method="POST" action="{{ route('erb-reviewer.college-dept.store') }}">
            @csrf
            <h2 class="mb-4 font-medium uppercase text-xl text-primary">FOR NEW USER</h2>

            <!-- College -->
            <div class="mt-2">
                <x-input-label for="reviewer_College" :value="__('College')" />
                <select id="reviewer_College" name="Reviewer_Dept" onchange="updateDepartments()"
                    class="block border-gray mt-1 w-full text-sm rounded-md">
                    <option value="" disabled selected>Select College</option>
                    <option value="cas">CAS</option>
                    <option value="ioe">IOE</option>
                    <option value="sbm">SBM</option>
                    <option value="medical">Medical</option>
                </select>
                <x-input-error :messages="$errors->get('Reviewer_Dept')" class="mt-2" />
            </div>

            <!-- Department -->
            <div class="mt-2">
                <x-input-label for="reviewer_Dept" :value="__('Department')" />
                <div id="departmentWrapper">
                    <select id="department" name="Reviewer_Prog"
                        class="w-full text-sm mt-1 border-gray rounded-md">
                        <option value="" disabled selected>-- Select Department --</option>
                    </select>
                </div>
                <x-input-error :messages="$errors->get('Reviewer_Prog')" class="mt-2" />
            </div>

            <button type="submit"
                class="mt-4 bg-secondary hover:bg-primary px-4 py-2 text-primary hover:text-secondary uppercase tracking-widest duration-200 rounded-lg">
                Submit
            </button>
        </form>

    </div>

    <script>
        // College → Department mapping
        const departmentOptions = {
            cas: [
                "Bachelor of Science in Biology",
                "Bachelor of Science in Computer Science",
                "Bachelor of Science in Information Technology",
                "Bachelor of Science in Psychology",
                "Bachelor of Arts in Communication",
                "Bachelor of Science in Entertainment and Multimedia Computing"
            ],
            ioe: [
                "Bachelor of Secondary Education"
            ],
            sbm: [
                "Bachelor of Science in Business Administration",
                "Bachelor of Accountancy",
                "Bachelor of Science in Entrepreneurship",
                "Bachelor of Science in Hospitality Management",
                "Bachelor of Science in Tourism Management"
            ],
            medical: [
                "Bachelor of Science in Radiologic Technology",
                "Bachelor of Science in Medical Technology",
                "Doctor of Dental Medicine",
                "Doctor of Medicine",
                "Bachelor of Science in Nursing",
                "Doctor of Optometry",
                "Bachelor of Science in Pharmacy",
                "Bachelor of Science in Physical Therapy"
            ]
        };

        function updateDepartments() {
            const college = document.getElementById("reviewer_College").value;
            const departmentSelect = document.getElementById("department");
            const departmentWrapper = document.getElementById("departmentWrapper");

            // Clear old options
            departmentSelect.innerHTML = '<option value="" disabled selected>-- Select Department --</option>';

            if (college && departmentOptions[college]) {
                departmentWrapper.style.display = "block";
                departmentOptions[college].forEach(dept => {
                    const option = document.createElement("option");
                    option.value = dept;
                    option.textContent = dept;
                    departmentSelect.appendChild(option);
                });
            }
        }
    </script>
</body>
</html>