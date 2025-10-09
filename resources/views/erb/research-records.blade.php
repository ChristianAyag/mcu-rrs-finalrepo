@section('title', 'Research Records')
<x-erb-layout>
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            RESEARCH RECORDS
        </h2>
        <br>

        <table id="myTable" class="display overflow-scroll border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-sm:text-base/7">
                <tr class="header-table">
                    <th class="w-[10%]">Research Title</th>
                    <th class="w-[10%]">P.I. Name</th>
                    <th class="w-[10%]">Date of Submission</th>
                    <th class="w-[10%]">Protocol No.</th>
                    <th class="w-[10%]">Review Type</th>
                    <th class="w-[10%]">Reviewer no. 1</th>
                    <th class="w-[10%]">Status of Review</th>
                    <th class="w-[10%]">Reviewer no. 2</th>
                    <th class="w-[10%]">Status of Review</th>
                    <th class="w-[10%]">Decision</th>
                </tr>
            </thead>

            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                @foreach($researchRecords as $research)
                <tr>
                    <!-- Research Title -->
                    <td>{{ $research->research_title }}</td>

                    <!-- P.I. Name -->
                    <td>
                        <a href="{{ route('erb.submitted-documents', $research->user->user_ID) }}">
                            {{ $research->user->full_name }}
                        </a>
                    </td>

                    <!-- Latest Submission Timestamp (12-hour format) -->
                    @php
                        $latestSubmission = $research->user->researchFiles->max('submitted_at');
                    @endphp
                    <td>
                        @if($latestSubmission)
                            {{ \Carbon\Carbon::parse($latestSubmission)
                                ->timezone(config('app.timezone'))
                                ->format('Y/m/d h:i:s A') }}
                        @else
                            N/A
                        @endif
                    </td>

                    <!-- Protocol No. -->
                    @php
                        $protocol = optional($research->user->initialReviews->first()->protocol)->protocol_ID ?? 'N/A';
                    @endphp
                    <td>{{ $protocol }}</td>

                    <!-- Classification -->
                    <td>{{ optional($research->user->initialReviews->first()->protocol)->review_type ?? 'N/A' }}</td>

                    <!-- Reviewer 1 & Status -->
                    <td>{{ optional($research->user->initialReviews->first()->reviewer1)->full_name ?? 'N/A' }}</td>
                    <td>{{ optional($research->user->initialReviews->first())->status ?? 'Ongoing' }}</td>

                    <!-- Reviewer 2 & Status -->
                    <td>{{ optional($research->user->initialReviews->first()->reviewer2)->full_name ?? 'N/A' }}</td>
                    <td>{{ optional($research->user->initialReviews->skip(1)->first())->status ?? 'Ongoing' }}</td>

                    <!-- Decision -->
                    @php
                        $decision = optional($research->user->approved->first())->Decision ?? 'Ongoing';
                    @endphp
                    <td>{{ $decision }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</x-erb-layout>
