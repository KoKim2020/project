@extends('layouts.app')

@section('content')
<main class="sm:container sm:tw-mx-auto sm:tw-max-w-lg sm:tw-pt-10 tw-h-screen">
    <div class="tw-flex">
        <div class="tw-w-full">
            <section class="tw-flex tw-flex-col tw-break-words tw-bg-white sm:border-1 sm:tw-rounded-md sm:tw-shadow-sm sm:tw-shadow-lg">

                <header class="tw-font-semibold tw-bg-gray-200 tw-text-gray-700 tw-py-5 tw-px-6 sm:tw-py-6 sm:tw-px-8 sm:tw-rounded-t-md">
                    {{ __('Reset Password') }}
                </header>

                <form class="tw-w-full tw-px-6 tw-space-y-6 sm:tw-px-10 sm:tw-space-y-8" method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="tw-flex tw-flex-wrap">
                        <label for="email" class="tw-block tw-text-gray-700 tw-text-sm tw-font-bold tw-mb-2 sm:tw-mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="tw-py-2 tw-px-3 tw-form-input tw-w-full tw-border @error('email') tw-border-red-500 @enderror" name="email"
                            value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <p class="tw-text-red-500 tw-text-xs tw-italic tw-mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="tw-flex tw-flex-wrap">
                        <label for="password" class="tw-block tw-text-gray-700 tw-text-sm tw-font-bold tw-mb-2 sm:tw-mb-4">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="tw-form-input tw-py-2 tw-px-3  tw-w-full tw-border @error('password') tw-border-red-500 @enderror" name="password"
                            required autocomplete="new-password">

                        @error('password')
                        <p class="tw-text-red-500 tw-text-xs tw-italic tw-mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="tw-flex tw-flex-wrap">
                        <label for="password-confirm" class="tw-block tw-text-gray-700 tw-text-sm tw-font-bold tw-mb-2 sm:tw-mb-4">
                            {{ __('Confirm Password') }}:
                        </label>

                        <input id="password-confirm" type="password" class="tw-py-2 tw-px-3 tw-form-input tw-w-full tw-border"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="tw-flex tw-flex-wrap tw-pb-8 sm:tw-pb-10">
                        <button type="submit"
                        class="tw-w-full tw-select-none tw-font-bold tw-whitespace-no-wrap tw-p-3 tw-rounded-lg tw-text-base tw-leading-normal tw-no-underline tw-text-gray-100 tw-bg-blue-500 hover:tw-bg-blue-700 sm:tw-py-4">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection