@extends('base')

@section('links')
    <link rel="stylesheet" type="text/css" href="{{asset('css/about.css')}}">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/about.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection
@section('main')

<div class="container" id="main-container">
  <br><br><br>
  <div class="jumbotron">
    <h1 class="display-3">Aaveg - An Adventure!</h1>
    <p class="lead">Aaveg has crossed a hundred milestones to get to where it is today, and it continues to grow exponentially. Starting out as a mere idea, the fest has transformed into an icon of the fresher life.<br><br>
    The website symbolizes yet another cat in the bag for this extravaganza, and it doesn't look like Aaveg's growth will be slowing anytime soon!</p>
    <hr class="my-2">
    <p>Take a look at some of last year's snapshots!</p>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
    <li data-target="#myCarousel" data-slide-to="8"></li>
    <li data-target="#myCarousel" data-slide-to="9"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{asset('carousel-images/1.jpg')}}" alt="Chania">
    </div>

    <div class="item">
      <img src="{{asset('carousel-images/2.jpg')}}" alt="Chania">
    </div>

    <div class="item">
      <img src="{{asset('carousel-images/5.jpg')}}" alt="Flower">
    </div>

    <div class="item">
      <img src="{{asset('carousel-images/4.jpg')}}" alt="Flower">
    </div>

    <div class="item">
      <img src="{{asset('carousel-images/3.jpg')}}" alt="Flower">
    </div>

    <div class="item">
      <img src="{{asset('carousel-images/6.jpg')}}" alt="Flower">
    </div>

    <div class="item">
      <img src="{{asset('carousel-images/7.jpg')}}" alt="Flower">
    </div>

    <div class="item">
      <img src="{{asset('carousel-images/8.jpg')}}" alt="Flower">
    </div>

    <div class="item">
      <img src="{{asset('carousel-images/9.jpg')}}" alt="Flower">
    </div>

    <div class="item">
      <img src="{{asset('carousel-images/0.jpg')}}" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br><br>
    <p class="lead" style="text-align: center;">
      <a class="btn btn-primary btn-lg" target="_blank" href="https://www.facebook.com/pg/aaveg.nitt/photos/" role="button">View all Photos</a>
    </p>
  </div>
</div>
@endsection