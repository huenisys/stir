<template>
	<div class="container-fluid">
		<!-- nav -->
		<navbar :currentUser="currentUser" />
		<!-- nav -->
		<div class="row">
			<!-- sidebar -->

			<div class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
				<sidebar :currentUser="currentUser" />
			</div>

			<!-- sidebar -->
			<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
				<router-view />
			</main>
		</div>
		<bottombar />
	</div>
	<!-- /.container-fluid -->
</template>

<script>
	import Navbar from './navbar'
	import Sidebar from './sidebar.admin'
	import Bottombar from './bottombar'

	export default {
		data: () => ({
			currentUser: {
				firstname: '',
				lastname: '',
				email: '',
				type: '',
			},
		}),
		components: {
			navbar: Navbar,
			sidebar: Sidebar,
			bottombar: Navbar,
		},
		// Fetches user data when comp is created
		created() {

			window.axios.get('/get-me')
			.then(res => {
				this.currentUser = res.data;
			})
			.catch(e => {
				this.errors.push(e)
			})
		}

	}
</script>
