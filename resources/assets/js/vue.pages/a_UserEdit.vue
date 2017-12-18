<template>
	<div>
		<i  v-show="loading" class="fa fa-spinner fa-spin"></i>
		<form v-show="!loading">
				<h2>Editing user #{{user.id}}: {{user.firstname}}</h2>
				<hr>

				<!-- type -->
				<div class="form-group row">
					<label for="type" class="col-sm-2 col-form-label">Type</label>
					<div class="col-sm-10">
						<select class="custom-select" name="type" v-model="user.type">
							<option value="guest">guest</option>
							<option value="user">user</option>
							<option value="admin">admin</option>
						</select>
					</div>
				</div>

				<!-- firstname -->
				<div class="form-group row">
					<label for="firstname" class="col-sm-2 col-form-label">First Name</label>
					<div class="col-sm-10">
						<input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" required="" autofocus="" v-model="user.firstname">
					</div>
				</div>

				<!-- lastname -->
				<div class="form-group row">
					<label for="lastname" class="col-sm-2 col-form-label">Last Name</label>
					<div class="col-sm-10">
						<input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" v-model="user.lastname">
					</div>
				</div>

				<!-- email -->
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="" v-model="user.email">
					</div>
				</div>

				<!-- address -->
				<div class="form-group row">
					<label for="address" class="col-sm-2 col-form-label">Address</label>
					<div class="col-sm-10">
						<input type="text" id="address" name="address" class="form-control" placeholder="Address" v-model="user.address">
					</div>
				</div>

				<!-- postcode -->
				<div class="form-group row">
					<label for="postcode" class="col-sm-2 col-form-label">Postcode</label>
					<div class="col-sm-10">
						<input type="text" id="postcode" name="postcode" class="form-control" placeholder="Postcode" v-model="user.postcode">
					</div>
				</div>

				<!-- phone -->
				<div class="form-group row">
					<label for="phone" class="col-sm-2 col-form-label">Phone</label>
					<div class="col-sm-10">
						<input type="text" id="phone" name="phone" class="form-control" placeholder="Phone" v-model="user.phone">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-10 ml-auto">
						<button type="button" class="btn btn-primary" @click="updateUser(user)">Save</button>
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
				firstname: '',
				lastname: '',
				email: '',
				address: '',
				postcode: '',
				phone: '',
				type: '',
			},
			errors: [],
			loading: false
		}),

		methods: {
			updateUser: function(user) {
				window.axios
				.put('/users/'+user.id, user)
				.then(response => {
					console.log('edited user', response.data);
					this.$router.push('/users');
				})
				.catch(e => {
					this.errors.push(e)
				})
			}
		},

		// Fetches users when the component is created.
		created() {
			this.loading = true;
			window.axios.get('/users/'+ this.$route.params.id)
			.then(response => {
				console.log(response.data);
				// JSON responses are automatically parsed.
				this.user = response.data;

				this.loading = false;
			})
			.catch(e => {
				this.errors.push(e)
			})
		}
	}
</script>
