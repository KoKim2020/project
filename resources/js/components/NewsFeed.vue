<template>
    <div class="q-pa-sm">
        <q-card class="my-card">
            <img src="https://cdn.quasar.dev/img/mountains.jpg">

            <q-card-section>
                <div class="text-h6">Our Changing Planet</div>
                <div class="text-subtitle2">by John Doe</div>
            </q-card-section>

            <q-card-section class="q-pt-none">
                {{ lorem }}
            </q-card-section>
        </q-card>
    </div>
</template>

<script>
export default {
    data () {
        return {
            lorem: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        }
    }
}
</script>

<style lang="sass" scoped>
    .my-card
        width: 100%
        max-width: 450px
</style>