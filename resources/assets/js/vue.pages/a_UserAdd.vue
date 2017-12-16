<template>
	<div>
		<i  v-show="loading" class="fa fa-spinner fa-spin"></i>
		<form v-show="!loading">
				<h2>Adding a new user</h2>
				<hr>

				<!-- name -->
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Name</label>
					<div class="col-sm-10">
						<input type="text" id="name" name="name" class="form-control" placeholder="Name" required="" autofocus="" v-model="user.name">
					</div>
				</div>

				<!-- email -->
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="" v-model="user.email">
					</div>
				</div>

				<div class="form-group row">
					<label for="password" class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-10">
						<input type="password" id="password" name="password" class="form-control" placeholder="Password" required="" v-model="user.password">
					</div>
				</div>

				<!-- password -->
				<div class="form-group row">
					<div class="col-sm-10 ml-auto">
						<button type="button" class="btn btn-primary" @click="addUser(user)">Save</button>
					</div>
				</div>
		</form>

	</div>
</template>

<script>
	export default {
		data: () => ({
			action: '',
			user: {
				name: '',
				email: ''
			},
			errors: [],
			loading: false
		}),

		methods: {
			addUser: function(user) {
				window.axios
				.post('/users', user)
				.then(response => {
					console.log('added user', response.data);
					this.$router.push('/users');
				})
				.catch(e => {
					this.errors.push(e)
				})
			}
		},

		// Fetches users when the component is created.
		created() {
			this.loading = false;

		}
	}
</script>
