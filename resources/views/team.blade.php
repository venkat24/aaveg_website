@extends('base')

@section('links')
    <link rel="stylesheet" type="text/css" href="{{asset('css/team.css')}}">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/team.js')}}"></script>
@endsection

@section('main')

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

<script type="text/template" id="display-team">
<h1>TEAM</h1>
  @{{#each team}}
  <div class="single-person-team"> 
      <img src="@{{image}}" class="img-circle center-block profile-image-team">
      <h3>@{{name}}</h2>
      <h5>@{{post}}</h4>
  </div>
@{{/each}}
</br>
</script>
<script type="text/template" id="display-web">
<h1 class="code">WEB TEAM</h1>
  @{{#each core}}
  <div class="single-person"> 
      <img src="@{{image}}" class="img-circle profile-image web-image">
      <h2 class="code">@{{name}}</h2>
      <h4 class="code">@{{post}}</h4>
  </div>
@{{/each}}
</br>
</script>


<div class="container" id="main-container" style="display:block">
</div>
@endsection