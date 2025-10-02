<title>Login</title>
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="user_ID" :value="__('Username')" />
            <x-text-input id="user_ID" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]" type="text" name="user_ID" :value="old('user_ID')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('user_ID')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="user_Password" :value="__('Password')" />
            <x-text-input id="user_Password" class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]" type="password" name="user_Password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('user_Password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="mt-4">
            <div class="flex items-center justify-between text-sm text-gray-500">
                <label for="remember_me" class="flex items-center space-x-2">
                    <input id="remember_me" type="checkbox" class="rounded max-sm:w-[14px] max-sm:h-[14px]"
                        name="remember" />
                    <span class="text-sm text-primary max-sm:text-[13px]">Remember me</span>
                </label>
                <a href="{{ route('password.request') }}"
                    class="text-sm text-primary hover:text-secondary max-sm:text-[12px] duration-200">
                    Forgot password?
                </a>
            </div>
        </div>
        <div class="flex mt-4">
            <x-primary-button class="justify-center items-center max-sm:text-[13px] w-full">
                {{ __('Login') }}
            </x-primary-button>
        </div>
        <div class="flex justify-center items-center mt-4">
            <p class="text-sm text-primary max-sm:text-[12px]">Don't have an account?</p>
            <a href="{{ route('register') }}"
                class="ml-2 text-sm text-primary hover:text-secondary max-sm:text-[12px] duration-200">
                Sign up
            </a>
        </div>
    </form>
</x-guest-layout>