<template>
	<div>
		<h5>Dashboard [{{user.email}}]</h5>
		<table class="table table-responsive table-bordered table-striped table-sm">
      <tbody>
        <tr><th>Type</th><td>{{user.type}}</td></tr>
        <tr><th>First Name</th><td>{{user.firstname}}</td></tr>
        <tr><th>Last Name</th><td>{{user.lastname}}</td></tr>
        <tr><th>Phone</th><td>{{user.phone}}</td></tr>
        <tr><th>Address</th><td>{{user.address}}</td></tr>
        <tr><th>Postcode</th><td>{{user.postcode}}</td></tr>
      </tbody>
    </table>
	</div>
</template>

<script>
	export default {
    computed: {
      user() {
        return this.$store.state.auth.user
      }
    }
	}
</script>
