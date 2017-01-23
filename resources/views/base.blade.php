<!DOCTYPE html>
<html>
<head>
	<title>Aaveg</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/base.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="shortcut icon" type="text/css" href="{{asset('favicon.png')}}">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('links')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/base.js')}}"></script>
    <script type="text/javascript">
        var SITE_BASE_URL = "{{ url('/')}}";
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-88938333-1', 'auto');
      ga('send', 'pageview');

    </script>
    @yield('scripts')
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top transparent">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img src="{{asset('images/aaveglogo.png')}}" class="logo">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/about">About Aaveg<span class="sr-only"></span></a></li>
        <li><a href="/scoreboard">Scoreboard<span class="sr-only"></span></a></li>
        <li><a href="/blog">Blog</a></li>
        <li><a href="/events">Events</a></li>
        <li><a href="/schedule.jpg">Schedule</a></li>
        <li><a href="/sportsschedule.jpg">Sports Schedule</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/team">The Team</a></li>
        <li><a target="_blank" href="http://facebook.com/aaveg.nitt">Facebook Page</a></li>
        <li><a type="button" data-toggle="modal" data-target="#myModal">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
      </div>
      <div class="modal-body">
        Chairperson - <b>SM Aseer</b><br />
        +91 9790065037<br /><br />
        Treasurer - <b>Kritesh Patel</b><br />
        +91 9940865611<br /><br />
        Head, OC - <b>Jagannivashan M</b><br />
        +91 7299306577<br /><br />
        Head, OC - <b>Navya Shaji</b><br />
        +91 7598426755<br /><br />
        Head, Content - <b>Gautham Kumar</b><br />
        +91 9787139231<br /><br />
        Head, Design - <b>Arun Prakash R</b><br />
        +91 9626609145<br /><br />
        Web Operations - <b>Venkatraman Srikanth</b><br />
        +91 9962535961<br /><br />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  @yield('main')
</body>
</html>
