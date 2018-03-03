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
      <h1>Here you show the details of the work...</h1>
    </div>
  </div>
@endsection
