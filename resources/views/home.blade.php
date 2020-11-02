@extends('layouts.app')

@section('content')
    <div class="tw-container tw-mx-auto tw-px-4">
        <div class="tw-flex tw-p-12">
            <div class="tw-w-3/4">
                <div class="tw-flex tw-justify-center">
                    <div class="">
                        @for ($i = 0; $i < 15; $i++)
                            <news-feed></news-feed>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="tw-w-1/4 tw-bg-red-500 tw-h-64"></div>
        </div>
    </div>
@endsection
