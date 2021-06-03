<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm dark:text-white">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-center mt-6">
            <a class="inline-flex items-center px-6 py-3 bg-gray-400 dark:bg-theme-800 border border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-wide hover:bg-gray-200 dark:hover:bg-theme-600 active:bg-theme-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="{{ route('register') }}">
                Create an Account
            </a>

                <x-button class="ml-3">
                    {{ __('Login') }}
                </x-button>
            </div>

            <div class="flex items-center justify-center pt-8">
                <a class="underline text-sm dark:text-white hover:text-gray-400" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            </div>

        </form>
    </x-auth-card>
</x-guest-layout>
