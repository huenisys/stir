<template>
	<div class="container-fluid body-fluid-wrap">
		<!-- nav -->
		<navbar :currentUser="currentUser" />
		<!-- nav -->
		<div class="row">
			<!-- sidebar -->

			<div class="col-sm-3 col-md-2 d-none d-sm-block sidebar">
				<sidebar :currentUser="currentUser" />
			</div>

			<!-- sidebar -->
			<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
				<router-view  />
			</main>
		</div>
		<bottombar />
	</div>
	<!-- /.container-fluid -->
</template>

<script>
	import Navbar from './navbar'
	import Sidebar from './sidebar.user'
	import Bottombar from './bottombar'

	export default {
		computed: {
			currentUser(){
				return this.$store.state.auth.user
			}
		},
		components: {
			navbar: Navbar,
			sidebar: Sidebar,
			bottombar: Bottombar,
		},
		// Fetches user data when comp is created
		created() {
			this.$store.dispatch('auth/getCurrentUser')
		}
	}
</script>
