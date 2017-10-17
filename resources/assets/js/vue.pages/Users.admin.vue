<template>
	<div>
		<div class="row mt-4">
			<div class="col">
				<h2>Users</h2>
			</div>
			<div class="col">
				<div class="input-group input-group-sm">
					<div class="input-group-btn">
						<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bulk</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="javascript:void(0)" @click="bulkDestroyUsers()">Delete</a>
						</div>
					</div>
					<div class="input-group-btn">
						<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" :title="'Filtered by: '+visibility">Filter</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="javascript:void(0)" v-for="filterType of filterOptions" @click="visibility=filterType">{{filterType}}</a>
						</div>
					</div>
					<input type="text" class="form-control" aria-label="Text input with dropdown button">
				</div>
				<select name="" id="" v-model="visibility" class="float-right d-none">
					<option v-for="filterType of filterOptions" :value="filterType">{{filterType}}</option>
				</select>
			</div>
			<div class="col">
				<button class="btn btn-success btn-sm float-right" @click="$router.push('/user');">Add New User</button>
			</div>
		</div>
		<i  v-show="loading" class="fa fa-spinner fa-spin"></i>
		<div v-show="!loading" class="table-responsive">
			<table class="table table-striped table-sm">
				<thead>
					<tr>
						<th></th>
						<th>#</th>
						<th>firstname</th>
						<th>lastname</th>
						<th>email</th>
						<th>phone</th>
						<th>type</th>
						<th>edit</th>
						<th>delete</th>
					</tr>
				</thead>
				<tbody v-if="users && users.length">
					<tr v-for="user of filteredUsers">
						<td>
							<label class="form-check-label hue-mid">
								<input :title="user.id" type="checkbox" v-model="checkedUsers" @click="checkedUsersChanged(user)" :value="user.id" />
							</label>
						</td>
						<td>{{user.id}}</td>
						<td><a :href="'mailto:' + user.email" target="_top" :title="'mailto:' + user.email"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></a> <span :title="user.firstname">{{user.firstname}}</span></td>
						<td>{{user.lastname}}</td>
						<td>{{user.email}}</td>
						<td>{{user.phone}}</td>
						<td>{{user.type}}</td>
						<td><router-link :to="{'name': 'UserEdit', params: { id: user.id }}">edit</router-link ></td>
						<td><a href="javascript:void(0)" class="text-center" @click="destroyUser(user)">delete</a></td>
					</tr>
				</tbody>
				<tbody v-if="errors && errors.length">
					<tr v-for="error of errors">
						<td colspan="3">{{error.message}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</template>

<script>

// dataLayer
var userStorage = {
	getAll: function() {
		return window.axios.get('/users');
	},
	delete: function(user) {
		return window.axios.delete('/users/'+user.id)
	}
};

// visibility filters
var filters = {
	all: function (users) {
		return users;
	},
	checked: function (users) {
		return users.filter(function (user) {
			return user.checked;
		});
	},
	unchecked: function (users) {
		return users.filter(function (user) {
			return !user.checked;
		});
	}
}

	export default {

		data: () => ({
			filterOptions: [],
			users: [],
			errors: [],
			loading: false,
			visibility: 'all',
			checkedUsers: []
		}),

		computed: {
			filteredUsers: function () {
				return filters[this.visibility](this.users)
			},
		},

		methods: {
			checkedUsersChanged: function(user) {
				if (this.checkedUsers.indexOf(user.id) != -1) {
					user.checked = true;
				}
				else {
					user.checked = false;
				}
			},
			destroyUser: function(user) {

				userStorage.delete(user).then(response => {
					console.log('deleted user', response.data);
					location.reload();
				})
				.catch(e => {
					this.errors.push(e)
				});

			},
			bulkDestroyUsers: function() {
				window.axios.post('/delete-users', {ids: this.checkedUsers}).then(response => {
					console.log('deleted users:', this.checkedUsers);
					this.$router.push('/users');
				})
				.catch(e => {
					this.errors.push(e)
				})
			},
		},

		// Fetches users when the component is created.
		created() {

			var vm = this;

			vm.loading = true;

			userStorage.getAll().then(response => {

				// enhance each user object
				var enhancedArr = _.map(response.data , function(element) {
						return _.extend({}, element, {

							// adds prop to be used for bulk edit/delete function later
							checked: false
						});
				});

				vm.users = enhancedArr;

				// hides loading icon
				vm.loading = false;
			})
			.catch(e => {
				vm.errors.push(e)
			});



			// get the filter options
			window._.forOwn(filters, function(value, key) {
				vm.filterOptions.push(key);
			});

		}
	}
</script>

<style scoped>
	.form-check-label.hue-mid {
		padding: .3rem .5rem;
	}
</style>
