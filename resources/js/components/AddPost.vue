<template>
    <div>
        <q-btn push color="primary" no-caps label="Add A Post" @click="alert = true" style="font-size: 11px;"  />
        <q-dialog v-model="alert">
            <q-card style="width: 520px; max-width: 80vw;">
                <q-card-section  class="row items-center q-pb-md">
                    <div class="text-h6">Create Post</div>
                    <q-space />
                    <q-btn icon="close" flat round dense v-close-popup />
                </q-card-section>
                <q-card-section class="q-pt-none q-gutter-md">
                    
                    <q-select  
                        outlined  
                        v-model="formData.category" 
                        :options="categories" 
                        label="Select Post Category"
                        option-value="id"
                        option-label="name"
                        emit-value
                        map-options
                        :error-message="errors.first('category')"
                        :error="errors.has('category')"
                    />

                    <div class="q-gutter-sm" v-if="formData.category == 2 || formData.category == 3">
                        <q-radio v-model="formData.microcontroller_id" val="1" label="use Arduino" />
                        <q-radio v-model="formData.microcontroller_id" val="2" label="use Respberry Pi" />
                        <q-radio v-model="formData.microcontroller_id" val="" label="None" />
                    </div>

                    <q-input 
                        outlined 
                        v-model="formData.title" 
                        label="Title"
                        :error-message="errors.first('title')"
                        :error="errors.has('title')"
                    />

                    <quill-editor
                        ref="myQuillEditor"
                        v-model="formData.body"
                        :options="editorOption"
                        @blur="onEditorBlur($event)"
                        @focus="onEditorFocus($event)"
                        @ready="onEditorReady($event)"
                        :style="[errors.has('body') ? styleObject : '']"
                    />
                    <div v-show="errors.has('body')" 
                        class="tw-text-red-700">
                        {{ errors.first('body') }}
                    </div>
                </q-card-section>
                <input ref="upload" type="file" hidden id="imageUpload" @change="imageUpload($event)">
                <q-card-actions align="center" class="q-pb-md">
                    <q-btn  push label="Post" color="primary" @click="submit"  style="width: 150px" />
                </q-card-actions>
            </q-card>
        </q-dialog>
    </div>
</template>

<script>
    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'code-block'],
        ['link', 'image'],

        [{ 'header': 1 }, { 'header': 2 }],               // custom button values
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
        [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
        [{ 'direction': 'rtl' }],                         // text direction

        [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
        [{ 'font': [] }],
        [{ 'align': [] }],

        ['clean']                                         // remove formatting button
    ];
    export default {
        data () {
            return {
                alert: false,
                formData: {
                    title: '',
                    body: '',
                    images: [],
                    category: null,
                    microcontroller_id: ''
                },
                categories: {},
                content: {},
                response: {},
                editorOption: {
                    modules: {
                        toolbar: {
                            container: toolbarOptions,
                            handlers: {
                                image (value) {
                                    if (value) {
                                        document.querySelector('#imageUpload').click();
                                    } else {
                                        this.quill.format('image', false);
                                    }
                                }
                            }
                        },
                        imageResize: {
                            modules: ["Resize", "DisplaySize", "Toolbar"]
                        },
                        
                    }
                },
                styleObject: {
                    border: '1px solid #fc3903 !important'
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
            imageUpload(event) {
                var vm = this
                var input = event.target;
                let quill = this.editor;
                if (input.files[0].type.includes("image")) {
                    var reader = new FileReader();
                    reader.onload = function(e){
                        // output of reader is base 64 encoded image
                        let base64data = reader.result;
                        vm.formData.images.push(base64data);
                        
                        // Get cursor location
                        let length = quill.getSelection().index;

                        // Insert image at cursor location
                        quill.insertEmbed(length, 'image', base64data);

                        // Set cursor to the end
                        quill.setSelections(length + 1);
                    };
                    reader.readAsDataURL(input.files[0]);
                    // show cropper modal
                }   else {
                    this.$q.notify({
                        icon: 'error',
                        color: 'negative',
                        message: 'Please, choose an image.'
                    })
                }
            },
            submit () {
                axios 
                .post('/post', this.formData)
                .then( response => {
                    this.response = response.data
                    location.reload();
                })
                .catch (error => {
                    this.$setLaravelValidationErrorsFromResponse(error.response.data);
                });
            },
            getPostCategory() {
                axios
                .get('/category')
                .then( response => {
                    this.categories = response.data
                })
            }
        },
        created () {
            this.getPostCategory()
        },
        computed: {
            editor() {
                return this.$refs.myQuillEditor.quill
            }
        },

    }
</script>

<style >
   
</style>