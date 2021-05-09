<template>
    <div class="">
        <div class="text-h6 tw-my-3">
            Discussion(0)
        </div>
        <pre>{{ formData }}</pre>
        <q-input bottom-slots 
            v-model="formData.text" 
            label="Add to the Discussion"  
            :dense="dense" 
            autogrow 
            :error-message="errors.first('comment')"
            :error="errors.has('comment')"
            @click="openDialog"
         >

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
        
        <q-list padding>

            <q-item>
                <q-item-section top avatar>
                <q-avatar color="primary" text-color="white" icon="bluetooth" />
                </q-item-section>

                <q-item-section>
                <q-item-label>Single line item</q-item-label>
                <q-item-label caption lines="2">Secondary line text. Lorem ipsum dolor sit amet, consectetur adipiscit elit.</q-item-label>
                </q-item-section>

                <q-item-section side top>
                <q-item-label caption>5 min ago</q-item-label>
                </q-item-section>
            </q-item>

            <q-separator spaced inset="item" />

            <q-item>
                <q-item-section top avatar>
                <q-avatar color="primary" text-color="white" square icon="bluetooth" />
                </q-item-section>

                <q-item-section>
                <q-item-label>Single line item</q-item-label>
                <q-item-label caption>Secondary line text. Lorem ipsum dolor sit amet, consectetur adipiscit elit.</q-item-label>
                </q-item-section>

                <q-item-section side top>
                <q-item-label caption>meta</q-item-label>
                </q-item-section>
            </q-item>

            <q-separator spaced inset="item" />

            <q-item>
                <q-item-section top avatar>
                <q-avatar>
                    <img src="https://cdn.quasar.dev/img/boy-avatar.png">
                </q-avatar>
                </q-item-section>

                <q-item-section>
                <q-item-label>Single line item</q-item-label>
                <q-item-label caption>Secondary line text. Lorem ipsum dolor sit amet, consectetur adipiscit elit.</q-item-label>
                </q-item-section>

                <q-item-section side top>
                <q-badge label="10k" />
                </q-item-section>
            </q-item>

            <q-separator spaced inset="item" />

            <q-item>
                <q-item-section top avatar>
                <q-avatar rounded>
                    <img src="https://cdn.quasar.dev/img/boy-avatar.png">
                </q-avatar>
                </q-item-section>

                <q-item-section>
                <q-item-label>Single line item</q-item-label>
                <q-item-label caption>Secondary line text. Lorem ipsum dolor sit amet, consectetur adipiscit elit.</q-item-label>
                </q-item-section>

                <q-item-section side top>
                <q-item-label caption>meta</q-item-label>
                </q-item-section>
            </q-item>

            <q-separator spaced />

            <q-item>
                <q-item-section top thumbnail class="q-ml-none">
                <img src="https://cdn.quasar.dev/img/mountains.jpg">
                </q-item-section>

                <q-item-section>
                <q-item-label>Single line item</q-item-label>
                <q-item-label caption>Secondary line text. Lorem ipsum dolor sit amet, consectetur adipiscit elit.</q-item-label>
                </q-item-section>

                <q-item-section side top>
                <q-item-label caption>meta</q-item-label>
                </q-item-section>
            </q-item>
        </q-list>
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