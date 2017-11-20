@extends('stir::layout.index')

@section('title', 'Examples')

@section('masthead')
	@include('stir::layout.navbar.index')
@endsection

@section('body-container')
  @include('stir::layout.carousel.index')
@endsection
