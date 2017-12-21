@extends('stir::layout.index')

@section('title', 'Multiform Recaptcha')

@section('masthead')
	@include('stir::layout.navbar.index')
@endsection

@section('body-container')

  @if ($errors->any())
  <div class="alert alert-danger">
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </div>
  @endif

  <form action="/multirecaptcha" class="grecaptcha-form" method="POST">
    <h6>Form1</h6>
    {{ csrf_field() }}
    <input type="text" name="input1">
    <button type="submit" class="btn btn-primary" >Submit</button>
  </form>

  <hr>

  <form action="/multirecaptcha" class="grecaptcha-form" method="POST">
    <h6>Form2</h6>
    {{ csrf_field() }}
    <input type="text" name="input2">
    <button type="submit" class="btn btn-primary" >Submit</button>
  </form>

  <!-- add google recaptcha -->
  @push('scripts')
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
@endsection
