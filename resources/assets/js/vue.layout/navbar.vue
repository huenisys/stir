<template>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="/">Site</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarTop">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/"><fa class="fa-home fa-fw" /> Home</a>
					</li>
				</ul>
				<span class="navbar-text">
				[ <a href="/dashboard"><fa class="fa-user" /> {{user.email}}</a> ]( <a href="javascript:void(0);" v-on:click="logoutUser"><i class="text-warning">logout</i></a> )
				</span>
			</div><!-- /.collapse.navbar-collapse -->
		</div><!-- /.container -->
	</nav>
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

