<template>

	<div id="accordion" role="tablist" class="mb-4">
		<div class="card">
			<div class="card-header" role="tab" id="headingUser">
				<div class="d-flex">
					<div>
						<a href="/dashboard#/home"><fa class="fa-dashboard" title="User Dashboard" /></a>
					</div>
					<div class="link-collapser mr-auto">
						<a class="h5" data-toggle="collapse" href="#collapseUser" aria-expanded="true" aria-controls="collapseUser">
						Profile</a>
					</div>
					<div>
						<fa :class="{'fa-chevron-left':userPanelOpened,'fa-chevron-down':!userPanelOpened}" />
					</div>
				</div>
			</div>
			<div id="collapseUser" class="collapse" role="tabpanel" aria-labelledby="headingUser" data-parent="#accordion">
				<div class="card-body-removed">
					<div class="list-group">
						<a class="list-group-item list-group-item-action" href="/dashboard#/profile-edit" :title="'user: '+user.email"><fa class="fa-fw fa-user" /> Edit profile</a>
					</div>
				</div>
			</div>
		</div>

		<div class="card" v-if="isAdmin">
			<div class="card-header" role="tab" id="headingAdmin">
				<div class="d-flex">
					<div>
						<a href="/admin#/home"><fa class="fa-cogs" title="Admin Dashboard" /></a>
					</div>
					<div class="link-collapser mr-auto">
						<a class="h5" data-toggle="collapse" href="#collapseAdmin" aria-expanded="true" aria-controls="collapseAdmin">
						Admin</a>
					</div>
					<div>
						<fa :class="{'fa-chevron-left':adminPanelOpened,'fa-chevron-down':!adminPanelOpened}" />
					</div>
				</div>
			</div>
			<div id="collapseAdmin" class="collapse" role="tabpanel" aria-labelledby="headingAdmin" data-parent="#accordion">
				<div class="card-body-removed">
					<div class="list-group">
						<a class="list-group-item list-group-item-action" href="/admin#/users"><fa class="fa-fw fa-users" /> Users</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</template>

<style scoped>
a.list-group-item {
		border-radius: 0 !important;
		border-width: 1px 0 0 0 !important;
}
.link-collapser {
	border-left: 1px solid #ccc;
	margin-left: .75rem;
	padding-left: .75rem;
}
</style>

<script>
export default {
	data: function(){
		return {
			panelOpened: null
		}
	},
	computed: {

		isAdmin: function() {
			return this.user.type === 'admin';
		},
		isUser: function() {
			return this.user.type === 'user';
		},
		adminPanelOpened: function() {
			return this.panelOpened === 'admin';
		},
		userPanelOpened: function() {
			return this.panelOpened === 'user';
		}
	},
	props: ['user'],

	created() {
		window.svm = this;
		$(document).ready(function(){

			$('#collapseAdmin').on('show.bs.collapse', function () {
				window.svm.panelOpened = 'admin'
			})
			$('#collapseUser').on('show.bs.collapse', function () {
				window.svm.panelOpened = 'user'
			})
			$('#collapseAdmin').on('hidden.bs.collapse', function () {
				window.svm.panelOpened = null
			})
			$('#collapseUser').on('hidden.bs.collapse', function () {
				window.svm.panelOpened = null
			})

			switch(window.location.pathname) {
					case '/dashboard':
							window.svm.panelOpened = 'user'
							window.$('#collapseUser').collapse('show')
							break;
					case '/admin':
							window.svm.panelOpened = 'admin'
							window.$('#collapseAdmin').collapse('show')
							break;
					default:
							//code block
			}

		});

	}
}
</script>
