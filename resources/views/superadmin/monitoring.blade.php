@section('title', 'Monitoring Status')
<x-superadmin-layout>
    <!-- Main Content -->
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            MONITORING STATUS
        </h2>
        <br>

        <table id="myTable" class="display overflow-scroll border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                <tr class="header-table">
                    <th class="w-[16.67%]">Principal Investigator ID</th>
                    <th class="w-[16.67%]">Principal Investigator Name</th>
                    <th class="w-[16.67%]">Account Approval Date</th>
                    <th class="w-[16.67%]">Assignment of Forms Date</th>
                    <th class="w-[16.67%]">Student Submission</th>
                    <th class="w-[16.67%]">Review Approval Date</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                @foreach ($monitor as $users)
                    <tr>
                        <td>{{ $users -> user_ID }}</td>
                        <td>{{ $users -> user_Fname }} {{ $users->user_MI ? $users->user_MI : '' }} {{ $users->user_Lname }}</td>
                        <td>{{ optional($users->classifications?->classificationDate)->format('n/j/Y') ?? 'N/A' }}</td>
                        <td>{{ optional($users->classifications?->classificationDate)->format('n/j/Y') ?? 'N/A' }}</td>
                        <td>{{ optional($users->classifications?->classificationDate)->format('n/j/Y') ?? 'N/A' }}</td>
                        <td>{{ optional($users->classifications?->classificationDate)->format('n/j/Y') ?? 'N/A' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</x-superadmin-layout>