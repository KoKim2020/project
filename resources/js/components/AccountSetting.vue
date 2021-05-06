<template>
    <div>
        <!-- <pre>{{ current_user }}</pre> -->
        <q-btn-dropdown
            flat
            color="cyan"
            push
            no-caps
            >
            <template v-slot:label>
                <q-avatar size="33px">
                    <img :src="$user.profile_img">
                </q-avatar>
            </template>

            <q-list bordered separator style="width: 250px;" class="text-center">
                <q-item clickable v-ripple>
                    <div class=" row items-start q-gutter-md">
                        <q-avatar size="52px">
                            <img :src="$user.profile_img">
                        </q-avatar>
                        <q-item-section class="q-pt-sm">
                            <q-item-label>{{  $user.name }}</q-item-label>
                            <q-item-label caption>Electronics Engineer</q-item-label>
                        </q-item-section>
                    </div>
                </q-item>

                <q-item clickable v-ripple @click="viewProfile">
                    <q-item-section>
                        <q-item-label>See Your Profile</q-item-label>
                    </q-item-section>
                </q-item>

                <q-item clickable v-ripple>
                    <q-item-section>
                        <q-form :action='logOut' method="POST">
                            <slot></slot>
                            <q-btn
                                color="primary"
                                label="Logout"
                                flat
                                v-close-popup
                                type="submit"
                                no-caps
                            />
                        </q-form>
                    </q-item-section>
                </q-item>
            </q-list>
		</q-btn-dropdown>
    </div>
</template>
<script>
    export default {
        data () {
            return {
                logOut: route('logout')
            }
        },
        methods: {
            viewProfile () {
               	window.location.href = route('view_profile.index')
            }
        }
    }
</script>