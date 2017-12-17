<template>
	<div class="container-fluid bg-dark text-white">
		<div class="d-flex">
			<div class="mr-auto p-2"><a href="/"><fa class="fa-home fa-fw" /> Site</a></div>
			<div class="p-2">[ <a href="/dashboard"><fa class="fa-user" /> {{user.email}}</a> ]( <a href="javascript:void(0);" v-on:click="logoutUser"><i class="text-warning">logout</i></a> )</div>
		</div>
	</div>
</template>

<style>

</style>

<script>

	export default {
		props: ['user'],
		methods: {
			logoutUser: function() {
				window.axios.post('/logout').then(function(res1) {
					if (res1.status == '200') {
						window.location.href = "/";
					};
				});
			}
		},

		created() {

		}

	}

</script>

