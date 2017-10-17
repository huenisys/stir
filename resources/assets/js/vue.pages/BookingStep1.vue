<template>
	<div>
		<h3># of Active Players</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id imperdiet neque. Nunc orci massa, ullamcorper sit amet vehicula ut, semper eget ante. Nullam ac congue nunc. Praesent vitae erat imperdiet, facilisis ligula sed, tincidunt risus.</p>

		<div class="container-fluid">
			<div class="d-flex justify-content-between">
				<img v-for="x of [1,2,3,4]" src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" class="img-fluid rounded-circle" style="width:90px; height:90px" :alt="x">
			</div>
		</div>
		<hr class="invisible">
		<button class="btn btn-primary" @click="updateModalText()">Next</button>
	</div>
</template>

<script>
	export default {
		methods: {
			updateModalText: function() {
				window.$('#bookingModal').find('.modal-title').text('Step 2');
				this.$router.push('/booking-step-2');
			}
		}
	}
</script>
