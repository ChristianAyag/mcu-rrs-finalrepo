<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','Default title')</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts and Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.5/css/responsive.dataTables.css">

    <!-- DataTables and jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.5/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.5/js/responsive.dataTables.js"></script>
</head>

<body>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('reviewer.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <script>
        new DataTable('#myTable', {
            paging: false,
            responsive: true,
            scrollY: '300px'
        });

        document.addEventListener("DOMContentLoaded", () => {
            const radios = document.querySelectorAll("input[type=radio]");

            radios.forEach(radio => {
                radio.addEventListener("change", () => {
                    const groupName = radio.name;

                    // Disable all textboxes/textarea in this group
                    document.querySelectorAll(`[data-group='${groupName}']`).forEach(el => {
                        el.disabled = true;
                        el.value = ""; // optional reset (mawawala ung iniinput mo pag clinick mo ung ibang choices hehez)
                    });

                    // Enable the target linked to this radio (if any)
                    if (radio.dataset.textbox) {
                        const target = document.getElementById(radio.dataset.textbox);
                        if (target) {
                            target.disabled = false;
                            target.focus();
                        }
                    }
                });
            });

            // Auto-check radio when user types in a linked input/textarea
            document.querySelectorAll("input[type=text][id], textarea[id]").forEach(el => {
                el.addEventListener("input", () => {
                    const linkedRadio = document.querySelector(`input[type=radio][data-textbox='${el.id}']`);
                    if (linkedRadio) linkedRadio.checked = true;
                });
            });
        });
        dropDownMenu();
        
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');
            const isHidden = sidebar.classList.contains('-translate-x-full');

            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }

        // Set Page Title Based on URL Path
        const titles = {
            "/reviewer/dashboard": "DASHBOARD",
            "/reviewer/protocol-assign": "PROTOCOL ASSIGN",
            "/reviewer/settings": "SETTINGS",
            "/reviewer/forms/form2e": "FORM 2(E)",
            "/reviewer/forms/form2j": "FORM 2(J)",
            "/reviewer/forms/form3e": "FORM 3(E)"
        };

        const path = window.location.pathname;
        const pageTitle = titles[path] || "Page";

        // Update the text content of the header and the <title> tag
        document.getElementById("page-title").textContent = pageTitle;
    </script>
</body>

</html>