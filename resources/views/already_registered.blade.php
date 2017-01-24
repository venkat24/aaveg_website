@extends('base')

@section('links')
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/login.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection
@section('main')

<div class="login-container center-align">
    <h1>You have successfully registered for an Aaveg T-Shirt</h1>
    <br />
    <br />
    <a href="#" onclick="logout()"><h3>Logout</h3></a>
</div>

@endsection
