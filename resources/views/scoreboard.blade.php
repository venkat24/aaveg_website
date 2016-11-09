@extends('base')

@section('links')
    <link rel="stylesheet" type="text/css" href="{{asset('css/scoreboard.css')}}">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/scoreboard.js')}}"></script>
@endsection
@section('main')
<script type="text/template" id="display">
  <table class="table table-hover table-striped">
    <h1>Culturals</h1>
    <thead class="thead-default">
      <tr>
        <th>Event Name</th>
        <th>Diamond</th>
        <th>Coral</th>
        <th>Jade</th>
        <th>Agate</th>
        <th>Opal</th>
      </tr>
    </thead>
    <tbody>
    @{{#each message.Culturals}}
      <tr>
        <td>@{{event_name}}</td>
        <td>@{{diamond_score}}</td>
        <td>@{{coral_score}}</td>
        <td>@{{jade_score}}</td>
        <td>@{{agate_score}}</td>
        <td>@{{opal_score}}</td>
      </tr>
    @{{/each}}
      <tr>
        <td>TOTAL</td>
        <td>@{{message.culturals_total.diamond}}</td>
        <td>@{{message.culturals_total.coral}}</td>
        <td>@{{message.culturals_total.jade}}</td>
        <td>@{{message.culturals_total.agate}}</td>
        <td>@{{message.culturals_total.opal}}</td>
      </tr>
    </tbody>
    </table>
    </br>


    <table class="table table-hover table-striped">
    <h1>Sports</h1>
    <thead class="thead-default">
      <tr>
        <th>Event Name</th>
        <th>Diamond</th>
        <th>Coral</th>
        <th>Jade</th>
        <th>Agate</th>
        <th>Opal</th>
      </tr>
    </thead>
    <tbody>
    @{{#each message.Sports}}
      <tr>
        <td>@{{event_name}}</td>
        <td>@{{diamond_score}}</td>
        <td>@{{coral_score}}</td>
        <td>@{{jade_score}}</td>
        <td>@{{agate_score}}</td>
        <td>@{{opal_score}}</td>
      </tr>
    @{{/each}}
      <tr>
        <td>TOTAL</td>
        <td>@{{message.sports_total.diamond}}</td>
        <td>@{{message.sports_total.coral}}</td>
        <td>@{{message.sports_total.jade}}</td>
        <td>@{{message.sports_total.agate}}</td>
        <td>@{{message.sports_total.opal}}</td>
      </tr>
    </tbody>
    </table>
    </br>
    

    <table class="table table-hover table-striped">
    <h1>Miscellaneous</h1>
    <thead class="thead-default">
      <tr>
        <th>Event Name</th>
        <th>Diamond</th>
        <th>Coral</th>
        <th>Jade</th>
        <th>Agate</th>
        <th>Opal</th>
      </tr>
    </thead>
    <tbody>
    @{{#each message.Miscellaneous}}
      <tr>
        <td>@{{event_name}}</td>
        <td>@{{diamond_score}}</td>
        <td>@{{coral_score}}</td>
        <td>@{{jade_score}}</td>
        <td>@{{agate_score}}</td>
        <td>@{{opal_score}}</td>
      </tr>
    @{{/each}}
      <tr>
        <td>TOTAL</td>
        <td>@{{message.misc_total.diamond}}</td>
        <td>@{{message.misc_total.coral}}</td>
        <td>@{{message.misc_total.jade}}</td>
        <td>@{{message.misc_total.agate}}</td>
        <td>@{{message.misc_total.opal}}</td>
      </tr>
    </tbody>
  </table>
</script>
<div class="container" id="main-container">
  <div class="jumbotron">
    <h1 class="display-3">The Standings!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-2">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
  </div>
</div>
@endsection