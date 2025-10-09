@section('title', 'Pending Reviews')
<x-superadmin-layout>
    <!-- Main Content -->
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            PENDING REVIEWS
        </h2>
        <br>

        <table id="myTable" class="display overflow-scroll border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                <tr class="header-table">
                    <th class="w-[16.66%]">Protocol ID</th>
                    <th class="w-[16.66%]">Research Title</th>
                    <th class="w-[16.66%]">P.I. Name</th>
                    <th class="w-[16.66%]">Co-Investigator</th>
                    <th class="w-[16.66%]">Status</th>
                    <th class="w-[16.66%]">Date Submitted</th>
                    <th class="w-[16.66%]">Review Date</th>
                </tr>
            </thead>

            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                @forelse($evaluatedProtocols as $review)
                <tr>
                    <!-- Protocol ID with checkbox (moved to first column) -->
                    <td>
                        <span>{{ $review->protocol_ID }}</span>
                    </td>

                    <!-- Research Title -->
                    <td>{{ $review->research_title }}</td>

                    <!-- Principal Investigator Name -->
                    <td>{{ $review->user_Fname }}</td>

                    <td>{{ $review->co_investigator }}</td>

                    <!-- Status -->
                    <td>{{ $review->status ?? 'Pending' }}</td>

                    <!-- Date Submitted -->
                    <td>
                        @if($review->date_submitted)
                            {{ \Carbon\Carbon::parse($review->date_submitted)->format('m/d/Y H:i') }}
                        @else
                            N/A
                        @endif
                    </td>

                    <!-- Review Date -->
                    <td>
                        @if($review->review_date)
                            {{ \Carbon\Carbon::parse($review->review_date)->format('m/d/Y H:i') }}
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-gray-500 py-4">No pending reviews available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </main>
</x-superadmin-layout>