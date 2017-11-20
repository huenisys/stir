@extends('stir::layout.index')

@section('masthead')
	@include('stir::layout.navbar.index')
@endsection

@section('body-container')

<form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <h2>Login</h2>
    <hr>
    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="" autofocus="" value="{{ old('email') }}">
        @if ($errors->has('email'))
        <span class="help-block">
            <small class="form-text text-danger">{{ $errors->first('email') }}</small>
        </span>
        @endif
      </div>
    </div>
    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
        @if ($errors->has('password'))
        <span class="help-block">
            <small class="form-text text-danger">{{ $errors->first('password') }}</small>
        </span>
        @endif
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="remember"  {{ old('remember') ? 'checked' : '' }}> Remember me
          </label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-10 ml-auto">
        <button type="submit" class="btn btn-primary">Login</button>
        <a class="btn btn-link" href="{{ route('password.request') }}">
            Forgot Your Password?
        </a>
      </div>
    </div>
</form>

@endsection
