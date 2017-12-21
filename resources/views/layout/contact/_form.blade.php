<h3>Contact Us</h3>
<form class="grecaptcha-form" id="contactForm" method="POST">
	{{ csrf_field() }}

	@if ($errors->any())
	<div class="alert alert-danger">
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</div>
	@endif

	<div class="row">
		<div class="col-md">
			<!-- name -->
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{old('name')}}">
			</div>
		</div><!-- /.col-md -->
		<div class="col-md">
			<!-- email -->
			<div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{old('email')}}">
			</div>
		</div><!-- /.col-md -->
	</div>
	<!-- email -->
	<div class="form-group">
		<label for="question">Your Question</label>
		<textarea class="form-control" id="question" name="question" rows="7">{{old('question')}}</textarea>
	</div>

	<div class="form-group d-flex justify-content-between">
		<div>
			<button type="submit" class="btn btn-primary" id='contactSubmit'>Submit</button>
		</div>
	</div>
</form>
@push('scripts')
	<!-- add google recaptcha -->
	<script type="text/javascript">
			var setupGrecaptchaForms = function() {

				$('.grecaptcha-form').each(function(i, em){
					// finds anything with type=submit
					em.onSubmit = function(token) {
						$(em).submit();
					};

					grecaptcha.render($(em).find('[type=submit]')[0], {
						'sitekey' : "{{config('stir.gcapkey')}}",
						'callback' : em.onSubmit,
						'badge': 'inline'
					});
				})
			};
	</script>

	<script src='https://www.google.com/recaptcha/api.js?onload=setupGrecaptchaForms&render=explicit' async defer>
	</script>
@endpush

@push('styles')
<style>
	/*hides badge*/
	.grecaptcha-badge {
		display:none
	}
</style>
@endpush
