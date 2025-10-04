@section('title', 'Research Records')
<x-erb-layout>
    <!-- Main Content -->
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            RESEARCH RECORDS
        </h2>
        <br>

        <table id="myTable" class="display overflow-scroll border-collapse w-full">
            <!-- Table header -->
            <thead class="bg-primary text-white text-lg/7 max-sm:text-base/7">
                <!-- inalis ko muna ung File ID sa table -->
                <tr class="header-table">
                    <th class="w-[11.11%]">Research Title</th>
                    <th class="w-[11.11%]">P.I. Name</th>
                    <th class="w-[11.11%]">Date of Submission</th>
                    <th class="w-[11.11%]">Classification of Reviews</th>
                    <th class="w-[11.11%]">Reviewer no. 1</th>
                    <th class="w-[11.11%]">Status of Review</th>
                    <th class="w-[11.11%]">Reviewer no. 2</th>
                    <th class="w-[11.11%]">Status of Review</th>
                    <th class="w-[11.11%]">Decision</th>
                </tr>
            </thead>
            <!-- Table body -->
            <tbody class="text-base/7 max-lg:text-sm/6">
                <!-- inalis ko muna ung File ID sa table -->
                 @foreach($researchRecords as $research)
                <tr>
                    <td>{{ $research->research_title }}</td>
                    <td>
                        <!-- url for the array in submitted-documents.blade.php -->
                        <a href="{{ route('erb.submitted-documents', $research->user_ID) }}">
                            {{ $research->user->full_name }}
                        </a> 
                    </td>
                    @php
                        $latestSubmission = $research->user->researchFiles->max('submitted_at');
                    @endphp
                    <td>@if($latestSubmission)
                        {{ \Carbon\Carbon::parse($latestSubmission)->format('Y/m/d h:i:s A') }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>Expedited</td>
                    <td>Thomas Hardy</td>
                    <td>Ongoing Review</td>
                    <td>Thomas Hardy</td>
                    <td>Ongoing Review</td>
                    <td>Ongoing</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</x-erb-layout>