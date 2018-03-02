@extends('pages.main')

@push('styles')
  {{ Html::style('css/news/header.css') }}
@endpush

@section('content')
  {{-- Header section --}}
  <header>
    <img src="{{ asset('images/news-header-cropped.jpeg') }}" alt="" width="100%">
    <h1 class="header-caption">News</h1>
    @parent
  </header>

  {{-- News container section --}}
  <div class="news-container">
    <div class="container">

    </div>
  </div>
@endsection
