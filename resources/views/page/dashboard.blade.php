@extends('stir::layout.index')

@section('title', 'User Dashboard')

@section('primary-script')
    <script type="text/javascript" src="{{mix('/js/app-stir-user.js')}}"></script>
@endsection

@push('body-class')
body-dashboard
@endpush

@section('base_href', '/dashboard/')

@section('masthead')
@show

@section('body')
    <user></user>
@endsection
