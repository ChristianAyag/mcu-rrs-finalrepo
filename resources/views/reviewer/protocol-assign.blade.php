@section('title', 'Research Protocol Assign')
<x-review-layout>
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <h2 class="max-2xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            RESEARCH PROTOCOL ASSIGN
        </h2>
        <br>
        
        <table id="myTable" class="min-w-full display overflow-scroll whitespace-no-wrap border-collapse w-full">
            <thead class="bg-primary text-white text-[18px]/7 max-lg:text-[16px]">
                <tr class="header-table">
                    <th class="w-[14.28%]">Research Title</th>
                    <th class="w-[14.28%]">P.I. Name</th>
                    <th class="w-[14.28%]">Research Protocol</th>
                    <th class="w-[14.28%]">Type of Review</th>
                    <th class="w-[14.28%]">Form 2(E)</th>
                    <th class="w-[14.28%]">Form 2(J)</th>
                    <th class="w-[14.28%]">Form 3(E)</th>
                </tr>
            </thead>
            <tbody class="text-[17px]/6 max-lg:text-[15px]">
                <tr>
                    <td>Brain Injury: Prevention and Treatment of Chronic Brain Injury</td>
                    <td>John Doe</td>
                    <td>ERB 2025-001</td>
                    <td>Amendment Review</td>
                    <td>
                        <a href="{{ url('reviewer/forms/form2e') }}">
                            <button type="button" class="border-2 p-[5px] hover:bg-gray">
                                View
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('reviewer/forms/form2j') }}">
                            <button type="button" class="border-2 p-[5px] hover:bg-gray">
                                View
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('reviewer/forms/form3e') }}">
                            <button type="button" class="border-2 p-[5px] hover:bg-gray">
                                View
                            </button>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
</x-review-layout>