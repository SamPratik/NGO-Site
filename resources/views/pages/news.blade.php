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
      <p>
        <button class="btn btn-outline-primary pull-right" onclick="window.location.href='{{ route('news.create') }}'">Add News</button>
        <p style="clear:both;"></p>
      </p>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://picsum.photos/640/400?image=30" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title <small class="pull-right">24 January, 2017</small></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-primary pull-right">Read More</a>
              @auth
              <button class="btn btn-outline-danger pull-right" type="button" name="button" style="margin-right:5px;">Delete</button>
              <a href="{{ route('news.edit', [1]) }}" class="btn btn-outline-warning pull-right" style="margin-right:5px;">Edit</a>
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
              <a href="#" class="btn btn-outline-primary pull-right">Read More</a>
              @auth
              <button class="btn btn-outline-danger pull-right" type="button" name="button" style="margin-right:5px;">Delete</button>
              <a href="#" class="btn btn-outline-warning pull-right" style="margin-right:5px;">Edit</a>
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
              <a href="#" class="btn btn-outline-primary pull-right">Read More</a>
              @auth
              <button class="btn btn-outline-danger pull-right" type="button" name="button" style="margin-right:5px;">Delete</button>
              <a href="#" class="btn btn-outline-warning pull-right" style="margin-right:5px;">Edit</a>
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
              <a href="#" class="btn btn-outline-primary pull-right">Read More</a>
              @auth
              <button class="btn btn-outline-danger pull-right" type="button" name="button" style="margin-right:5px;">Delete</button>
              <a href="#" class="btn btn-outline-warning pull-right" style="margin-right:5px;">Edit</a>
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
              <a href="#" class="btn btn-outline-primary pull-right">Read More</a>
              @auth
              <button class="btn btn-outline-danger pull-right" type="button" name="button" style="margin-right:5px;">Delete</button>
              <a href="#" class="btn btn-outline-warning pull-right" style="margin-right:5px;">Edit</a>
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
              <a href="#" class="btn btn-outline-primary pull-right">Read More</a>
              @auth
              <button class="btn btn-outline-danger pull-right" type="button" name="button" style="margin-right:5px;">Delete</button>
              <a href="#" class="btn btn-outline-warning pull-right" style="margin-right:5px;">Edit</a>
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
              <a href="#" class="btn btn-outline-primary pull-right">Read More</a>
              @auth
              <button class="btn btn-outline-danger pull-right" type="button" name="button" style="margin-right:5px;">Delete</button>
              <a href="#" class="btn btn-outline-warning pull-right" style="margin-right:5px;">Edit</a>
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
              <a href="#" class="btn btn-outline-primary pull-right">Read More</a>
              @auth
              <button class="btn btn-outline-danger pull-right" type="button" name="button" style="margin-right:5px;">Delete</button>
              <a href="#" class="btn btn-outline-warning pull-right" style="margin-right:5px;">Edit</a>
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
              <a href="#" class="btn btn-outline-primary pull-right">Read More</a>
              @auth
              <button class="btn btn-outline-danger pull-right" type="button" name="button" style="margin-right:5px;">Delete</button>
              <a href="#" class="btn btn-outline-warning pull-right" style="margin-right:5px;">Edit</a>
              @endauth
            </div>
          </div>
        </div>
      </div> {{-- .row --}}
    </div>
  </div>
@endsection
