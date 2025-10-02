@section('title', 'Ongoing Reviews')
<x-superadmin-layout>
    <!-- Main Content -->
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            ONGOING REVIEWS
        </h2>
        <br>

        <table id="myTable" class="display overflow-scroll border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                <tr class="header-table">
                    <th class="w-[16.66%]">Research Protocol</th>
                    <th class="w-[16.66%]">Research Title</th>
                    <th class="w-[16.66%]">P.I. Name</th>
                    <th class="w-[16.66%]">Co-I. Name(s)</th>
                    <th class="w-[16.66%]">View</th>
                    <th class="w-[16.66%]">Date Submitted</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                <tr>
                    <td>ERB 2025-001</td>
                    <td>Analyzing the Influence of Cultural Factors on Consumer Behavior</td>
                    <td>Karin Josephs</td>
                    <td>
                        Alexander Feuer<br>
                        Rene Phillips
                    </td>
                    <td><button type="submit" class="border-2 p-[5px] hover:bg-gray">View</button></td>
                    <td>4/15/2025<br>21:37:23</td>
                </tr>
                <tr>
                    <td>ERB 2025-002</td>
                    <td>Investigating the Link Between Air Pollution and Respiratory Diseases</td>
                    <td>Paula Parente</td>
                    <td>
                        Pascale Cartrain<br>
                        Miguel Angel Paolino
                    </td>
                    <td><button type="submit" class="border-2 p-[5px] hover:bg-gray">View</button></td>
                    <td>4/15/2025<br>21:37:23</td>
                </tr>
                <tr>
                    <td>ERB 2025-003</td>
                    <td>The Role of Artificial Intelligence in Enhancing Healthcare Delivery</td>
                    <td>Yvonne Moncada</td>
                    <td>
                        Paolo Accorti<br>
                        Peter Franken
                    </td>
                    <td><button type="submit" class="border-2 p-[5px] hover:bg-gray">View</button></td>
                    <td>4/15/2025<br>21:37:23</td>
                </tr>
                <tr>
                    <td>ERB 2025-004</td>
                    <td>Evaluating the Effectiveness of Mindfulness-Based Stress Reduction in Chronic Pain
                        Management</td>
                    <td>Catherine Dewey</td>
                    <td>
                        Philip Cramer<br>
                        Patricia McKenna
                    </td>
                    <td><button type="submit" class="border-2 p-[5px] hover:bg-gray">View</button></td>
                    <td>4/15/2025<br>21:37:23</td>
                </tr>
            </tbody>
        </table>
    </main>
</x-superadmin-layout>
