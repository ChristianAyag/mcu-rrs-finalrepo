@section('title', 'Research Protocol Assign')
<x-erb-reviewer>
<main class="xl:ml-[335px] max-xl:ml-auto p-4 max-xl:p-2">
    <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
        RESEARCH PROTOCOL ASSIGN
    </h2>
    <br>

    <table id="myTable" class="display overflow-scroll border-collapse w-full">
        <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
            <tr class="header-table">
                <th class="w-[25%]">Research Title</th>
                <th class="w-[20%]">P.I. Name</th>
                <th class="w-[15%]">Research Protocol</th>
                <th class="w-[15%]">Type of Review</th>
                <th class="w-[10%]">Forms</th>
                <th class="w-[10%]">Soft Copy Submission</th>
            </tr>
        </thead>

        <tbody class="text-base/7 max-lg:text-sm/6">
            @foreach($assignedProtocols as $protocolId => $reviews)
            @php
                $firstReview = $reviews->first();
            @endphp
            <tr>
                <td>{{ $firstReview->pi?->researchInformation?->research_title ?? 'No Research Title' }}</td>
                <td>
                    <a href="{{ route('erb-reviewer.submitted-documents', ['user_id' => $firstReview->protocol?->user?->user_ID]) }}">
                        {{ $firstReview->protocol?->user?->full_name ?? 'No PI Name' }}
                    </a>
                </td>
                <td>{{ $firstReview->protocol?->protocol_ID ?? 'N/A' }}</td>
                <td>{{ $firstReview->protocol?->review_type ?? 'N/A' }}</td>

                {{-- Forms --}}
                    <td>
                        @foreach($reviews as $review)
                            @if($review->form?->form_type === 'Forms')
                                <a href="{{ url($review->form->form_view) }}" class="block mb-2">
                                    <button class="border-2 p-[5px] hover:bg-gray">
                                        {{ $review->form->form_code ?? 'N/A' }}
                                    </button>
                                </a>
                            @endif
                        @endforeach
                    </td>

                    {{-- Submissions --}}
                    <td>
                        @foreach($reviews as $review)
                            @if($review->form?->form_type === 'Submission')
                                <a href="{{ route('erb-reviewer.submit-documents', ['form' => $review->form->form_id]) }}" class="block mb-2">
                                    <button class="border-2 p-[5px] hover:bg-gray">
                                        Submit {{ $review->form->form_code ?? '' }}
                                    </button>
                                </a>
                            @endif
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</main>
</x-erb-reviewer>
