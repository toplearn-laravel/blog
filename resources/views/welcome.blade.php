@extends('layouts.master')

@section('title' , 'Dashboard')

@section('content')
  Hi this is a test content
  {{--  @include('error')  --}}
  {{--  @includeIf('error')  --}}
  {{--  @includeWhen($boolean,'error', ['some' => 'data'] )  --}}



  @if (count($projects) > 0)
  <ul>
      @foreach ($projects as $project)
      @include('layouts.partials.error' , $project)
      @endforeach
  </ul>
  @else
  @include('layouts.partials.error.none')
  @endif

  @each('layouts.partials.error', $projects, 'project', 'layouts.partials.error.none')





@endsection
@section('script')
  <script type="text/javascript" src="test.js"></script>
@endsection
