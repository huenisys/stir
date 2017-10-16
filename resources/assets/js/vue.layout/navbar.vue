<template>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<a class="navbar-brand" href="/" target="_top">Site</a>
			<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarsExampleDefault">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a class="nav-link" href="/" target="_top">Home</a></li>
					<li class="nav-item"><router-link class="nav-link" to="/dashboard">Dashboard</router-link></li>
					<li class="nav-item" v-if="isAdmin"><a class="nav-link" href="/admin">[ Admin ]</a></li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="javascript:void(0);" class="nav-link" v-on:click="logoutUser">[ <span class="text-danger">{{currentUser.email}}</span> ]( <i class="text-success">logout</i> )</a></li>
				</ul>
			</div>
		</nav>
</template>

<style>
/* Move down content because we have a fixed navbar that is 3.5rem tall */
body {
  padding-top: 3.5rem;
  padding-bottom: 5rem;
}
</style>

<script>

	export default {
		data: () => ({
		}),
		computed: {
			isAdmin: function() {
				return this.currentUser.type == 'admin';
			}
		},
		props: ['currentUser'],
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

