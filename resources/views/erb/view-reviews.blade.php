@section('title', 'View Reviews')
<x-erb-layout>
    <!-- Main Content -->
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            VIEW REVIEWS
        </h2>
        <br>

        <table id="myTable" class="display overflow-scroll border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                <tr class="header-table">
                    <th class="w-[14%]">Research Protocol</th>
                    <th class="w-[20%]">Research Title</th>
                    <th class="w-[14%]">P.I. Name</th>
                    <th class="w-[16%]">Co-I. Name(s)</th>
                    <th class="w-[14%]">Reviewer</th>
                    <th class="w-[10%]">View</th>
                    <th class="w-[12%]">Date Submitted</th>
                </tr>
            </thead>

            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                @forelse ($evaluatedReviews as $review)
                    <tr>
                        <td>{{ $review->protocol->protocol_ID ?? 'N/A' }}</td>

                        <td>{{ $review->protocol->researchInformation->research_title ?? 'Untitled' }}</td>

                        <td>
                            {{ $review->protocol->researchInformation->user->user_Fname ?? 'N/A' }}
                            {{ $review->protocol->researchInformation->user->user_Lname ?? '' }}
                        </td>

                        <td>
                            @php
                                $coInvestigators = $review->protocol->researchInformation->research_CoInvestigator;
                            @endphp
                            {{ $coInvestigators ?? 'N/A' }}
                        </td>

                        <td>
                            {{ $review->reviewer->user_Fname ?? 'N/A' }}
                            {{ $review->reviewer->user_Lname ?? '' }}
                        </td>

                        <td>
                            @if($review->reviewer_ID)
                                <a href="{{ route('erb.view-review-files', ['protocolId' => $review->protocol_ID, 'reviewerId' => $review->reviewer_ID]) }}">
                                    <button class="border-2 p-[5px] hover:bg-gray">View</button>
                                </a>
                            @else
                                N/A
                            @endif
                        </td>

                        <td>
                            {{ $review->created_at->format('m/d/Y') }}<br>
                            {{ $review->created_at->format('H:i:s') }}
                            <br>
                            <span class="text-sm text-gray-600 italic">
                                ({{ $review->status }})
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-3">No reviews found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </main>
</x-erb-layout>
