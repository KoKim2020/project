<template>
    <div class="">
        <div class="text-h6 tw-my-3">
            Discussion(0)
        </div>

        <pre>{{ formData }}</pre>
        <!-- discussion input box -->
        <q-input bottom-slots 
            v-model="formData.comment" 
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
                <q-icon v-if="formData.comment !== ''" name="close" @click="formData.comment = ''" class="cursor-pointer" />
                <q-icon name="schedule" />
            </template>

            <template v-slot:after>
                <q-btn round dense flat icon="send" @click="submit"/>
            </template>
        </q-input>
        
        <!-- discussion listing -->
        <q-list padding>

            <q-item>
                <q-item-section top avatar>
                    <q-avatar>
                        <img src="https://cdn.quasar.dev/img/boy-avatar.png">
                    </q-avatar>
                </q-item-section>

                <q-item-section>
                    <q-item-label>Single line item</q-item-label>
                    <q-item-label caption lines="2">Secondary line text. Lorem ipsum dolor sit amet, consectetur adipiscit elit.</q-item-label>
                </q-item-section>

                <q-item-section side top>
                    <q-item-label caption>5 min ago</q-item-label>
                </q-item-section>
            </q-item>

            <q-item>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptas quam harum reiciendis dignissimos dolorem sequi optio aliquam ullam. Accusantium illo dolorum aspernatur non voluptas possimus facere temporibus debitis vero?</p>
            </q-item>
            <q-separator spaced  />

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
                    comment: '',
                    user_id: this.$user.id,
                    post_id: this.post_id
                },
                alert: false,
                dense: false,
            }
        },
        props: ['post_id'],
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
                    if(response.data.status == 'success') {
                        this.$q.notify({
                            color: 'green-4',
                            textColor: 'white',
                            icon: 'cloud_done',
                            message: 'Commented Successfully'
                        })
                        location.reload();
                    }
                })
                .catch (error => {
                    this.$setLaravelValidationErrorsFromResponse(error.response.data);
                });
            }
        }

    }
</script>