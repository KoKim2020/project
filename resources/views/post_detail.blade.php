@extends('layouts.app')

@section('content')
    <div class="tw-container tw-mx-auto tw-px-4">
        <div class="tw-flex tw-justify-center">
            <div class="tw-max-w-sm tw-rounded tw-overflow-hidden tw-shadow-lg" style="max-width: 750px; width: 100%; padding: 25px;">
                <img class="tw-w-full" src="{{ $post->img_url }}" alt="Sunset in the mountains">
                    <div class="q-pa-md">
                        <div class="tw-font-bold tw-text-xl tw-mb-2">{{ $post->title }}</div>
                        <p class="tw-text-gray-700 tw-text-base">
                            {!! $post->body !!}
                        </p>
                    </div>
                <div class="tw-px-6 tw-pt-4 tw-pb-2">
                    <span class="tw-inline-block tw-bg-gray-200 tw-rounded-full tw-px-3 tw-py-1 tw-text-sm tw-font-semibold tw-text-gray-700 tw-mr-2 tw-mb-2">#photography</span>
                    <span class="tw-inline-block tw-bg-gray-200 tw-rounded-full tw-px-3 tw-py-1 tw-text-sm tw-font-semibold tw-text-gray-700 tw-mr-2 tw-mb-2">#travel</span>
                    <span class="tw-inline-block tw-bg-gray-200 tw-rounded-full tw-px-3 tw-py-1 tw-text-sm tw-font-semibold tw-text-gray-700 tw-mr-2 tw-mb-2">#winter</span>
                </div>
            </div>
        </div>
    </div>
@endsection
