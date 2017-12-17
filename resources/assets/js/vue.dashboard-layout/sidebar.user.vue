<template>
	<div>
		<nav class="nav flex-column">
			<div class="nav-link disabled"><h6>Profile</h6></div>
			<router-link class="nav-link d-md-none" to="/dashboard">Dashboard</router-link>
			<router-link class="nav-link" to="/profile-edit" :title="'user: '+user.email"><fa class="fa-fw fa-user" /> Edit profile</router-link>
		</nav>
		<nav class="nav flex-column" v-if="isAdmin">
			<div class="nav-link disabled"><h6>Administer</h6></div>
			<a class="nav-link" href="/admin#/users"><fa class="fa-fw fa-users" /> Users</a>
		</nav>
	</div>
</template>
<script>
export default {
	computed: {
		isAdmin: function() {
			return this.user.type === 'admin';
		}
	},
	props: ['user'],
}
</script>
