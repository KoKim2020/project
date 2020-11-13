@extends('layouts.app')

@section('content')
    <div class="tw-container tw-mx-auto tw-px-4">
        <div class="tw-flex tw-justify-center">
            <div class="tw-max-w-sm tw-rounded tw-overflow-hidden " style="max-width: 750px; width: 100%; padding: 25px; ">
                <q-item>
                    <q-item-section avatar>
                        <q-avatar>
                            <img src="https://cdn.quasar.dev/img/avatar2.jpg">
                        </q-avatar>
                    </q-item-section>
    
                    <q-item-section>
                        <q-item-label>Title</q-item-label>
                        <q-item-label caption>Subhead</q-item-label>
                    </q-item-section>
                </q-item>

                <q-card-section>
                    <div class="text-h6">{{ $post->title }}</div>
                </q-card-section>
    
                <img class="tw-w-full" src="{{ $post->img_url }}" alt="Sunset in the mountains">
                <div class="tw-px-2 tw-py-4">
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
