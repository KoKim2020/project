<div class="tw-container tw-mx-auto tw-px-4">
    <div class="tw-flex tw-p-12">
        {{-- bussiness --}}
        <div class="tw-w-1/4">
            <business-list></business-list>
        </div>
        {{-- news feed --}}
        <div class="tw-w-2/4">
            <div class="tw-flex tw-justify-center">
                <div class="">
                    @include('posts')
                </div>
            </div>
        </div>
        {{-- advertisements --}}
        <div class="tw-w-1/4">
            <advertisement-list></advertisement-list>
        </div>
    </div>
</div>