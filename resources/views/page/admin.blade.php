@extends('stir::layout._default')

@push('scripts')
    <script type="text/javascript" src="{{mix('/js/app-stir-admin.js')}}"></script>
@endpush

@section('base_href', '/admin/')

@section('body')
    <div id="app"></div>
@endsection
