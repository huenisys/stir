@extends('stir::layout.index')

@section('masthead')
	@include('stir::master._navbar')
@endsection

@section('body-container')
<form method="POST" action="{{ route('password.email') }}" class="mt-4">
    {{ csrf_field() }}
    <h2>Reset Password</h2>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <hr>
    <!-- email -->
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
      <div class="col-sm-10 ml-auto">
        <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
      </div>
    </div>
</form>
@endsection
