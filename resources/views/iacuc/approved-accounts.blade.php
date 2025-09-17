@section('title','Approved Accounts')
<x-iacuc-layout>
    <!-- Main Content -->
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <h2 class="max-2xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            APPROVED ACCOUNTS
        </h2>
        <br>

        <table id="myTable" class="min-w-full display overflow-scroll whitespace-no-wrap border-collapse w-full">
            <thead class="bg-primary text-white text-[18px]/7 max-lg:text-[16px]">
                <tr class="header-table">
                    <th class="w-[33.33%]">P.I. Name</th>
                    <th class="w-[33.33%]">Date Registered</th>
                    <th class="w-[33.33%]">Date Approved</th>
                </tr>
            </thead>
            <tbody class="text-[17px]/6 max-lg:text-[15px]">
                <tr>
                    <td>Renate Messner</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td>4/16/2025<br>22:57:53</td>
                </tr>
                <tr>
                    <td>John Steel</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <td>Carlos González</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td>4/15/2025<br>21:37:23</td>
                </tr>
            </tbody>
        </table>
    </main>
</x-iacuc-layout>