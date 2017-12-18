<h3>Contact Us</h3>
<form method="post">
	{{ csrf_field() }}
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
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>

{!! app('captcha')->render(); !!}

  <button
  class="g-recaptcha"
  data-sitekey="6Lf9cT0UAAAAAFc3nfiE2UYm9cK7oM-xFi4PY5tX"
  data-callback="YourOnSubmitFn">
  Submit
  </button>
</form>
