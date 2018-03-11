@extends('pages.main')

@push('styles')
  {{ Html::style('css/achievements/header.css') }}
  {{ Html::style('css/achievements/achievements-container.css') }}
@endpush

@section('content')
  <header>
    @parent
    <img src="{{ asset('images/achievements-header.jpeg') }}" width="100%" alt="">
    <h1 class="achievements-header-caption">Achievements</h1>
  </header>

  {{-- Achievements container section --}}
  <div class="achievements-container">
    <div class="container">
      @auth
      <p>
        <button class="btn btn-outline-primary pull-right" type="button" name="button" onclick="window.location.href='{{ route('achievemetns.create') }}'"><i class="fa fa-plus" aria-hidden="true"></i> Add Achievement</button>
      </p>
      <p style="clear:both;"></p>
      @endauth
      @php
        $i = 0;
      @endphp
      @foreach ($achievements as $achievement)
        @php
          $i++;
        @endphp
        @if ($i == 1 || ($i % 3) == 1)
        <div class="row">
        @endif
          <div class="col-md-4">
            <div class="card achievement">
              <img class="card-img-top" src="{{ asset('images/achievement-images/' . $achievement->image) }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{ (strlen($achievement->title) > 10) ? substr($achievement->title, 0, 10) . '...' : $achievement->title }} <small class="pull-right">{{ $achievement->updated_at }}</small></h5>
                <p class="card-text">{{ $achievement->summary }}</p>
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
      {{ $achievements->links() }}
    </div>
  </div>

  {{-- Contact us & Notice Section --}}
  @includeif('partials.contact-notice', ['notices' => $notices])
@endsection
