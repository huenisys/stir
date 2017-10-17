<template>
	<div>
		<i  v-show="loading" class="fa fa-spinner fa-spin"></i>
		<form v-show="!loading">
				<h2>Editing user #{{user.id}}: {{user.firstname}}</h2>
				<hr>

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
				// get id from auth
				.put('/user', user)
				.then(response => {
					console.log('edited user', response.data);
					this.$router.push('/dashboard');
				})
				.catch(e => {
					this.errors.push(e)
				})
			}
		},

		// Fetches users when the component is created.
		created() {

			window.axios.get('/get-me')
			.then(res => {
				this.user = res.data;
			})
			.catch(e => {
				this.errors.push(e)
			})

		}
	}
</script>
