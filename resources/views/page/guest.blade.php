@extends('stir::layout.index')

@push('scripts')
		<script type="text/javascript" src="{{mix('/js/app-stir-guest.js')}}"></script>
@endpush

@section('base_href', '/')

@push('styles')
@endpush

@section('body-container')
<div id="guest"></div>
@endsection




