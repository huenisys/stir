<template>
	<div>
		<nav class="nav flex-column" v-if="isAdmin">
			<div class="nav-link disabled"><h6>Administer</h6></div>
			<router-link class="nav-link" to="/users"><fa class="fa-fw fa-users" /> Users</router-link>
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
