@extends('layouts.master')

@section('title' , 'Dashboard')

@section('content')



@foreach ($users as $user)
<p>
  {{ $user->email }}
</p>
@endforeach



@endsection
@section('script')

@endsection
