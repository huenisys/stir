<template>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<a class="navbar-brand" href="/" target="_top">Site</a>
			<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarsExampleDefault">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a class="nav-link" href="/" target="_top">Home</a></li>
				</ul>
				<span class="navbar-text">
					[ <a href="/dashboard"><fa class="fa-user" /> {{user.email}}</a> ]( <a href="javascript:void(0);" v-on:click="logoutUser"><i class="text-warning">logout</i></a> )
				</span>
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

