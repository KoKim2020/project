<template>
    <div class="">
        <div class="text-h6 tw-my-3">
            Discussion(0)
        </div>
        <q-input bottom-slots v-model="text" label="Add to the Discussion"  :dense="dense" autogrow @click="openDialog" >
            <template v-if="$user" v-slot:before>
                <q-avatar>
                    <img src="https://cdn.quasar.dev/img/avatar5.jpg">
                </q-avatar>
            </template>

            <template v-slot:append>
                <q-icon v-if="text !== ''" name="close" @click="text = ''" class="cursor-pointer" />
                <q-icon name="schedule" />
            </template>

            <template v-slot:after>
                <q-btn round dense flat icon="send" />
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
                text: '',
                ph: '',
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
            }
        }

    }
</script>