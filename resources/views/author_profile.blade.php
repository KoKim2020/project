@extends('layouts.app')

@section('content')

    <div class="tw-container tw-mx-auto tw-px-4 tw-py-6">
        <author-profile :author="{{ $author }}"></author-profile>
    </div>
    
@endsection