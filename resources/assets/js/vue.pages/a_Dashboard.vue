<template>
	<div>
		<h2>Admin Dashboard</h2>
		<section class="row text-center placeholders">
			<div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 placeholder">
				<router-link to="/users"><img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail"></router-link>
				<h6>Users</h6>
				<div class="text-muted d-none d-sm-block">Describe</div>
			</div>
		</section>
		<users></users>
	</div>
</template>

<script>
	import Users from './a_Users';

	export default {
		components:{
         'users': Users
    }
	}
</script>
