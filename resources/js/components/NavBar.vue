<template>
	<div class="">
		<pre>{{ currentUrl }}</pre>
		<div class="row no-wrap shadow-1">
			<q-toolbar class="col-10 bg-grey-3">	
				<q-avatar>
					<img :src="site_img">
				</q-avatar>
				<q-toolbar-title class="text-primary text-weight-bolder tw-uppercase tw-cursor-pointer" @click="redirectHome">OakHouse Tech</q-toolbar-title>
				<!-- Home -->
				<q-btn flat type="a" :href="homeUrl"   icon="rss_feed" :color="currentUrl + '/' == homeUrl || currentUrl == homeUrl  ? 'red' : 'primary'" label="Tech Feed"/>
				<!-- Projects -->
				<q-btn-dropdown flat label="Electronics" 
					:color="currentUrl == a || currentUrl == b ? 'red' : 'primary'">
					<q-list>
						<q-item clickable v-close-popup>
							<q-item-section @click="redirectUrl('arduino_electronics')">
								<q-item-label class="text-primary">Arduino Electroincs Projects</q-item-label>
							</q-item-section>
						</q-item>

						<q-item clickable v-close-popup>
							<q-item-section @click="redirectUrl('resp_electronics')">
								<q-item-label class="text-primary">Respberry Electroincs Pi Projects</q-item-label>
							</q-item-section>
						</q-item>
					</q-list>
				</q-btn-dropdown>

				<q-btn-dropdown flat color="primary" label="Robotics">
					<q-list>
						<q-item clickable v-close-popup>
							<q-item-section @click="redirectUrl('arduino_robotics')">
								<q-item-label class="text-primary">Arduino Robotics Projects</q-item-label>
							</q-item-section>
						</q-item>

						<q-item clickable v-close-popup>
							<q-item-section @click="redirectUrl('resp_robotics')">
								<q-item-label class="text-primary">Respberry Pi Robotics Projects</q-item-label>
							</q-item-section>
						</q-item>
					</q-list>
				</q-btn-dropdown>

				<q-input rounded outlined dense>
					<template v-slot:append>
						<!-- <q-icon v-if="text !== ''" name="close" @click="text = ''" class="cursor-pointer" /> -->
						<q-icon name="search" />
					</template>
				</q-input>
			</q-toolbar>
			
			<q-toolbar class="col-2 bg-grey-3">
				<slot></slot>
			</q-toolbar>
		</div>
	</div>
</template>

<style >
	.q-toolbar__title {
		font-size: 11px !important;
	}
	@media (min-width: 640px) { 
		.q-toolbar__title {
			font-size: 15px !important;
		}
	}

</style>

<script>
export default {
	props: ['site_img'],
	data () {
		return {
			homeUrl: route('home'),
			a: route('select_category', 'arduino_electronics'),
			b: route('select_category', 'resp_electronics') 
		}
	},
	computed: {
		currentUrl: function () {
			return window.location.href
		}
	},
	methods: {
		redirectUrl (category) {
			window.location.href = route('select_category', category)
		},
		redirectHome () {
			window.location.href = route('home')
		}
	}
}
</script>