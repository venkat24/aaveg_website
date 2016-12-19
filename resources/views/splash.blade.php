@extends('base')

@section('links')
    <link rel="stylesheet" type="text/css" href="{{asset('css/splash.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Merienda+One|Pacifico" rel="stylesheet">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/hammer.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.hammer.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/splash.js')}}"></script>
@endsection

@section("main")
<div id="top">
	<div class="cloud"> <img alt="cloud" src="{{asset('splash-assets/cloud.png')}}"> </div>
	<div class="cloud"> <img alt="cloud" src="{{asset('splash-assets/cloud.png')}}"> </div>
	<div class="cloud"> <img alt="cloud" src="{{asset('splash-assets/cloud.png')}}"> </div>
	<div id="logo"><div id="logo-container">  <img alt="logo" onclick="$('audio')[0].play();" src="{{asset('splash-assets/logo.png')}}">  </div> </div>
	<div id="tagline1">
		<div id="tagline-container1">
			A Quest
		</div>
	</div>
	<div id="tagline2">
		<div id="tagline-container2">
			for the Crest
		</div>
	</div>
</div>

<div id="main">
	<div id="base" class="block bottom"> <img alt="tower-base" src="{{asset('splash-assets/clock-tower-base.png')}}"> </div>
	<div id="tower"> 
		<div id="tower-container">
			<div id="central-block" class="center block bottom"> <img alt="tower-center" src="{{asset('splash-assets/central-block.png')}}"> </div>
			<div id="admin-entry" class="center svg bottom"> <img alt="admin-entry" src="{{asset('splash-assets/admin-entry.png')}}"> </div>
			<div id="box-outline" class="center svg"> <img alt="box-outline" src="{{asset('splash-assets/central-box-outline.png')}}"> </div>

			<div id="left-block" class="center block bottom"> <img alt="left-block" src="{{asset('splash-assets/central-block.png')}}"> </div>
			<div id="admin-windows-left" class="center svg"> <img alt="admin-windows" src="{{asset('splash-assets/admin-windows.png')}}"> </div>

			<div id="right-block" class="center block bottom"> <img alt="right-block" src="{{asset('splash-assets/central-block.png')}}"> </div>
			<div id="admin-windows-right" class="center svg"> <img alt="admin-windows" src="{{asset('splash-assets/admin-windows.png')}}"> </div>

			<div id="spire" class="center block bottom"> <img alt="spire" src="{{asset('splash-assets/clock-tower.png')}}"> </div>
			<div id="decor" class="center svg"> <img alt="decor" src="{{asset('splash-assets/clock-tower-decoration.png')}}"> </div>
			<div id="face" class="center svg"> <img alt="face" src="{{asset('splash-assets/tower-face.png')}}"> </div>
			<div id="dials" class="center svg"> <img alt="dials" src="{{asset('splash-assets/dials.png')}}"> </div>
			<div id="dials2" class="center svg"> <img alt="dials2" src="{{asset('splash-assets/dials2.png')}}"> </div>
			<audio id="audio" src="{{asset('splash-assets/clocksound.ogg')}}" ></audio>
		</div>
	</div>
</div>


<div id="bottom">
	<div class="bush" id="left-bush"> 
		<img id="bush4" alt="bush" src="{{asset('splash-assets/bush4.png')}}">
		<img id="bush3" alt="bush" src="{{asset('splash-assets/bush3.png')}}">
		<img id="bush2" alt="bush" src="{{asset('splash-assets/bush2.png')}}">
		<img id="bush1" alt="bush" src="{{asset('splash-assets/bush1.png')}}">
	</div>

	<div id="road"> <img alt="road" src="{{asset('splash-assets/road.png')}}"> </div>
	<div id="boy"> <img alt="boy" src="{{asset('splash-assets/boy.png')}}"> </div>

	<div class="bush" id="right-bush"> 
		<img id="bush4" alt="bush" src="{{asset('splash-assets/bush4.png')}}">
		<img id="bush3" alt="bush" src="{{asset('splash-assets/bush3.png')}}">
		<img id="bush2" alt="bush" src="{{asset('splash-assets/bush2.png')}}">
		<img id="bush1" alt="bush" src="{{asset('splash-assets/bush1.png')}}">
	</div>
</div>
@endsection