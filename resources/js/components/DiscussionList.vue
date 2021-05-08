<template>
    <div class="">
        <div class="text-h6 tw-my-3">
            Discussion(0)
        </div>
        <pre>{{ formData }}</pre>
        <q-input bottom-slots v-model="formData.text" label="Add to the Discussion"  :dense="dense" autogrow @click="openDialog" >
            <template v-if="$user" v-slot:before>
                <q-avatar>
                    <img :src="$user.profile_img">
                </q-avatar>
            </template>

            <template v-slot:append>
                <q-icon v-if="formData.text !== ''" name="close" @click="formData.text = ''" class="cursor-pointer" />
                <q-icon name="schedule" />
            </template>

            <template v-slot:after>
                <q-btn round dense flat icon="send" @click="submit"/>
            </template>
        </q-input>
         <q-dialog v-model="alert">
            <q-card  style="width: 350px; max-width: 80vw;">

                <q-card-section class="row items-center">
                    <div class="text-h6 text-bold">Login to Continue</div>
                    <q-space />
                    <q-btn icon="close" flat round dense v-close-popup />
                </q-card-section>

                <q-separator />
            
                <q-card-section class="q-pt-lg text-center">
                    <!-- add_comment is used to reload post_detail after logining -->
                    <login-form add_comment="yes"></login-form> 
                </q-card-section>

            </q-card>
        </q-dialog>
    </div>
</template>

<script>
import LoginForm from './LoginForm.vue'
    export default {
  components: { LoginForm },
        data () {
            return {
                formData: {
                    text: ''
                },
                alert: false,
                dense: false,
            }
        },
        methods: {
            openDialog () {
                // console.log(this.$user)
                if(this.$user == null) {
                    this.alert = true
                }
            }, 
            submit () {
                 axios 
                .post('/comment', this.formData)
                .then( response => {
                    console.log(response.data)
                    // this.response = response.data
                    // location.reload();
                })
                .catch (error => {
                    this.$setLaravelValidationErrorsFromResponse(error.response.data);
                });
            }
        }

    }
</script>