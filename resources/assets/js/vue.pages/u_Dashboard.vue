<template>
	<div>
		<h5 :title="user.type +': '+user.email">Dashboard</h5>
		<table class="table table-responsive-xs table-hover table-striped table-sm">
      <thead>
        <tr>
          <th colspan="2">Your Profile</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Email</td><td>{{user.email}}</td></tr>
        <tr><td>First Name</td><td>{{user.firstname}}</td></tr>
        <tr><td>Last Name</td><td>{{user.lastname}}</td></tr>
        <tr><td>Phone</td><td>{{user.phone}}</td></tr>
        <tr><td>Address</td><td>{{user.address}}</td></tr>
        <tr><td>Postcode</td><td>{{user.postcode}}</td></tr>
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
