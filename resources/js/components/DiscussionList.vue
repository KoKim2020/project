<template>
    <div class="">
        <div class="text-h6 tw-mt-3">
            Discussion(0)
        </div>
        <q-input bottom-slots v-model="text" label="Add to the Discussion"  :dense="dense" autogrow>
            <template v-slot:before>
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
    </div>
</template>

<script>
    export default {
        data () {
            return {
                text: '',
                ph: '',

                dense: false
            }
        }
    }
</script>