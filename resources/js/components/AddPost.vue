<template>
    <div>
        <q-btn push color="primary" no-caps label="Add A Post" @click="alert = true"/>
        <q-dialog v-model="alert">
            <q-card style="width: 520px; max-width: 80vw;">
                <q-card-section>
                    <div class="text-h6">Create a Post</div>
                </q-card-section>

                {{ content }}

                <q-card-section class="q-pt-none">
                    <!-- Two-way Data-Binding -->
                    <quill-editor
                        ref="myQuillEditor"
                        v-model="content"
                        :options="editorOption"
                        @blur="onEditorBlur($event)"
                        @focus="onEditorFocus($event)"
                        @ready="onEditorReady($event)"
                    />
                </q-card-section>

                <q-card-actions align="right">
                    <q-btn flat label="test" color="primary" @click="test" />
                    <q-btn flat label="OK" color="primary" v-close-popup />
                </q-card-actions>
            </q-card>
        </q-dialog>
    </div>
</template>

<script>

    export default {
        data () {
            return {
                alert: false,
                content: '<p>Write a Post Here.</p',
                editorOption: {
                }
            }
        },
        methods: {
            onEditorBlur(quill) {
                console.log('editor blur!', quill)
            },
            onEditorFocus(quill) {
                console.log('editor focus!', quill)
            },
            onEditorReady(quill) {
                console.log('editor ready!', quill)
            },
            onEditorChange({ quill, html, text }) {
                console.log('editor change!', quill, html, text)
                this.content = html
            },
            test () {
                console.log(this.editor)
            }
        },
        computed: {
            editor() {
                return this.$refs.myQuillEditor.quill
            }
        },
        // created() {
        //     console.log('this is current quill instance object', this.editor)
        // }
    }
</script>

<style >
    .ql-editor{
        min-height: 300px;
    }

</style>