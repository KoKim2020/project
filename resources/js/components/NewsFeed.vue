<template>
    <div>
        <div v-for="(post, index) in posts" :key="index">
            <div class="q-pa-sm">
                <q-card class="post_list">
                    <!-- <pre>{{ post }}</pre> -->
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
                        <!-- <div class="text-subtitle2">{{ post.author.user.name }}</div> -->
                    </q-card-section>

                    <img :src="post.img_url">

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
    .post_list {
        width: 100%;
        max-width: 450px;
    }
    
    .contracted {
        height: 70px;
        overflow: hidden;
    }
</style>