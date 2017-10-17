@extends('stir::layout.index')

@push('scripts')
    <script type="text/javascript" src="{{mix('/js/app-stir-admin.js')}}"></script>
@endpush

@section('base_href', '/admin/')

@section('masthead')
@show

@section('body')
    <div id="app"></div>
@endsection
