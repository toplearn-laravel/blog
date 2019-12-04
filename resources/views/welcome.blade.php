@extends('layouts.master')

@section('title' , 'Dashboard')

@section('content')


@component('layouts.button')
@slot('color')
primary
@endslot
@slot('text')
ورود
@endslot
some text
@endcomponent


@endsection
@section('script')
{{-- <script type="text/javascript" src="test.js">
    var app = @json($array);
  </script> --}}
@endsection
