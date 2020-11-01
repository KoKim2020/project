@extends('layouts.app')

@section('content')
<div class="tw-container">
    <form action="{{ route('test.store') }}" method="post" enctype="multipart/form-data" id="myform">
        @csrf
        <input type='file' accept='image/*' onchange='openFile(event)'><br>
        <img id='output' style="max-width: 25%;">
        <input type="text" name="file_data" id="file_data" hidden>

    </form>
    <button type="submit" form="myform">Submit</button>

</div>

<script>
    var openFile = function(event) {
        var input = event.target;

        var reader = new FileReader();
            reader.onload = function(){
                var dataURL = reader.result;
                var output = document.getElementById('output');
                output.src = dataURL;
                document.getElementById("file_data").value = dataURL;
            };
        reader.readAsDataURL(input.files[0]);
    };
</script>
@endsection