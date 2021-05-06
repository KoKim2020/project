<template>
    <div>
        <pre>{{ $user }}</pre>
        <q-card class="my-card" flat bordered>
            <q-item>
                <q-item-section avatar>
                    <q-avatar square size="135px">
                        <img :src="$user.profile_img" />
                    </q-avatar>
                </q-item-section>

                <q-item-section>
                    <div class="text-h6">
                        {{ $user.name }}
                    </div>
                    <div class="text-subtitle1">
                        Server Admin
                    </div>
                </q-item-section>

            </q-item>

            <q-separator />

            <q-card-section>
                <q-tabs
                    v-model="tab"
                    dense
                    class="text-grey"
                    active-color="primary"
                    indicator-color="primary"
                    align="justify"
                    narrow-indicator
                >
                    <q-tab name="mails" label="Mails" />
                    <q-tab name="alarms" label="Alarms" />
                    <q-tab name="movies" label="Movies" />
                </q-tabs>

                <q-separator />

                <q-tab-panels v-model="tab" animated>
                    <q-tab-panel name="mails">
                        <div class="text-h6">Mails</div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </q-tab-panel>

                    <q-tab-panel name="alarms">
                        <div class="text-h6">Alarms</div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </q-tab-panel>

                    <q-tab-panel name="movies">
                        <div class="text-h6">Movies</div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </q-tab-panel>
                </q-tab-panels>
            </q-card-section>
        </q-card>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                lorem: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                tab: 'mails'
            }
        },
    }
</script>

<style lang="sass" scoped>
    .my-card
        width: 100%
        max-width: 700px
</style>