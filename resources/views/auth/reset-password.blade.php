@section('title', 'Reset Password')
<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf
        <span class="text-center font-bold text-[20px] max-sm:text-[18px] text-primary">Forgot Password</span>

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="">

        <!-- Password -->
        <div class="mt-2">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full text-[15px] h-[35px]" type="password" name="password"
                required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-2">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full text-[15px] h-[35px]" type="password"
                name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4 max-sm:text-[13px]">
            <x-primary-button>
                <a href="{{ route('login') }}">{{ __('Reset Password') }}</a>
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>