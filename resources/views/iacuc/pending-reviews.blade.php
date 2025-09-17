@section('title','Pending Reviews')
<x-iacuc-layout>
    <!-- Main Content -->
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <h2 class="max-2xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            PENDING REVIEWS
        </h2>
        <br>

        <table id="myTable" class="min-w-full display overflow-scroll whitespace-no-wrap border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-[18px]/7 max-lg:text-[16px]">
                <tr class="header-table">
                    <th class="w-[16.66%]">P.I. Name</th>
                    <th class="w-[16.66%]">Research Title</th>
                    <th class="w-[16.66%]">Assigned Reviewer</th>
                    <th class="w-[16.66%]">Status</th>
                    <th class="w-[16.66%]">Date Submitted</th>
                    <th class="w-[16.66%]">Review Date</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-[17px]/6 max-lg:text-[15px]">
                <tr>
                    <td>John Doe</td>
                    <td>Brain Injury: Prevention and Treatment of Chronic Brain Injury</td>
                    <td><button type="submit" class="border-2 p-[5px] hover:bg-gray">Assign</button></td>
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
</x-iacuc-layout>