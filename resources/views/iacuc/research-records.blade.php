@section('title','Research Records')
<x-iacuc-layout>
    <!-- Main Content -->
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-xl:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            RESEARCH RECORDS
        </h2>
        <br>

        <table id="myTable" class="display overflow-scroll border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base/6">
                <tr class="header-table">
                    <th class="w-[11.11%]">Research Title</th>
                    <th class="w-[11.11%]">P.I. Name</th>
                    <th class="w-[11.11%]">Date of Submission</th>
                    <th class="w-[11.11%]">Classification of Reviews</th>
                    <th class="w-[11.11%]">Reviewer no. 1</th>
                    <th class="w-[11.11%]">Status of Review</th>
                    <th class="w-[11.11%]">Reviewer no. 2</th>
                    <th class="w-[11.11%]">Status of Review</th>
                    <th class="w-[11.11%]">Decision</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                <tr>
                    <td>Brain Injury: Prevention and Treatment of Chronic Brain Injury</td>
                    <td>
                        <!-- url for the array in submitted-documents.blade.php -->
                        <a href="{{ url('/iacuc/submitted-documents?user_id=1') }}">
                            John Doe
                        </a> 
                    </td>
                    <td>2025/05/06<br>16:43:20</td>
                    <td>Expedited</td>
                    <td>Reviewer 1</td>
                    <td>Status</td>
                    <td>Reviewer 2</td>
                    <td>Status</td>
                    <td>Decision</td>
                </tr>
            </tbody>
        </table>
    </main>
</x-iacuc-layout>