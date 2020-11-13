<template>
	<div class="">
		<div class="row no-wrap shadow-1">
			<q-toolbar class="col-9 bg-grey-3">	
				<q-toolbar-title class="text-primary text-weight-bolder tw-uppercase">OakHouse Technology</q-toolbar-title>
				<!-- Home -->
				<q-btn flat type="a" :href="homeUrl"   icon="fas fa-home" :color="currentUrl == '/' || currentUrl == '//'  ? 'indigo' : 'primary'" label="Home"/>
				<!-- Projects -->
				<q-btn-dropdown flat color="primary" label="Projects">
					<q-list>
						<q-item clickable v-close-popup>
							<q-item-section>
								<q-item-label class="text-primary">Arduino Projects</q-item-label>
							</q-item-section>
						</q-item>

						<q-item clickable v-close-popup>
							<q-item-section>
								<q-item-label class="text-primary">Respberry Pi Projects</q-item-label>
							</q-item-section>
						</q-item>
					</q-list>
				</q-btn-dropdown>
				<!-- Electronics -->
				<q-btn flat type="a" href="" push color="primary" label="Electronics" />
				<!-- Robotics -->
				<q-btn flat type="a" href="" push color="primary" label="Robotics" />
				<q-input rounded outlined dense>
					<template v-slot:append>
						<!-- <q-icon v-if="text !== ''" name="close" @click="text = ''" class="cursor-pointer" /> -->
						<q-icon name="search" />
					</template>
				</q-input>
			</q-toolbar>
			
			<q-toolbar class="col-3 bg-grey-3">
				<q-btn no-caps outline color="primary" label="Add A Post" />
                <q-space />
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
	data () {
		return {
			currentUrl: '',
			homeUrl: route('home')
		}
	},
	created (){
		var url = window.location.pathname;
		this.currentUrl = url
		console.log(route('home'))
    }
}
</script>