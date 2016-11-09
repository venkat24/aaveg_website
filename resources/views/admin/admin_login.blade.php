<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
  </style>
</head>
        <script type="text/javascript">
           var SITE_BASE_URL = "{{ url(env('SITE_BASE_URL'))}}";
        </script>
<body>
  <div class="section"></div>
  <main>
    <center>
      <div class="section"></div>
      <img src="{{ asset('images/aaveglogocoloured.png') }}" width="300px">
      <h5 class="teal-text text-accent-4 flow-text"><b>Admin Login</b></h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <div class="col s12">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input type='text' name='email' id='username' />
                <label>Username</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Password</label>
              </div>
              <label style='float: right;'>
                                <a class='teal-text' href='https://www.facebook.com/acelect24'><b>Forgot Password?</b></a>
                            </label>
            </div>
            <br />
            <center>
              <div class='row'>
                <button name='btn_login' class='col s12 btn btn-large waves-effect cyan darken-3' onclick="login()">Login</button>
              </div>
                <div class="progress" id="loading" style="display:none">
                    <div class="indeterminate"></div>
                </div>
            </center>
          </div>
        </div>
      </div>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  <script type="text/javascript" src="{{asset('js/admin_login.js')}}"></script>
</body>
      <footer class="page-footer teal accent-4">
          <div class="footer-copyright">
            <div class="container center">
            <a class="grey-text text-lighten-4 center" target="_blank" href="https://www.facebook.com/profile.php?id=100010424946860&fref=ts">Made with ❤ by Aaveg Web Team</a>
            </div>
          </div>
        </footer>
</html>