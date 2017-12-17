@extends('stir::admin.layout')

@section('title', 'Admin Dashboard')

@push('body-class')
body-dashboard
@endpush

@section('primary-script')
  <script type="text/javascript" src="{{mix('/js/app-stir-admin.js')}}"></script>
@endsection

@section('base_href', '/admin/')

@section('masthead')
@show

@section('body')
    <admin></admin>
@endsection
