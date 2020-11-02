@extends('layouts.app')

@section('content')
    <verify-dialog title="{{ __('Verify Your Email Address') }}">
        <div>
            @if (session('resent'))
                <div class="">
                    <p class="tw-text-sm">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </p>
                </div>
            @endif
            <div class="">
                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <q-btn flat color="primary" type="submit" no-caps>
                        <div>{{ __('click here to request another') }}</div>
                    </q-btn>
                </form>
            </div>
        </div>
    </verify-dialog>
@endsection
