<template>
	<nav>
		<ul class="nav nav-pills flex-column">
			<li class="nav-item d-md-none"><router-link class="nav-link" to="/dashboard">Dashboard</router-link></li>
			<li class="nav-item"><router-link class="nav-link" to="/users"><i aria-hidden="true" class="fa fa-fw mr-1 d-block d-sm-inline fa-users"></i>Users</router-link></li>
		</ul>
	</nav>
</template>
<script>
export default {
	props: ['currentUser'],
}
</script>
