@section('title', 'Reviewers Checklists')
<x-erb-layout>
    <!-- Main Content -->
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <h2 class="max-2xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            REVIEWERS CHECKLIST
        </h2>
        <br>

        <table id="myTable"
            class="table-fixed min-w-full display overflow-scroll whitespace-no-wrap border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-2xl:text-base/7">
                <tr class="header-table">
                    <th>Research Protocol</th>
                    <th>Research Title</th>
                    <th>P.I. Name</th>
                    <th>Co-I. Name(s)</th>
                    <th>View</th>
                    <th>Date Submitted</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-base/7 max-2xl:text-sm/6">
                <tr>
                    <td>2025-001</td>
                    <td>Analyzing the Influence of Cultural Factors on Consumer Behavior</td>
                    <td>Karin Josephs</td>
                    <td>
                        Alexander Feuer<label for="">,</label><br>
                        Rene Phillips
                    </td>
                    <td><button type="button" class="border-2 p-[5px] hover:bg-gray">View</button></td>
                    <td>4/15/2025<br>21:37:23</td>
                </tr>
                <tr>
                    <td>2025-002</td>
                    <td>Investigating the Link Between Air Pollution and Respiratory Diseases</td>
                    <td>Paula Parente</td>
                    <td>
                        Pascale Cartrain<label for="">,</label><br>
                        Miguel Angel Paolino
                    </td>
                    <td><button type="button" class="border-2 p-[5px] hover:bg-gray">View</button></td>
                    <td>4/15/2025<br>21:37:23</td>
                </tr>
                <tr>
                    <td>2025-003</td>
                    <td>The Role of Artificial Intelligence in Enhancing Healthcare Delivery</td>
                    <td>Yvonne Moncada</td>
                    <td>
                        Philip Cramer<label for="">,</label><br>
                        Patricia McKenna
                    </td>
                    <td><button type="button" class="border-2 p-[5px] hover:bg-gray">View</button></td>
                    <td>4/15/2025<br>21:37:23</td>
                </tr>
                <tr>
                    <td>2025-004</td>
                    <td>Evaluating the Effectiveness of Mindfulness-Based Stress Reduction in Chronic Pain
                        Management</td>
                    <td>Catherine Dewey</td>
                    <td>
                        Philip Cramer<label for="">,</label><br>
                        Patricia McKenna
                    </td>
                    <td><button type="button" class="border-2 p-[5px] hover:bg-gray">View</button></td>
                    <td>4/15/2025<br>21:37:23</td>
                </tr>
            </tbody>
        </table>
    </main>
</x-erb-layout>