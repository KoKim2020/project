<template>
    <div class="q-gutter-y-sm column" style="max-width: 300px;">
        <!-- <pre>{{ add_comment }}</pre> -->
        <q-input 
            rounded 
            outlined 
            v-model="formData.email" 
            dense 
            label="Email Address"
            :error-message="errors.first('email')"
            :error="errors.has('email')"
        />
        <q-input 
            v-model="formData.password" 
            rounded outlined dense :type="isPwd ? 'password' : 'text'" 
            label="Password"
            :error-message="errors.first('password')"
            :error="errors.has('password')"
        >
            <template v-slot:append>
                <q-icon
                    :name="isPwd ? 'visibility_off' : 'visibility'"
                    class="cursor-pointer"
                    @click="isPwd = !isPwd"
                />
            </template>
        </q-input>

        <q-checkbox  v-model="remember" val="remember" label="Remember Me" />

        <div class="row justify-between tw-mb-4">
            <q-btn flat type="a" :href="forgetPasswordUrl" no-caps push color="primary" label="Forgot Password?" />
            <q-btn label="Login" no-caps push type="submit" color="primary" @click="logIn"/>
        </div>
        <q-separator/>
        <div class="text-center q-pt-md">
            <register-form></register-form>
        </div>
    </div>
</template>

<script>
import RegisterForm from './RegisterForm.vue'
export default {
  components: { RegisterForm },
    props: ['add_comment'], /// use login form form comments section
    data() {
        return {
            formData: {
                email: '',
                password: '',
            },
            remember: false,
            isPwd: true,
            forgetPasswordUrl: route('password.request')
        }
    },
    created() {
        console.log(route('home'))
    },
    methods: {
        logIn() {
            // add remember property to formData
            if(this.remember) {
                this.$set(this.formData, 'remember' , true)
            }
            axios
            .post('/login', this.formData)
            .then(response => {
                console.log(response.data)
                if(response.data.status == 'success'){
                    this.$q.notify({
                        color: 'green-4',
                        textColor: 'white',
                        icon: 'cloud_done',
                        message: 'Login Successfully'
                    })
                    // Navigate to the Location.reload article by replacing this page
                    if(this.add_comment == 'yes') {
                        window.location.reload() // from comments section
                    } else {
                        window.location.href = route('home') /// from home page
                    }
                }
            })
            .catch (error => {
                this.$setLaravelValidationErrorsFromResponse(error.response.data);
            });
        }
    }
}
</script>