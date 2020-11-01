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
                            <q-input filled v-model="text" label="Name"  />
                            <q-input filled v-model="text" label="Email" type="email" />
                            <q-input v-model="password" filled type="password" label="Password" />
                            <q-toggle v-model="accept" label="I accept the license and terms" />
                            <div class="tw-text-xs tw-text-gray-700">
                                By continuing you indicate that you have read and 
                                agree to OakHouse-Technology's
                                <a href="" class="text-primary hover:tw-underline">Terms of Service</a>
                                and 
                                <a href="" class="text-primary hover:tw-underline">Privacy Policy.</a>
                            </div>
                            <div class="text-right">
                                <q-btn  push color="primary" no-caps label="Sign Up" />
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
                accept: false
            }
        }
    }
</script>