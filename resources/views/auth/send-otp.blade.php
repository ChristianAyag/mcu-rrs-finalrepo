@section('title', 'Send OTP')
<x-guest-layout>
    <form method="POST" action="" class="">
        <span class="text-center font-bold text-2xl max-sm:text-[18px] text-primary">Enter OTP</span>
        <p class="text-primary text-[14px]">{{ __('The OTP has been sent to your email address.') }}</p>
        <div
            class="inputContainer w-[200px] flex m-auto items-center justify-center flex-row gap-[15px] max-sm:gap-[12px] mt-4">
            <input type="text" maxlength="1"
                class="w-[50px] h-[55px] max-sm:w-[40px] max-sm:h-[50px] border-darkgray rounded-lg text-[25px] max-sm:text-[18px] text-center"
                required>
            <input type="text" maxlength="1"
                class="w-[50px] h-[55px] max-sm:w-[40px] max-sm:h-[50px] border-darkgray rounded-lg text-[25px] max-sm:text-[18px] text-center"
                required>
            <input type="text" maxlength="1"
                class="w-[50px] h-[55px] max-sm:w-[40px] max-sm:h-[50px] border-darkgray rounded-lg text-[25px] max-sm:text-[18px] text-center"
                required>
            <input type="text" maxlength="1"
                class="w-[50px] h-[55px] max-sm:w-[40px] max-sm:h-[50px] border-darkgray rounded-lg text-[25px] max-sm:text-[18px] text-center"
                required>
            <input type="text" maxlength="1"
                class="w-[50px] h-[55px] max-sm:w-[40px] max-sm:h-[50px] border-darkgray rounded-lg text-[25px] max-sm:text-[18px] text-center"
                required>
            <input type="text" maxlength="1"
                class="w-[50px] h-[55px] max-sm:w-[40px] max-sm:h-[50px] border-darkgray rounded-lg text-[25px] max-sm:text-[18px] text-center"
                required>
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="mr-3 text-[15px] bg-primary text-orangeyellow hover:bg-orangeyellow hover:text-primary">
                RESEND OTP
            </x-primary-button>
            <x-primary-button class="text-[15px]">
                <a href="{{ route('password.store') }}">VERIFY</a>
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>