@section('title', 'Research Records')
<x-superadmin-layout>
    <!-- Main Content -->
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
                @foreach($Records as $research)
                    @php
                        $firstReview = optional($research->user->initialReviews->first());
                        $protocol = optional($firstReview->protocol)->protocol_ID ?? 'N/A';
                        $reviewType = optional($firstReview->protocol)->review_type ?? 'N/A';
                        $reviewer1 = optional($firstReview->reviewer1)->full_name ?? 'N/A';
                        $status1 = $firstReview->status ?? 'Ongoing';
                        $reviewer2 = optional($firstReview->reviewer2)->full_name ?? 'N/A';
                        $status2 = optional($research->user->initialReviews->skip(1)->first())->status ?? 'Ongoing';
                        $decision = optional($research->user->approved->first())->Decision ?? 'Ongoing';
                        $latestSubmission = $research->user->researchFiles->max('submitted_at');
                    @endphp

                    <tr>
                        <td>{{ $research->research_title }}</td>
                        <td>
                            {{ $research->user->full_name }}
                        </td>
                        <td>
                            @if($latestSubmission)
                                {{ \Carbon\Carbon::parse($latestSubmission)
                                    ->timezone(config('app.timezone'))
                                    ->format('Y/m/d h:i:s A') }}
                            @else
                                N/A
                            @endif
                        </td>
                        <td>{{ $protocol }}</td>
                        <td>{{ $reviewType }}</td>
                        <td>{{ $reviewer1 }}</td>
                        <td>{{ $status1 }}</td>
                        <td>{{ $reviewer2 }}</td>
                        <td>{{ $status2 }}</td>
                        <td>{{ $decision }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</x-superadmin-layout>