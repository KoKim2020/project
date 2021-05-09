@extends('layouts.app')

@section('content')
    <div class="tw-container  tw-mx-auto tw-px-4 tw-py-8">
        <div class="tw-flex tw-justify-center">
            <div class="tw-bg-white tw-shadow-lg  tw-max-w-sm tw-rounded tw-overflow-hidden" style="max-width: 750px; width: 100%; padding: 20px 40px; ">
                <div class="tw-flex tw-flex-row tw-pb-6 ">
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
                </div>

                <div class="tw-font-bold tw-text-xl tw-mb-3">{{ $post->title }}</div>
    
                {{-- show if image is not null --}}
                @isset($post->image) 
                    <img class="tw-w-full" src="{{ $post->img_url }}" alt="Sunset in the mountains">
                @endisset

                <div class="tw-py-4">
                    <p class="tw-text-gray-700 tw-text-base">
                        {!! $post->body !!}
                    </p>
                </div>
                <hr>
                <discussion-list post_id="{{ $post->id }}"></discussion-list>
            </div>
        </div>
    </div>
    
    
@endsection
