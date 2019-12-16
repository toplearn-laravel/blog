@extends('layouts.master')

@section('title' , 'Dashboard')

@section('content')

@inject('car', 'App\Car')

{{ $car->count() }}

@endsection
@section('script')

@endsection
