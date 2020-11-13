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
                            <q-item-label>Arduino Projects</q-item-label>
                        </q-item-section>
                    </q-item>

                    <q-item clickable v-close-popup>
                        <q-item-section  @click="comingSoonUrl">
                            <q-item-label class="text-no-wrap">Respberry Pi Projects</q-item-label>
                        </q-item-section>
                    </q-item>

                    <q-item clickable v-close-popup>
                        <q-item-section  @click="comingSoonUrl">
                            <q-item-label class="text-no-wrap">Electronics</q-item-label>
                        </q-item-section>
                    </q-item>

                    <q-item clickable v-close-popup>
                        <q-item-section  @click="comingSoonUrl">
                            <q-item-label class="text-no-wrap">Robotics</q-item-label>
                        </q-item-section>
                    </q-item>

                    <q-item clickable v-close-popup>
                        <q-item-section  @click="comingSoonUrl">
                            <q-item-label class="text-no-wrap">Add A Post</q-item-label>
                        </q-item-section>
                    </q-item>
                </q-list>
            </q-btn-dropdown>
            <q-toolbar-title class="tw-font-sans text-primary text-weight-bolder tw-uppercase">OakHouse Technology</q-toolbar-title>
            <slot></slot>
        </q-toolbar>
    </div>
</template>

<script>
export default {
	data () {
		return {
		
		}
	},
	created (){
		var url = window.location.pathname;
		this.currentUrl = url
		console.log(route('home'))
	},
	methods: {
		comingSoonUrl () {
			window.location.href = route('coming_soon')
        },
        homeUrl () {
            window.location.href = route('home')
        }
	}
}
</script>