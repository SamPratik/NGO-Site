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
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://picsum.photos/640/400?image=30" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title <small class="pull-right">24 January, 2017</small></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-primary pull-right"><i class="fa fa-info-circle"></i> Read More</a>
              @auth
              <button style="margin-right:5px;" class="btn btn-outline-danger pull-right" type="button" name="button"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
              <button onclick="window.location.href='{{ route('achievemetns.edit', [1]) }}'" style="margin-right:5px;" class="btn btn-outline-warning pull-right" type="button" name="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
              @endauth
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://picsum.photos/640/400/?image=10" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title <small class="pull-right">24 January, 2017</small></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-primary pull-right"><i class="fa fa-info-circle"></i> Read More</a>
              @auth
              <button style="margin-right:5px;" class="btn btn-outline-danger pull-right" type="button" name="button"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
              <button style="margin-right:5px;" class="btn btn-outline-warning pull-right" type="button" name="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
              @endauth
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://picsum.photos/640/400?image=0" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title <small class="pull-right">24 January, 2017</small></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-primary pull-right"><i class="fa fa-info-circle"></i> Read More</a>
              @auth
              <button style="margin-right:5px;" class="btn btn-outline-danger pull-right" type="button" name="button"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
              <button style="margin-right:5px;" class="btn btn-outline-warning pull-right" type="button" name="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
              @endauth
            </div>
          </div>
        </div>
      </div> {{-- .row --}} <br>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://picsum.photos/640/400?image=34" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title <small class="pull-right">24 January, 2017</small></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-primary pull-right"><i class="fa fa-info-circle"></i> Read More</a>
              @auth
              <button style="margin-right:5px;" class="btn btn-outline-danger pull-right" type="button" name="button"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
              <button style="margin-right:5px;" class="btn btn-outline-warning pull-right" type="button" name="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
              @endauth
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://picsum.photos/640/400/?image=13" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title <small class="pull-right">24 January, 2017</small></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-primary pull-right"><i class="fa fa-info-circle"></i> Read More</a>
              @auth
              <button style="margin-right:5px;" class="btn btn-outline-danger pull-right" type="button" name="button"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
              <button style="margin-right:5px;" class="btn btn-outline-warning pull-right" type="button" name="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
              @endauth
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://picsum.photos/640/400?image=1" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title <small class="pull-right">24 January, 2017</small></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-primary pull-right"><i class="fa fa-info-circle"></i> Read More</a>
              @auth
              <button style="margin-right:5px;" class="btn btn-outline-danger pull-right" type="button" name="button"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
              <button style="margin-right:5px;" class="btn btn-outline-warning pull-right" type="button" name="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
              @endauth
            </div>
          </div>
        </div>
      </div> {{-- .row --}} <br>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://picsum.photos/640/400?image=32" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title <small class="pull-right">24 January, 2017</small></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-primary pull-right"><i class="fa fa-info-circle"></i> Read More</a>
              @auth
              <button style="margin-right:5px;" class="btn btn-outline-danger pull-right" type="button" name="button"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
              <button style="margin-right:5px;" class="btn btn-outline-warning pull-right" type="button" name="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
              @endauth
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://picsum.photos/640/400/?image=12" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title <small class="pull-right">24 January, 2017</small></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-primary pull-right"><i class="fa fa-info-circle"></i> Read More</a>
              @auth
              <button style="margin-right:5px;" class="btn btn-outline-danger pull-right" type="button" name="button"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
              <button style="margin-right:5px;" class="btn btn-outline-warning pull-right" type="button" name="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
              @endauth
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://picsum.photos/640/400?image=2" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title <small class="pull-right">24 January, 2017</small></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-primary pull-right"><i class="fa fa-info-circle"></i> Read More</a>
              @auth
              <button style="margin-right:5px;" class="btn btn-outline-danger pull-right" type="button" name="button"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
              <button style="margin-right:5px;" class="btn btn-outline-warning pull-right" type="button" name="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
              @endauth
            </div>
          </div>
        </div>
      </div> {{-- .row --}}
    </div>
  </div>

  {{-- Contact us & Notice Section --}}
  @includeif('partials.contact-notice', ['notices' => $notices])
@endsection
