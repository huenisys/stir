@extends('stir::layout.index')

@section('title', 'FAQs')

@section('body-container')
    <h3>Faqs</h3>
    @foreach ($faqs as $faq)
      <h6>{{ $faq->question }}</h6>
      <p>{{ $faq->answer }}</p>
    @endforeach
@endsection

@section('masthead')
	@include('stir::layout.navbar.index')
@endsection
