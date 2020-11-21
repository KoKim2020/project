<template>
    <div >
        <q-btn push color="secondary" no-caps label="Create A New Account"  @click="alert = true"/>
        <q-dialog
            v-model="alert"
        >
            <q-card style="width: 500px; max-width: 80vw;">
                <q-card-section>
                    <div class="text-h6">Sign Up</div>
                </q-card-section>
                <pre>{{ formData }}</pre>
                <q-card-section class="q-pt-none">
                    <div class="tw-flex tw-flex-wrap">
                        <div class="tw-w-full tw-p-2">
                            <div class="tw-w-full tw-flex tw-justify-center lg:tw-px-2 tw-py-2">
                                <div class="tw-w-40 tw-mx-auto md:tw-mx-0">
                                    <q-avatar size="150px" class="">
                                        <img  :src="formData.file_data">
                                    </q-avatar>
                                    <a type="file" class="tw-mx-auto tw-mt-2 tw-block hover:tw-bg-green-600 tw-border tw-border-blue-700 tw-text-gray-800 hover:tw-text-white text-md tw-font-thin tw-py-2 tw-px-6 tw-rounded focus:tw-outline-none focus:tw-shadow-outline" @click="clickUpload">
                                        Choose Image
                                    </a>
                                    <pre>{{ file }}</pre>
                                    <input ref="upload" type="file" hidden @change.prevent="uploadImage">
                                </div>
                            </div>
                        </div>
                    </div>
                </q-card-section>

                <q-card-actions align="right" class="bg-white text-teal">
                    <q-btn flat label="OK" @click="submit" />
                </q-card-actions>
            </q-card>
        </q-dialog>
        <!-- cropper dialog -->
        <q-dialog v-model="cropperDialog" persistent>
            <q-card>
                <q-card-section class="row items-center q-pb-none">
                    <div class="text-h6">Crop Photo</div>
                    <q-space />
                    <q-btn v-close-popup icon="close" flat round dense />
                </q-card-section>
                <q-card-section>
                    <cropper
                        classname="cropper"
                        :src="image"
                        :stencilProps="{
                            aspectRatio: 10/10
                        }"
                        ref="cropper"
                    >
                    </cropper>
                </q-card-section>
                <q-separator />
                <q-card-actions align="right">
                    <q-btn flat label="Crop" color="primary" @click="cropImage" />
                </q-card-actions>
            </q-card>
            <q-inner-loading :showing="cropLoading">
                <q-spinner color="primary" size="3em" />
            </q-inner-loading>
        </q-dialog>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                alert: false,
                image: '',
                // cropper
                cropperDialog: false,
                cropLoading: false,
                response: {},
                formData: {
                    file_data: 'http://via.placeholder.com/300'
                }
            }
        },
        methods: {
            clickUpload () {
                this.$refs.upload.click();
            },
            uploadImage (event) {
                var vm = this
                var input = event.target;
                // The includes() method determines whether a string contains the characters of a specified string.
                if (input.files[0].type.includes("image")) {
                    var reader = new FileReader();
                    reader.onload = function(e){
                        // output of reader is base 64 encoded image
                        vm.image = reader.result; // show on cropper
                    };
                    reader.readAsDataURL(input.files[0]);
                    // show cropper modal
                    this.cropperDialog = true
                }   else {
                    this.$q.notify({
                        icon: 'error',
                        color: 'negative',
                        message: 'Please, choose an image.'
                    })
                }
            },
            cropImage() {
                this.cropLoading = true
                const result = this.$refs.cropper.getResult();
                this.formData.file_data = result.canvas.toDataURL() // base 64 encoded image
                this.cropperDialog = false
                this.cropLoading = false
            },
            submit() {
                axios
                .post('/test', this.formData)
                .then( response => {
                    console.log(response.data)
                })
            }
        }
    }
</script>