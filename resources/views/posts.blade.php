@foreach ($posts as $post)
    <div class="q-pa-sm">
        <q-card class="post_list">
            <q-item>
                <q-item-section avatar>
                    <q-avatar>
                        <img src="https://cdn.quasar.dev/img/avatar2.jpg">
                    </q-avatar>
                </q-item-section>

                <q-item-section>
                    <q-item-label>Title</q-item-label>
                    <q-item-label caption>Subhead</q-item-label>
                </q-item-section>
            </q-item>

            <q-card-section>
                <div class="text-h6">{{ $post->title }}</div>
            </q-card-section>

            <img src="{{ $post->img_url }}">

            <q-card-section class="q-pt-md">
                {!! (Str::limit( strip_tags($post->body), 50 )) !!}
            </q-card-section>

            <q-card-actions  align="right">
                <q-btn flat color="primary"  type="a" href="{{ route('post.show', $post->id ) }}" >More + </q-btn>
            </q-card-actions>
        </q-card>
    </div>
@endforeach

