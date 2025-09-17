@section('title', 'Pending Reviews')
<x-superadmin-layout>
    <!-- Main Content -->
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <h2 class="max-2xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            PENDING REVIEWS
        </h2>
        <br>

        <table id="myTable" class="table-fixed min-w-full display overflow-scroll whitespace-no-wrap border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                <tr class="header-table">
                    <th>P.I. Name</th>
                    <th>Research Title</th>
                    <th>Assigned Reviewer</th>
                    <th>Status</th>
                    <th>Date Submitted</th>
                    <th>Review Date</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                <tr>
                    <td>John Doe</td>
                    <td>Brain Injury: Prevention and Treatment of Chronic Brain Injury</td>
                    <td>N/A</td>
                    <td>Not Reviewed</td>
                    <td>N/A</td>
                    <td>N/A</td>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Foods for Health: Personalized Food and Nutritional Metabolic Profiling to Improve
                        Health
                    </td>
                    <td>Mario Pontes</td>
                    <td>Ongoing Review</td>
                    <td>4/15/2025<br>21:37:23</td>
                    <td>4/15/2025<br>22:37:50</td>
                </tr>
            </tbody>
        </table>
    </main>
</x-superadmin-layout>