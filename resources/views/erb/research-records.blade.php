@section('title', 'Research Records')
<x-erb-layout>
    <!-- Main Content -->
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <h2 class="max-2xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            RESEARCH RECORDS
        </h2>
        <br>

        <table id="myTable"
            class="table-fixed min-w-full display overflow-scroll whitespace-no-wrap border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-sm:text-base/7">
                <!-- inalis ko muna ung File ID sa table -->
                <tr class="header-table">
                    <th>Research Title</th>
                    <th>P.I. Name</th>
                    <th>Date of Submission</th>
                    <th>Classification of Reviews</th>
                    <th>Status of Review</th>
                    <th>Reviewer</th>
                    <th>Decision</th>
                    <th>Research File Type</th>
                    <th>Date Edited</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-base/6 max-lg:text-sm/6">
                <!-- inalis ko muna ung File ID sa table -->
                <tr>
                    <td>Brain Injury: Prevention and Treatment of Chronic Brain Injury</td>
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
</x-erb-layout>