<template>
	<div class="">
		<div class="row no-wrap shadow-1">
			<q-toolbar class="col-9 bg-grey-3">			
				<q-toolbar-title class="tw-font-sans text-primary text-weight-bolder tw-uppercase">OakHouse Technology</q-toolbar-title>
				<!-- Home -->
				<q-btn flat type="a" href="" push  icon="fas fa-home" color="primary" label="Home" />
				<!-- Projects -->
				<q-btn-dropdown flat color="primary" label="Projects">
					<q-list>
						<q-item clickable v-close-popup @click="onItemClick">
							<q-item-section>
								<q-item-label class="text-primary">Arduino Projects</q-item-label>
							</q-item-section>
						</q-item>

						<q-item clickable v-close-popup @click="onItemClick">
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
				<q-btn no-caps rounded color="primary"  label="Q & A Section" />
								<q-space />

				<!-- account setting -->
				<q-btn-dropdown
					flat
					color="cyan"
					push
					no-caps
					@click="onMainClick"
					>
					<template v-slot:label>
						<q-avatar size="42px">
							<img src="https://cdn.quasar.dev/img/avatar2.jpg">
						</q-avatar>
					</template>

					<div class="row no-wrap q-pa-md">
						<div class="column">
							<div class="text-h6 q-mb-md">Settings</div>
						</div>

						<q-separator vertical inset class="q-mx-lg" />

						<div class="column items-center">
							<q-avatar size="72px">
								<img src="https://cdn.quasar.dev/img/boy-avatar.png">
							</q-avatar>

							<div class="text-subtitle1 q-mt-md q-mb-xs">John Doe</div>

							<q-btn
								color="primary"
								label="Logout"
								push
								size="sm"
								v-close-popup
							/>
						</div>
					</div>
				</q-btn-dropdown>
			</q-toolbar>
		</div>
	</div>
</template>

<style >
	.q-toolbar__title {
		font-size: 15px !important;
	}
</style>