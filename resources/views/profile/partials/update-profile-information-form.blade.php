<section>
    <header>
        <h2 class="text-lg font-medium text-primary">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" autofocus
                autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" 
                autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            <div>
                <p class="text-sm mt-2">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification"
                        class="underline text-sm text-primary hover:text-orangeyellow duration-200 rounded-md">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
                <!-- Profile Image -->
                <div class="flex mt-3">
                    <img id="profile-img" src="" alt="Profile Picture"
                        class="w-16 h-16 rounded-full object-cover border-2">
                    <!-- Upload Button -->
                    <div class="flex my-auto mx-4">
                        <label for="file-upload"
                            class="cursor-pointer inline-block bg-secondary hover:bg-primary text-primary hover:text-secondary tracking-widest py-2 px-5 rounded-md duration-200">
                            CHANGE PHOTO
                        </label>
                        <input type="file" id="file-upload" accept="image/*" class="hidden">
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>