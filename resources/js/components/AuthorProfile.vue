<template>
    <div class="tw-flex tw-justify-center">
        <!-- <pre>{{ $user }}</pre> -->
        <!-- <pre>{{ tech_blog_posts }}</pre> -->
        <q-card class="my-card" flat bordered>
            <q-item>
                <q-item-section avatar>
                    <q-avatar square size="135px">
                        <img :src="$user.profile_img" />
                    </q-avatar>
                </q-item-section>

                <q-item-section>
                    <div class="text-h6">
                        {{ $user.name }}
                    </div>
                    <div class="text-subtitle1">
                        Server Admin
                    </div>
                </q-item-section>

            </q-item>

            <q-separator />

            <q-card-section>
                <q-tabs
                    v-model="tab"
                    dense
                    class="text-grey"
                    active-color="primary"
                    indicator-color="primary"
                    align="justify"
                    narrow-indicator
                >
                    <q-tab name="tech_blog_posts" label="Tech Blog Posts" />
                    <q-tab name="projects" label="Projects" />     

                    <q-btn color="primary" icon="edit" flat label="Edit Profile" />
               
                </q-tabs>

                <q-separator />

                <q-tab-panels v-model="tab" animated>

                    <q-tab-panel name="tech_blog_posts">
                        <!-- tech blog listing -->
                        <div  v-for="post in tech_blog_posts" :key="post.id">
                            <div class="text-h6">{{ post.title }}</div>
                            <div v-html="post.body"></div>
                            <q-separator />
                        </div>
                        <!-- no data icon -->
                         <div v-if="tech_blog_posts.length == 0">
                            <i class="material-icons" style="color:#0a0c0f;">report_problem</i>
                            <span class="text-xs">No Data Avaiable</span>
                        </div>
                    </q-tab-panel>

                    <q-tab-panel name="projects">
                        <!-- projects listing -->
                        <div  v-for="post in projects" :key="post.id">
                            <!-- show only projects -->
                            <div class="text-h6">{{ post.title }}</div>
                            <div v-html="post.body"></div>
                            <q-separator />
                        </div>
                        <!-- no data icon -->
                        <div v-if="projects.length == 0">
                            <i class="material-icons" style="color:#0a0c0f;">report_problem</i>
                            <span class="text-xs">No Data Avaiable</span>
                        </div>
                    </q-tab-panel>
                </q-tab-panels>
            </q-card-section>
        </q-card>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                lorem: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                tab: 'tech_blog_posts'
            }
        },
        props: ['author'],
         computed: {
            // category_id == 1
            tech_blog_posts: function () {
                return this.author.post.filter( i => i.category_id == 1 );
            },
            // category_id == 2 or 3
            projects: function () {
                return this.author.post.filter( i => i.category_id != 1 );
            }
        }

    }
</script>

<style lang="sass" scoped>
    .my-card
        width: 100%
        max-width: 700px
</style>