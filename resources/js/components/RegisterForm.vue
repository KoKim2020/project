<template>
    <div>
        <q-btn push color="primary" no-caps label="Create A New Account"  @click="alert = true"/>
        <q-dialog
            v-model="alert"
        >
            <q-card style="width: 500px; max-width: 80vw;" class="tw-font-sans">
                <q-card-section>
                    <div class="text-h6">Sign Up</div>
                    <i class="tw-text-gray-700 tw-text-xs">It is So Easy Bro</i>
                </q-card-section>

                <q-separator />

                <q-card-section class="q-pt-md">
                    <div class="tw-flex tw-justify-center">
                        <div class="tw-w-2/3 q-gutter-y-md column">
                            <q-input 
                                filled 
                                v-model="formData.name" 
                                label="Name" 
                                :error-message="errors.first('name')"
                                :error="errors.has('name')"
                            />
                            <q-input 
                                filled 
                                v-model="formData.email" 
                                label="Email" 
                                type="email"
                                :error-message="errors.first('email')"
                                :error="errors.has('email')"
                            />
                            <q-input 
                                v-model="formData.password" 
                                filled 
                                type="password" 
                                label="Password" 
                                :error-message="errors.first('password')"
                                :error="errors.has('password')"
                            />
                            <q-toggle 
                                v-model="accept" 
                                label="I accept the license and terms" 
                            />
                            <div class="tw-text-xs tw-text-gray-700">
                                By continuing you indicate that you have read and 
                                agree to OakHouse-Technology's
                                <a href="" class="text-primary hover:tw-underline">Terms of Service</a>
                                and 
                                <a href="" class="text-primary hover:tw-underline">Privacy Policy.</a>
                            </div>
                            <div class="text-right">
                                <q-btn  push color="primary" no-caps label="Sign Up" @click="signUp" />
                            </div>
                        </div>
                    </div>
                </q-card-section>

                <q-card-actions align="right" class="bg-white text-teal">
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
                accept: false,
                formData: {
                    name: '',
                    email: '',
                    password: ''
                }
            }
        },
        created () {
            console.log(route('test.create'))
        }, 
        methods: {
            signUp () {
                if (this.accept !== true) {
                    this.$q.notify({
                        color: 'red-5',
                        textColor: 'white',
                        icon: 'warning',
                        message: 'You need to accept the license and terms first'
                    })
                }
                else {
                    axios
                    .post(route('register'), this.formData)
                    .then(response => {
                        if(response.data.status == 'success'){
                            this.$q.notify({
                                color: 'green-4',
                                textColor: 'white',
                                icon: 'cloud_done',
                                message: 'Register Successfully'
                            })
                            this.alert = false
                            // Navigate to the Location.reload article by replacing this page
                            window.location.replace(route('home'))
                        }
                    })
                    .catch (error => {
                        this.$setLaravelValidationErrorsFromResponse(error.response.data);
                    });
                }
            }
        }
    }
</script>