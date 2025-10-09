@section('title', 'Assign Reviewer')
<x-superadmin-layout>
    <!-- Main Content -->
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            ASSIGN REVIEWER
        </h2>
        <br>

            <table id="myTable" class="display overflow-scroll border-collapse w-full">
                <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                    <tr class="header-table">
                        <th class="w-[16.66%]">Research Title</th>
                        <th class="w-[16.66%]">PI Name</th>
                        <th class="w-[16.66%]">Co-Investigators</th>
                        <th class="w-[16.66%]">Assign</th>
                    </tr>
                </thead>
                <tbody class="text-base/7 max-lg:text-sm/6">
                    @foreach ($piWithForms as $assignReviewer)
                    <tr>
                        <td>
                            <input type="checkbox" value="{{ $assignReviewer->user_ID }}">
                            <span>{{ $assignReviewer->researchInformation?->research_title }}</span>
                        </td>
                        <td>{{ $assignReviewer->user_Fname }} {{ $assignReviewer->user_MI }} {{ $assignReviewer->user_Lname }}</td>
                        <td>{{ $assignReviewer->researchInformation?->research_CoInvestigator }}</td>
                        <td>Pending</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </main>
</x-superadmin-layout>