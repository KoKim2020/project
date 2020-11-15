@extends('layouts.app')

@section('content')
<div class="tw-flex tw-justify-center tw-h-screen">
    <div class="tw-pt-20 tw-px-5 md:tw-w-1/2 tw-w-full">
        <div class="tw-bg-teal-100 tw-border-t-4 tw-border-teal-500 tw-rounded-b tw-text-teal-900 tw-px-4 tw-py-1 md:tw-py-3 tw-shadow-md" role="alert">
            <div class="tw-flex">
                <div class="tw-py-1"><svg class="tw-fill-current tw-h-6 tw-w-6 tw-text-teal-500 tw-mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                    <p class="tw-font-bold">Hello Friend</p>
                    <p class="tw-text-sm">Welcome From A place to share knowledge and better understand the Electronics, Rebotics and Other Tech Platforms.</p>
                    <div class="tw-hidden md:tw-block">
                        <div class="tw-flex tw-justify-center tw-mb-3">
                            <register-form></register-form>
                        </div>
                    </div>
                    <div class="tw-block md:tw-hidden">
                        <div class="tw-flex tw-justify-center tw-mb-5">
                            <register-form></register-form>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection