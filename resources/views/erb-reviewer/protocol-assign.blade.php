@section('title', 'Research Protocol Assign')
<x-erb-reviewer>
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-xl:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            RESEARCH PROTOCOL ASSIGN
        </h2>
        <br>

        <table id="myTable" class="display overflow-scroll border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                <tr class="header-table">
                    <th class="w-[12.50%]">Research Title</th>
                    <th class="w-[12.50%]">P.I. Name</th>
                    <th class="w-[12.50%]">Research Protocol</th>
                    <th class="w-[12.50%]">Type of Review</th>
                    <th class="w-[12.50%]">Form 2(E)</th>
                    <th class="w-[12.50%]">Form 2(J)</th>
                    <th class="w-[12.50%]">Form 3(E)</th>
                    <th class="w-[12.50%]">Form 3(B)</th>
                </tr>
            </thead>

            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                <tr>
                    <td>Brain Injury: Prevention and Treatment of Chronic Brain Injury</td>
                    <td>John Doe</td>
                    <td>ERB 2025-001</td>
                    <td>Full Board</td>
                    <td>
                        <a href="{{ url('erb-reviewer/forms/form2e') }}">
                            <button type="button" class="border-2 p-[5px] hover:bg-gray">
                                View
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('erb-reviewer/forms/form2j') }}">
                            <button type="button" class="border-2 p-[5px] hover:bg-gray">
                                View
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('erb-reviewer/forms/form3e') }}">
                            <button type="button" class="border-2 p-[5px] hover:bg-gray">
                                View
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('erb-reviewer/forms/form3b') }}">
                            <button class="border-2 p-[5px] hover:bg-gray">
                                View
                            </button>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
</x-erb-reviewer>