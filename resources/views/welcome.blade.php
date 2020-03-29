@extends('layouts.master')

@section('title' , 'Dashboard')

@section('content')

<p>
    {{ $user->email }}
</p>
@endsection
@section('script')

@endsection
