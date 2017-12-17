@extends('stir::layout.index')

@section('primary-script')
  <script type="text/javascript" src="{{mix('/js/app-stir-guest.js')}}"></script>
@endsection

@section('base_href', '/')

@push('styles')
@endpush

@section('body-container')
<guest></guest>
@endsection




