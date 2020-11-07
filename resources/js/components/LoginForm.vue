<template>
    <div class="q-gutter-y-md column" style="max-width: 300px">
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
        <div class="row justify-between">
            <q-btn flat type="a" href="" no-caps push color="primary" label="Forgot Password?" />
            <q-btn label="Login" no-caps push type="submit" color="primary" @click="logIn"/>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            formData: {
                email: '',
                password: ''
            },
            isPwd: true,
        }
    },
    methods: {
        logIn() {
            axios
            .post('/login', this.formData)
            .then(response => {
                if(response.data.status == 'success'){
                    this.$q.notify({
                        color: 'green-4',
                        textColor: 'white',
                        icon: 'cloud_done',
                        message: 'Register Successfully'
                    })
                    // Navigate to the Location.reload article by replacing this page
                    window.location.href = route('home')
                }
            })
            .catch (error => {
                this.$setLaravelValidationErrorsFromResponse(error.response.data);
            });
        }
    }
}
</script>