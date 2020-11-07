@extends('layouts.app')

@section('content')
    <div class="tw-container tw-mx-auto tw-px-4">
        <div class="tw-flex md:tw-p-12">
            {{-- bussiness --}}
            <div class="tw-hidden md:tw-block md:tw-w-1/4">
                <business-list></business-list>
            </div>
            {{-- news feed --}}
            <div class="tw-w-full md:tw-w-2/4">
                <div class="tw-flex tw-justify-center">
                    <div class="">
                        <write-post></write-post>
                        <news-feed :posts="{{ $posts }}"></news-feed>
                    </div>
                </div>
            </div>
            {{-- advertisements --}}
            <div class="tw-hidden md:tw-block tw-w-1/4">
                <advertisement-list></advertisement-list>
            </div>
        </div>
    </div>
@endsection
