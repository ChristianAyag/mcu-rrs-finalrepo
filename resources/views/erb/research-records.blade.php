@section('title', 'Research Records')
<x-erb-layout>
    <!-- Main Content -->
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            RESEARCH RECORDS
        </h2>
        <br>

        <table id="myTable" class="display overflow-scroll border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-sm:text-base/7">
                <!-- inalis ko muna ung File ID sa table -->
                <tr class="header-table">
                    <th class="w-[10.00%]">Research Title</th>
                    <th class="w-[10.00%]">P.I. Name</th>
                    <th class="w-[10.00%]">Date of Submission</th>
                    <th class="w-[10.00%]">Classification of Reviews</th>
                    <th class="w-[10.00%]">Status of Review</th>
                    <th class="w-[10.00%]">Reviewer</th>
                    <th class="w-[10.00%]">Decision</th>
                    <th class="w-[10.00%]">Research File Type</th>
                    <th class="w-[10.00%]">Date Edited</th>
                    <th class="w-[10.00%]">Remarks</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                <!-- inalis ko muna ung File ID sa table -->
                <tr>
                    <td>Brain Injury: Prevention and Treatment of Chronic Brain Injury</td>
                    <td>
                        <!-- url for the array in submitted-documents.blade.php -->
                        <a href="{{ url('/erb/submitted-documents?user_id=1') }}">
                            John Doe
                        </a> 
                    </td>
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