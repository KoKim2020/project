<template>
    <div class="q-pa-sm">
        <q-card class="my-card tw-cursor-pointer" @click="writePost = true">
            <q-card-section>
                <q-item>
                    <q-item-section avatar>
                        <q-avatar>
                            <img src="https://cdn.quasar.dev/img/avatar2.jpg">
                        </q-avatar>
                    </q-item-section>

                    <q-item-section>
                        <q-item-label>Kyaw Kyaw</q-item-label>
                        <q-item-label caption>
                            <q-icon name="create" />
                            Start A Post
                        </q-item-label>
                    </q-item-section>
                </q-item>
            </q-card-section>
        </q-card>

        <q-dialog v-model="writePost" style="width: 700px; max-width: 80vw;">
            <q-card class="q-pb-sm">
                <q-card-section>
                    <div class="text-h6">Create a Post</div>
                </q-card-section>
                <q-separator />
                <!-- writer name and image -->
                <q-card-section class="q-pa-none">
                    <q-item>
                        <q-item-section avatar>
                            <q-avatar>
                                <img src="https://cdn.quasar.dev/img/avatar2.jpg">
                            </q-avatar>
                        </q-item-section>

                        <q-item-section >
                            <q-item-label class="tw-font-bold tw-pb-3">Kyaw Kyaw</q-item-label>
                        </q-item-section>
                    </q-item>
                </q-card-section>
                
                <q-card-section class="">
                    <div class="" style="width: 500px">
                        <q-uploader
                            :factory="uploadFile"
                            label="Add Photo To Your Post"
                            multiple
                            batch
                            style="width: 500px"
                            flat
                            color="grey-3"
                            text-color="grey-8"
                        />
                        <q-input
                            v-model="formData.text"
                            filled
                            type="textarea"
                            label="What Do You Want To Share About?"
                        />
                        
                    </div>
                </q-card-section>

                <q-card-actions align="right">
                    <q-btn push label="POST" color="primary" no-caps />
                </q-card-actions>
            </q-card>
        </q-dialog>
    </div>
</template>
<style>
    .my-card {
        width: 100%;
        max-width: 450px
    }
</style>

<script>
export default {
    data () {
        return {
            writePost: false,
            formData: {
                text: ''
            }
        }
    },
    methods: {
        uploadFile (file, updateProgress) {
            console.log(file)
        }
    }
}
</script>