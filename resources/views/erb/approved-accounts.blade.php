@section('title', 'Approved Accounts')
<x-erb-layout>
    <!-- Main Content -->
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            APPROVED ACCOUNTS
        </h2>
        <br>

        <table id="myTable" class="display overflow-scroll border-collapse w-full">
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                <tr class="header-table">
                    <th class="w-[25%]">P.I. Name</th>
                    <th class="w-[25%]">Date Registered</th>
                    <th class="w-[25%]">Assigned Forms</th> <!-- New column -->
                    <th class="w-[25%]">Assigned Date/Time</th> <!-- New column -->
                </tr>
            </thead>
            <tbody class="text-base/7 max-lg:text-sm/6">
                @foreach($approvedAccounts as $user)
                    <tr data-user-id="{{ $user->user_ID }}">
                        <td>{{ $user->user_Fname }} {{ $user->user_MI ? $user->user_MI : '' }} {{ $user->user_Lname }}</td>
                        <td>{{ optional($user->created_at)->format('n/j/Y H:i:s') }}</td>
                        <td>
                            @if($user->forms && $user->forms->count() > 0)
                                <ul class="list-disc pl-5">
                                    @foreach($user->forms as $form)
                                        <li>{{ $form->form_code }}</li>
                                    @endforeach
                                </ul>
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if($user->forms && $user->forms->count() > 0)
                                @php
                                    // Get the latest timestamp from pivot table
                                    $latestTimestamp = $user->forms->max(function($form) {
                                        return $form->pivot->created_at;
                                    });
                                @endphp
                                {{ $latestTimestamp ? \Carbon\Carbon::parse($latestTimestamp)->format('n/j/Y h:i:s') : 'N/A' }}
                            @else
                                N/A
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</x-erb-layout>
