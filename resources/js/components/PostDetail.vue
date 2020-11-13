<template>
    <div class="q-pa-sm ">
        <q-card class="post_detail" flat
            style="background: initial;">
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
                <div class="text-h6">{{ post.title }}</div>
            </q-card-section>

            <img :src="post.img_url">

            <q-card-section class="q-pt-md">
                <p v-html="post.body"></p>
            </q-card-section>
        </q-card>
    </div>
</template>

<script>
export default {
    props: ['post']
}
</script>

<style>
    .post_detail {
        width: 100%;
        max-width: 750px;
    }
</style>