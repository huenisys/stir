@extends('stir::layout.index')

@push('scripts')
		<script type="text/javascript" src="{{mix('/js/app-stir-guest.js')}}"></script>
		<script>
			$('.navbar-brand').click(function(){
				alert('clicked');
			});
		</script>
@endpush

@section('base_href', '/')

@push('styles')
@endpush

@section('body-container')
<div id="guest"></div>
@endsection




