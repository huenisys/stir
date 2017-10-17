<template>
	<div class="container-fluid">
		<router-view />
	</div>
	<!-- /.container-fluid -->
</template>

<script>
	import Bottombar from './bottombar'

	export default {
		data: () => ({
			currentRoute: window.location.pathname,
		}),
		components: {
			bottombar: Bottombar,
		}
	}
</script>
