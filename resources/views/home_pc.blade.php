<div class="tw-flex tw-py-6">
    {{-- bussiness --}}
    <div class="tw-w-1/4 tw-ml-5">
        <business-list></business-list>
    </div>
    {{-- news feed --}}
    <div class="tw-w-2/4">
        <div class="">
            @include('posts')
        </div>
    </div>
    {{-- advertisements --}}
    <div class="tw-w-1/4">
        <advertisement-list></advertisement-list>
    </div>
</div>
