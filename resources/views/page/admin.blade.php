@extends('stir::layout.index')

@section('title', 'Admin Dashboard')

@section('primary-script')
    <script type="text/javascript" src="{{mix('/js/app-stir-admin.js')}}"></script>
@endsection

@push('body-class')
body-dashboard
@endpush

@section('base_href', '/admin/')

@section('masthead')
@show

@section('body')
    <div id="app"></div>
@endsection
