<h3>Contact Us</h3>
<form id="contactForm" method="post">
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
				<input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
			</div>
		</div><!-- /.col-md -->
		<div class="col-md">
			<!-- email -->
			<div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
			</div>
		</div><!-- /.col-md -->
	</div>
	<!-- email -->
	<div class="form-group">
		<label for="question">Your Question</label>
		<textarea class="form-control" id="question" name="question" rows="7"></textarea>
	</div>


	<div class="form-group d-flex justify-content-between">
		<div>
			<button class="btn btn-primary" type="submit">Submit</button>
		</div>
		<div id ="contact_recaptcha_container" class="d-inline-block" style="position:relative">
		</div>

	</div>

</form>

<form action="javascript:alert(grecaptcha.getResponse(widgetId1));" id="form1">
	<input type="text" id="g-recaptcha-response" name="g-recaptcha-response">
	<div id="recaptcha1"></div>
	<input type="submit">
</form>
<form action="javascript:grecaptcha.reset(widgetId2);" id="form2">
	<div id="recaptcha2"></div>
	<input type="submit">
</form>
<form action="?" method="POST" id="form3">
	<div id="recaptcha3"></div>
	<input type="submit">
</form>



	<!-- add google recaptcha -->
	@push('scripts')
	<script>
    var verifyCallback = function(response) {
      alert('verifyCallback called: '+response);
      window.axios.get('verify-contact-recaptcha/'+response)
      	.then(function success(res){
      		console.log('verify-contact-recaptcha/:', res);
      	})
    };
    var widgetId1;
    var widgetId2;
		var onloadCallback = function() {

			widgetId1 = grecaptcha.render('recaptcha1', {
			  'sitekey' : '6Lc54j0UAAAAAFEE7aZvCSdwkLfkJQb48HRztTNT',
			  'theme' : 'light',
			 	'callback' : verifyCallback,

			});
			widgetId2 = grecaptcha.render(document.getElementById('recaptcha2'), {
			  'sitekey' : '6Lc54j0UAAAAAFEE7aZvCSdwkLfkJQb48HRztTNT'
			});
			grecaptcha.render('recaptcha3', {
			  'sitekey' : '6Lc54j0UAAAAAFEE7aZvCSdwkLfkJQb48HRztTNT',
			  'callback' : verifyCallback,
			  'theme' : 'dark'
			});
		};
	</script>

	<script src='https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit' async defer></script>
	@endpush
