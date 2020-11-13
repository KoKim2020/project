<template>
    <div>
        <div v-for="(post, index) in posts" :key="index">
            <div class="q-pa-sm">
                <q-card class="my-card">
                    <!-- <pre>{{ post }}</pre> -->

                    <img :src="post.url">

                    <q-card-section>
                        <div class="text-h6">{{ post.title }}</div>
                        <div class="text-subtitle2">{{ post.author.user.name }}</div>
                    </q-card-section>

                    <q-card-section class="q-pt-none">
                        <p :class="{ contracted: contracted }" v-html="post.body"></p>
                    </q-card-section>

                    <q-card-actions  align="right">
                        <q-btn flat color="primary"  type="a" :href="postDetailUrl + post.id" >More + </q-btn>
                    </q-card-actions>
                </q-card>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['posts'],
    data () {
        return {
            contracted: true,
            postDetailUrl: route('post.show')
        }
    }
}
</script>

<style>
    .my-card {
        width: 100%;
        max-width: 450px
    }
    
    .contracted {
        height: 70px;
        overflow: hidden;
    }
</style>