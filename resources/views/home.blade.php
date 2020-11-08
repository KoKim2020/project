@extends('layouts.app')

@section('content')
    <div class="tw-hidden md:tw-block ">
        @include('home_pc')
    </div>
    <div class="tw-block md:tw-hidden">
        @include('home_mobile')
    </div>
@endsection
