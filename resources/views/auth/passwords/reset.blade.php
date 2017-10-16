@extends('stir::master')

@section('body-container')
<form method="POST" action="{{ route('password.request') }}">
    {{ csrf_field() }}
    <input type="hidden" name="token" value="{{ $token }}">
    <h2>Reset Password</h2>
    <hr>

    <!-- email -->
    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus value="{{ old('email') }}">
        @if ($errors->has('email'))
        <span class="help-block">
            <small class="form-text text-danger">{{ $errors->first('email') }}</small>
        </span>
        @endif
      </div>
    </div>

    <!-- password -->
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

    <!-- password confirm -->
    <div class="form-group row">
      <label for="password-confirm" class="col-sm-2 col-form-label">Confirm Password</label>
      <div class="col-sm-10">
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password" required="">
        @if ($errors->has('password_confirmation'))
        <span class="help-block">
            <small class="form-text text-danger">{{ $errors->first('password_confirmation') }}</small>
        </span>
        @endif
      </div>
    </div>


    <div class="form-group row">
      <div class="col-sm-10 ml-auto">
        <button type="submit" class="btn btn-primary">Reset Password</button>
      </div>
    </div>
</form>
@endsection
