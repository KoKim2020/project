<template>
    <div>
        <q-toolbar class="bg-grey-3">
            <q-btn-dropdown flat round  icon="menu">
                <q-list class="text-primary">
                    <q-item clickable v-close-popup>
                        <q-item-section @click="homeUrl">
                            <q-item-label>Home</q-item-label>
                        </q-item-section>
                    </q-item>

                    <q-item clickable v-close-popup>
                        <q-item-section @click="comingSoonUrl">
                            <q-item-label>Arduino Electronics Projects</q-item-label>
                        </q-item-section>
                    </q-item>

                    <q-item clickable v-close-popup>
                        <q-item-section  @click="comingSoonUrl">
                            <q-item-label class="text-no-wrap">Respberry Pi Electronics Projects</q-item-label>
                        </q-item-section>
                    </q-item>

                    <q-item clickable v-close-popup>
                        <q-item-section @click="comingSoonUrl">
                            <q-item-label>Arduino Robotics Projects</q-item-label>
                        </q-item-section>
                    </q-item>

                    <q-item clickable v-close-popup>
                        <q-item-section  @click="comingSoonUrl">
                            <q-item-label class="text-no-wrap">Respberry Pi Robotics Projects</q-item-label>
                        </q-item-section>
                    </q-item>

                    <q-item clickable v-close-popup>
                        <q-item-section  @click="createPostUrl">
                            <q-item-label class="text-no-wrap">Add A Post</q-item-label>
                        </q-item-section>
                    </q-item>
                    <q-separator spaced  v-if="user.length === 0"/>
                    <q-item clickable v-close-popup v-if="user.length === 0">
                        <q-item-section class="text-center bg-teal-2" @click="loginUrl">
                            <q-item-label class="text-no-wrap" >Login</q-item-label>
                        </q-item-section>
                    </q-item>
                    <q-item clickable v-close-popup  v-if="user.length === 0">
                        <q-item-section class="text-center bg-teal-4" @click="registerUrl">
                            <q-item-label class="text-no-wrap text-white">Register</q-item-label>
                        </q-item-section>
                    </q-item>
                </q-list>
            </q-btn-dropdown>
            <q-toolbar-title class="tw-font-sans text-primary text-weight-bolder tw-uppercase " @click="homeUrl">OakHouse-Tech</q-toolbar-title>
            <slot></slot>
        </q-toolbar>
    </div>
</template>

<script>
export default {
    props: ['user', 'site_img'],
	methods: {
		comingSoonUrl () {
			window.location.href = route('coming_soon')
        },
        homeUrl () {
            window.location.href = route('home')
        },
        loginUrl () {
            window.location.href = route('login')
        },
        registerUrl () {
            window.location.href = route('register')
        }, 
        createPostUrl() {
            window.location.href = route('post.create')
        }
	}
}
</script>