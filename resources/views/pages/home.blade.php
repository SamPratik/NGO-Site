<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700&subset=latin-ext,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    {{ Html::style('css/home/styles.css') }}
    {{ Html::style('css/home/header.slider.css') }}
    {{ Html::style('css/home/about-us.css') }}
    {{ Html::style('css/home/our-work.css') }}

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jssor.slider-27.0.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/header.slider.js') }}" type="text/javascript"></script>
  </head>
  <body>
    <img class="our-work-bg" src="{{ asset('images/our_work_bg.jpg') }}" alt="">
    <header>
      {{-- Slider --}}
      @includeif('partials.slider')
      {{-- Navigation Bar --}}
      @includeif('partials.nav')
    </header>



    {{-- About US Section --}}
    <section class="about-us">
      <div class="container">
        <h2>About US</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
      </div>
    </section>



    <div class="our-work">
      <div class="cover"></div>
      <div class="our-work-slider">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="http://lorempixel.com/640/400" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. This line will create another line. This line will create another line. This line will create another line...</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="http://lorempixel.com/640/400/sports" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. This line will create another line. This line will create another line. This line will create another line...</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="http://lorempixel.com/g/640/400" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. This line will create another line. This line will create another line. This line will create another line...</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    {{-- Javascript Codes --}}
    {{-- Parallex effect for header image and about us --}}
    <script type="text/javascript">
      window.onscroll = function() {
        var jssor_1 = document.getElementById('jssor_1');
        jssor_1.style.top = (window.pageYOffset)*.3 + 'px';
      };
    </script>
  </body>
</html>
