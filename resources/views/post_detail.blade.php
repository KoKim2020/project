@extends('layouts.app')

@section('content')
    <div class="tw-container tw-mx-auto tw-px-4">
        <div class="tw-flex tw-justify-center">
            <div class="tw-max-w-sm tw-rounded tw-overflow-hidden " style="max-width: 750px; width: 100%; padding: 25px; ">
                {{-- <div class="tw-flex tw-flex-row tw-py-6">
                    <q-item-section avatar>
                        <q-avatar>
                        <img src="{{ $post->author->user->profile_img}}">
                        </q-avatar>
                    </q-item-section>
    
                    <q-item-section>
                        <q-item-label>{{ $post->author->user->name }}</q-item-label>
                        @if ($post->author->user->role_id == 1)
                            <q-item-label caption>Admin</q-item-label>
                        @else
                            <q-item-label caption>Author</q-item-label>
                        @endif
                    </q-item-section>
                </div> --}}

                <h1 class="tw-font-bold tw-text-xl ">{{ $post->title }}</h1>
    
                <img class="tw-w-full" src="{{ $post->img_url }}" alt="Sunset in the mountains">
                <div class="tw-py-4">
                    <p class="tw-text-gray-700 tw-text-base">
                        {!! $post->body !!}
                    </p>
                </div>

                <div class="tw-px-6 tw-pt-4 tw-pb-2">
                    <span class="tw-inline-block tw-bg-gray-200 tw-rounded-full tw-px-3 tw-py-1 tw-text-sm tw-font-semibold tw-text-gray-700 tw-mr-2 tw-mb-2">
                        #fridaysharing
                    </span>
                    <span class="tw-inline-block tw-bg-gray-200 tw-rounded-full tw-px-3 tw-py-1 tw-text-sm tw-font-semibold tw-text-gray-700 tw-mr-2 tw-mb-2">
                        #oakhouse
                    </span>   
                    <span class="tw-inline-block tw-bg-gray-200 tw-rounded-full tw-px-3 tw-py-1 tw-text-sm tw-font-semibold tw-text-gray-700 tw-mr-2 tw-mb-2">
                        #timeboxing

                    </span>   
                    <span class="tw-inline-block tw-bg-gray-200 tw-rounded-full tw-px-3 tw-py-1 tw-text-sm tw-font-semibold tw-text-gray-700 tw-mr-2 tw-mb-2">
                        #timeblocking
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection
