@extends('layouts.app')

@section('content')
    <div class="tw-container tw-mx-auto tw-px-4">
        <div class="tw-flex tw-justify-center">
            <img src="{{ $post->img_url }}" alt="">
            {{-- <post-detail :post="{{ $post }}"></post-detail> --}}
        </div>
    </div>
@endsection
