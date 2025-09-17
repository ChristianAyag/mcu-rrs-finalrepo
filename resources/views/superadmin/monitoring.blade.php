@section('title', 'Monitoring Status')
<x-superadmin-layout>
    <!-- Main Content -->
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <h2 class="max-2xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            MONITORING STATUS
        </h2>
        <br>

        <table id="myTable" class="table-fixed min-w-full display overflow-scroll whitespace-no-wrap border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                <tr class="header-table">
                    <th>Approval of Accounts</th>
                    <th>Assignment of Forms</th>
                    <th>Student Submission</th>
                    <th>Review Approval Date</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
            </tbody>
        </table>
    </main>
</x-superadmin-layout>