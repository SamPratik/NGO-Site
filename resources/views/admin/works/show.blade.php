@extends('pages.main')

@push('styles')
  <style media="screen">
    .work-show-container {
      padding: 70px 0px 50px 0px;
    }
  </style>
@endpush

@section('content')
  @parent
  <div class="work-show-container">
    <div class="container">
      {!! $work->description !!}
    </div>
  </div>
@endsection
