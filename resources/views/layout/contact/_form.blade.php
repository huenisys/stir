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

	<!-- add google recaptcha -->
	<div class="form-group d-flex justify-content-between">
		<div>
			<button class="btn btn-primary" type="submit">Submit</button>
		</div>
		<div class="d-inline-block" style="position:relative">
			@captcha()
		</div>

	</div>

</form>
