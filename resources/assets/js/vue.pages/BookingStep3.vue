<template>
	<div>
		<h3>Choose how to pay</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id imperdiet neque. Nunc orci massa, ullamcorper sit amet vehicula ut, semper eget ante. Nullam ac congue nunc. Praesent vitae erat imperdiet, facilisis ligula sed, tincidunt risus.</p>
		<button type="button" class="btn btn-primary" @click="closeModal()">Close</button>

	</div>
</template>

<script>
export default {
		methods: {
			closeModal: function() {
				window.$('#bookingModal').modal('hide').find('.modal-title').text('Step 1');
				this.$router.push('/');
			}
		}
}

</script>
