<template>
	<div>
		<div v-if="loading">
			<h2>Searching for page</h2>
			<i class="fa fa-spinner fa-spin"></i>
		</div>
		<div v-show="!loading">
		<h2>Page not found</h2>
		<p>Sorry but that page doesn't exist.</p>
		</div>
	</div>

</template>

<script>
	export default {

		data: () => ({
			loading: true
		}),

		methods: {
			stopLoading() {
				this.loading = false;
			}
		},
		// Fetches users when the component is created.
		created() {
			setTimeout(this.stopLoading, 2000);

		}
	}


</script>
