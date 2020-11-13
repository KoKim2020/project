@extends('layouts.app')

@section('content')
    <div class="tw-container tw-mx-auto tw-px-4">
        <div class="tw-flex tw-justify-center">
            <post-detail :post="{{ $post }}"></post-detail>
        </div>
    </div>
@endsection
