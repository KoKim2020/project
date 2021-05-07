
@foreach ($posts as $post)
    <div class="q-pa-md tw-flex tw-justify-center">
        <q-card style="width: 100%; max-width: 650px;">
            <q-item class="q-py-md">
                <q-item-section avatar>
                    <q-avatar>
                    <img src="{{ $post->author->user->profile_img }}">
                    </q-avatar>
                </q-item-section>

                <q-item-section>
                    <q-item-label>{{ $post->author->user->name }}</q-item-label>
                    @if ($post->author->user->role_id == 1)
                        <q-item-label caption>Admin</q-item-label>
                    @else
                        <q-item-label caption>Author</q-item-label>
                    @endif
                </q-item-section>
            </q-item>

            <q-card-section>
                <div class="text-h6">{{ $post->title }}</div>
            </q-card-section>
            {{-- show if image is not null --}}
            @isset($post->image) 
                <img src="{{ $post->img_url }}">
            @endisset

            <q-card-section class="q-pt-md">
                {!! (Str::limit( $post->body, 500 )) !!}
            </q-card-section>

            <q-card-actions  align="right">
                <q-btn flat color="primary"  type="a" href="{{ route('post.show', $post->id ) }}" >More + </q-btn>
            </q-card-actions>
        </q-card>
    </div>
@endforeach

