@extends('stir::layout._default')

@push('scripts')
    <script type="text/javascript" src="{{mix('/js/app-stir-user.js')}}"></script>
@endpush

@section('base_href', '/user/')

@section('body')
    <div id="app"></div>
@endsection
