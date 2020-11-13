@foreach ($posts as $post)
    <div class="tw-max-w-sm tw-rounded tw-overflow-hidden tw-shadow-lg tw-py-4">
        <img class="tw-w-full" src="{{ $post->img_url }} " alt="Sunset in the mountains">
        <div class="tw-px-6 tw-py-4">
            <div class="tw-font-bold tw-text-xl tw-mb-2">{{ $post->title }}</div>
            <p class="tw-text-gray-700 tw-text-base">
                {!! (Str::limit( strip_tags($post->body), 50 )) !!}
            </p>
        </div>
        <div class="tw-px-6 tw-pt-4 tw-pb-2 tw-text-right">
            <q-btn flat color="primary"  type="a" href="{{ route('post.show', $post->id) }}" >More + </q-btn>
        </div>
    </div>
@endforeach

