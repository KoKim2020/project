<template>
    <div>
        <q-dialog v-model="alert" persistent>
            <q-card>
                <q-card-section>
                    <div class="text-h6">{{ title }}</div>
                </q-card-section>

                <q-card-section class="q-pt-none">
                    <slot></slot>
                </q-card-section>

                <q-card-actions align="right">
                </q-card-actions>
            </q-card>
        </q-dialog>
    </div>
</template>

<script>
export default {
    props: ['title'],
    data () {
        return {
            alert: true,
        }
    }
}
</script>