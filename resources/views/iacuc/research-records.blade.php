@section('title','Research Records')
<x-iacuc-layout>
    <!-- Main Content -->
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <h2 class="max-2xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            RESEARCH RECORDS
        </h2>
        <br>

        <table id="myTable" class="min-w-full display overflow-scroll whitespace-no-wrap border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-[18px]/7 max-lg:text-[16px]">
                <tr class="header-table">
                    <th class="w-[9.09%]">Research Title</th>
                    <th class="w-[9.09%]">File ID</th>
                    <th class="w-[9.09%]">P.I. Name</th>
                    <th class="w-[9.09%]">Date of Submission</th>
                    <th class="w-[9.09%]">Classification of Reviews</th>
                    <th class="w-[9.09%]">Status of Review</th>
                    <th class="w-[9.09%]">Reviewer</th>
                    <th class="w-[9.09%]">Decision</th>
                    <th class="w-[9.09%]">Research File Type</th>
                    <th class="w-[9.09%]">Date Edited</th>
                    <th class="w-[9.09%]">Remarks</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-[17px]/6 max-lg:text-[15px]">
                <tr>
                    <td>Brain Injury: Prevention and Treatment of Chronic Brain Injury</td>
                    <td>001</td>
                    <td>John Doe</td>
                    <td>2025/05/06<br>16:43:20</td>
                    <td>Expedited</td>
                    <td>Ongoing Review</td>
                    <td>Thomas Hardy</td>
                    <td>Ongoing</td>
                    <td>form2a.pdf</td>
                    <td>N/A</td>
                    <td>Rejected</td>
                </tr>
            </tbody>
        </table>
    </main>
</x-iacuc-layout>