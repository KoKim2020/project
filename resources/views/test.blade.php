@extends('layouts.app')

@section('content')
    <form action="{{ route('test.store') }}" method="post">
        @csrf
        <input type="checkbox" id="vehicle1" name="vehicle1" >
        <label for="vehicle1"> I have a bike</label><br>
        <button type="submit">Submit</button>
    </form>
@endsection