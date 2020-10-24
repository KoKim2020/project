<template>
	<div class="">
		<div class="row no-wrap shadow-1">
			<q-toolbar class="col-8 bg-grey-3">
				<q-btn flat round dense icon="menu" />
				<q-toolbar-title class="font-sans">OakHouse Technology</q-toolbar-title>
				<q-btn flat round dense icon="search" />
			</q-toolbar>
			<q-toolbar class="col-4 text-white bg-grey-3">
				<q-space />
				<!-- <q-btn flat round dense icon="bluetooth" class="q-mr-sm" /> -->
				<q-btn flat round dense icon="more_vert" />
			</q-toolbar>
		</div>
	</div>
</template>

<style >
	.q-toolbar__title {
		font-size: 15px !important;
	}
	@media (min-width: 640px) {
		.q-toolbar__title {
			font-size: 21px !important;
		}
	}
</style>