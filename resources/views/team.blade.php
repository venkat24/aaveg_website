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

</script>
<script type="text/template" id="display-web">
<h1 class="code">WEB TEAM</h1>
  @{{#each core}}
  <div class="single-person"> 
      <img src="@{{image}}" class="img-circle profile-image web-image">
      <h2 class="code code-font">@{{name}}</h2>
      <h4 class="code code-font">@{{post}}</h4>
  </div>
@{{/each}}
</br>
</script>


<div class="container" id="main-container">
  <br><br><br>
  <div class="jumbotron">
    <h1 class="display-3">The Team!</h1>
    <p class="lead">Behind every great success is a team, filled with passion and dreams. Aaveg is no different in this regard. So here's a little overview of the different teams and their members. <br><br>
    We thank <a target="_blank" href="https://www.facebook.com/blurrindia/">Blurr India</a> for these incredible photos! Meet the Aaveg Family.</p>
    <hr class="my-2">
    <p><b>Faculty Advisor:</b>Sreekanth Sir is the engine of the Aaveg train, our perpetual motivation and support to keep moving forward!</p>
    <!-- <hr class="my-2"> -->
    <p><b>Core:</b> They put the fun in fundamental whilst acting as Aaveg's torch bearers.</p>
    <!-- <hr class="my-2"> -->
    <p><b>OC: </b>Pulling strings and getting the act together is their forte. Just don't ask for spam.</p>
    <!-- <hr class="my-2"> -->
    <p><b>Design:</b> Designed to get your attention, with their amazing posters and artwork. No modern art here.</p>
    <!-- <hr class="my-2"> -->
    <p><b>Content:</b> The minds behind the pen. Just don't get them started on puns and punish yourself.</p>
    <p><b>Web Ops:</b> Well, You're reading all this right? Cool.</p><br>
    <p class="lead">
      <a class="btn btn-primary btn-lg" target="_blank" href="https://www.facebook.com/aaveg.nitt" role="button">Visit us on Facebook!</a>
    </p>
  </div>
  <div id="facad-container">
    <img class="profile-image img-circle" src="{{asset('profile-images/sreekanth_sir.jpg')}}">
      <h1>Dr. Sreekanth</h2>
      <h2>Advisor</h2>
      <br><br>
  </div>
</div>
<footer class="footer" style="background-color: black;">
      <div class="container">
        <p class="text-muted code" style="font-size:20px">Made with ❤ by Aaveg Web Team</p>
      </div>
</footer>
@endsection