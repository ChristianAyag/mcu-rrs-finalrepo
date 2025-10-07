@section('title','Forgot Password')
<x-guest-layout>
    <span class="font-bold text-[20px] text-primary">Forgot Password</span>
    <div class="mb-4 text-[15px] text-primary font-normal">
        {{ __('Type your email that you registered.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full text-[15px] h-[35px]" type="email" name="email" :value="old('email')" required
                autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="mr-auto text-sm text-primary hover:text-secondary duration-200"
                href="{{ url('/') }}">
                {{ __('Go to Login Page') }}
            </a>

            @if (Route::has('send.otp'))
                <x-primary-button class="text-[15px]">
                    <a href="{{ route('send.otp') }}">{{ __('Send OTP') }}</a>
                </x-primary-button>
            @endif
        </div>
    </form>
</x-guest-layout>