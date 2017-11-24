@extends('stir::layout.index')

@section('title', 'Registration')

@section('masthead')
  @include('stir::layout.navbar.index')
@endsection

@section('body-container')

<form method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
    <h2>Register</h2>
    <hr>

    <!-- name -->
    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required="" autofocus="" value="{{ old('name') }}">
        @if ($errors->has('name'))
        <span class="help-block">
            <small class="form-text text-danger">{{ $errors->first('name') }}</small>
        </span>
        @endif
      </div>
    </div>

    <!-- email -->
    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="" value="{{ old('email') }}">
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
      </div>
    </div>


    <div class="form-group row">
      <div class="col-sm-10 ml-auto">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </div>
</form>

@endsection
