@extends('stir::layout.index')

@section('title', 'Contact Us')

@section('masthead')
	@include('stir::layout.navbar.index')
@endsection

@push('beforehead_scripts')
  <script src='https://www.google.com/recaptcha/api.js'></script>
@endpush

@section('body-container')
<div class="row">
  <div class="col-sm-8 col-md-9">
    @include('stir::layout.contact._form')
  </div>
  <div class="col-sm-4 col-md-3">
    @include('stir::layout.contact._officeAddress')
    @include('stir::layout.contact._socialLinks')
  </div>
</div>
@endsection
