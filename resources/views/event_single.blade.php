@extends('base')

@section('links')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700" rel="stylesheet">
    <link href="{{asset('css/event_single.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$event->event_name}} - Aaveg</title>
@endsection
@section('main')
  <br />
  <br />
  <br />
  <div class="container">
    <div class="event-content">
      <div class="row">
        <div class="col">
          <h1>{{$event->event_name}}</h1>
        </div>
      </div>
      @if ( $event->first_place != "" )
      <h2 style="text-align:center"> Winners </h2>
      <div class="row">
        <div class="col-sm-4">
          <div class="place-container gold">
            {!! $event->first_place !!}
          </div>
        </div>
        <div class="col-sm-4">
          <div class="place-container silver">
            {!! $event->second_place !!}
          </div>
        </div>
        <div class="col-sm-4">
          <div class="place-container bronze">
            {!! $event->third_place !!}
          </div>
        </div>
      </div>
      <hr />
      @endif
      <h3>Description</h3>
      <div class="row">
        <div class="col">
          <div class="event-description">
            {!! $event->event_desc !!}
          </div>
        </div>
      </div>
      <h3>Details</h3>
      <div class="row">
        <div class="col">
          <div class="event-details">
            <p class="detail-content"><b>Cup:</b> {{ $event->event_category }}</p>
            <p class="detail-content"><b>Venue:</b> {{ $event->event_venue }}</p>
            <p class="detail-content"><b>Date:</b> {{ $event->event_date }}</p>
            <p class="detail-content"><b>Time:</b> {{ $event->event_start_time }} - {{ $event->event_end_time }}</p>
          </div>
        </div>
      </div>
      <h3>Rules</h3>
      <div class="row">
        <div class="col">
          <div class="event-rulebook">
            {!! $event->event_rulebook !!}
          </div>
        </div>
      </div>
    </div>
    <div style="text-align:center">
      <a class="btn btn-primary btn-lg" href="/events" role="button"><i class="fa fa-arrow-left" aria-hidden="true"></i> All Events</a>
    </div>
  </div>
  <br />
  <br />
  <script src="{{asset('js/event_single.js')}}"></script>
@endsection
