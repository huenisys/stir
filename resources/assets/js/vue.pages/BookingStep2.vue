<template>
	<div>
		<h3>Schedule and space</h3>
		<div class="container-fluid">
			<div class="d-flex justify-content-between" >
				<div class="d-flex flex-column bg-danger text-white" v-for="c of [1,2,3,4]">
					<h6 class="p-2">space {{c}}</h6>
				  <div class="p-2 bg-info text-white m-2" v-for="h of [1,2,3,4,5,6,7,8]">hour {{h}}</div>
				</div>
			</div>
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id imperdiet neque. Nunc orci massa, ullamcorper sit amet vehicula ut, semper eget ante. Nullam ac congue nunc. Praesent vitae erat imperdiet, facilisis ligula sed, tincidunt risus.</p>
		<button class="btn btn-primary" @click="updateModalText()">Next</button>
	</div>
</template>

<script>
	export default {
		methods: {
			updateModalText: function() {
				window.$('#bookingModal').find('.modal-title').text('Step 3');
				this.$router.push('/booking-step-3');
			}
		}
	}
</script>
