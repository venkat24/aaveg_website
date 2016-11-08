@extends('base')

@section('links')
    <link rel="stylesheet" type="text/css" href="{{asset('css/team.css')}}">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/team.js')}}"></script>
@endsection

@section('main')
<div class="container" id="main-container">

<script type="text/template" id="display-core">
<h1>CORE</h1>
  @{{#each core}}
  <div class="single-person"> 
      <img src="@{{image}}" class="img-circle profile-image">
      <h2>@{{name}}</h2>
      <h4>@{{post}}</h4>
  </div>
@{{/each}}
</br>
</script>

<script type="text/template" id="display-ecore">
</br>
<h1>E-CORE</h1>
  @{{#each core}}
  <div class="single-person"> 
      <img src="@{{image}}" class="img-circle profile-image">
      <h2>@{{name}}</h2>
      <h4>@{{post}}</h4>
  </div>
@{{/each}}
</script>

</div>
@endsection