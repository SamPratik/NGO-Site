@extends('pages.main')

@push('styles')
  {{ Html::style('css/news/header.css') }}
  {{ Html::style('css/news/news-container.css') }}
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
      @auth
      <p>
        <button class="btn btn-outline-primary pull-right" onclick="window.location.href='{{ route('news.create') }}'"><i class="fa fa-plus" aria-hidden="true"></i> Add News</button>
        <p style="clear:both;"></p>
      </p>
      @endauth
      @php
        $i = 0;
      @endphp
      @foreach ($news as $new)
        @php
          $i++;
        @endphp
        @if ($i == 1 || ($i % 3) == 1)
        <div class="row">
        @endif
          <div class="col-md-4">
            <div class="card news">
              <img class="card-img-top" src="{{ asset('images/news-images/' . $new->image) }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{ (strlen($new->title) > 10) ? substr($new->title, 0, 10) . '...' : $new->title }} <small class="pull-right">{{ $new->updated_at }}</small></h5>
                <p class="card-text">{{ $new->summary }}</p>
                <a href="#" class="btn btn-outline-primary pull-right"><i class="fa fa-info-circle"></i> Read More</a>
                @auth
                <button style="margin-right:5px;" class="btn btn-outline-danger pull-right" type="button" name="button"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                <button onclick="window.location.href='{{ route('achievemetns.edit', [1]) }}'" style="margin-right:5px;" class="btn btn-outline-warning pull-right" type="button" name="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
                @endauth
              </div>
            </div>
          </div>
        @if (($i % 3) == 0)
        </div> {{-- .row --}}<br>
        @endif
      @endforeach
      @if (($i % 3) != 0)
      </div> {{-- .row --}}<br>
      @endif
      {{ $news->links() }}
    </div>
  </div>


  {{-- Contact us & Notice Section --}}
  @includeif('partials.contact-notice', ['notices' => $notices])
@endsection
