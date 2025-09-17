@section('title', 'Assign Reviewer')
<x-superadmin-layout>
    <!-- Main Content -->
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <h2 class="max-2xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            ASSIGN REVIEWER
        </h2>
        <br>

        <table id="myTable" class="table-fixed min-w-full display overflow-scroll whitespace-no-wrap border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                <tr class="header-table">
                    <th>Protocol ID</th>
                    <th>Research Title</th>
                    <th>Assigned Reviewer</th>
                    <th>Date Reviewed</th>
                    <th>Accept/Reject</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                <tr>
                    <td>001</td>
                    <td>Brain Injury: Prevention and Treatment of Chronic Brain Injury</td>
                    <td>N/A</td>
                    <td>08/10/2025<br>18:06:25</td>
                    <td>Accepted</td>
                </tr>
            </tbody>
        </table>
    </main>
</x-superadmin-layout>