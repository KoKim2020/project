@extends('layouts.app')

@section('content')
<main class="sm:tw-container sm:tw-mx-auto sm:tw-max-w-lg sm:tw-pt-10 tw-h-screen">
    <div class="tw-flex">
        <div class="tw-w-full">
            @if (session('status'))
                <div class="tw-text-sm tw-text-green-700 tw-bg-green-100 tw-px-5 tw-py-6 sm:tw-rounded sm:tw-border sm:tw-border-green-400 sm:tw-mb-6"
                    role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <section class="tw-flex tw-flex-col tw-break-words tw-bg-white sm:border-1 sm:tw-rounded-md sm:tw-shadow-sm sm:tw-shadow-lg">
                <header class="tw-font-semibold tw-bg-gray-200 tw-text-gray-700 tw-py-5 tw-px-6 sm:tw-py-6 sm:tw-px-8 sm:tw-rounded-t-md">
                    {{ __('Reset Password') }}
                </header>

                <form class="tw-w-full tw-px-6 tw-space-y-6 sm:tw-px-10 sm:tw-space-y-8" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="tw-flex tw-flex-wrap">
                        <label for="email" class="tw-block tw-text-gray-700 tw-text-sm tw-font-bold tw-mb-2 sm:tw-mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input name="email" class="tw-shadow tw-appearance-none tw-border  @error('email') tw-border-red-500 @enderror tw-rounded tw-w-full tw-py-2 tw-px-3 tw-text-gray-700 tw-mb-3 tw-leading-tight focus:tw-outline-none focus:tw-shadow-outline" id="email" type="email"  value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <p class="tw-text-red-500 tw-text-xs tw-italic tw-mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="tw-flex tw-flex-wrap tw-justify-center tw-items-center tw-space-y-6 tw-pb-6 sm:tw-pb-10 sm:tw-space-y-0 sm:tw-justify-between">
                        <button type="submit"
                        class="tw-w-full tw-select-none tw-font-bold tw-whitespace-no-wrap tw-p-3 tw-rounded-lg tw-text-base tw-leading-normal tw-no-underline tw-text-gray-100 tw-bg-blue-500 hover:tw-bg-blue-700 sm:tw-w-auto sm:tw-px-4 sm:tw-order-1">
                            {{ __('Send Password Reset Link') }}
                        </button>

                        <p class="tw-mt-4 tw-text-xs tw-text-blue-500 hover:tw-text-blue-700 tw-whitespace-no-wrap tw-no-underline hover:tw-underline sm:tw-text-sm sm:order-0 sm:tw-m-0">
                            <a class="tw-text-blue-500 hover:tw-text-blue-700 tw-no-underline" href="{{ route('login') }}">
                                {{ __('Back to login') }}
                            </a>
                        </p>
                    </div>
                </form>
            </section>
        </div>
    </div>
</main>
@endsection
