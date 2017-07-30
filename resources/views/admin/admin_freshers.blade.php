@extends('admin.admin_base')

@section('scripts')
<script type="text/javascript"">	
$('.collapsible').collapsible({
    accordion : false
});
function downloadExcel () {
	var route = SITE_BASE_URL + '/admin/freshers/getexcel';
	var method = 'POST';
	var request = $.ajax({
		url: route,
		method: method,
	});
	request.done(function(data){
		if(data.status_code === 200) {
		} else {
			alert('Please Specify an Event');
		}
	});
}
</script>
@endsection


@section('main')
<div class="container">
    <h3 style="text-align: center">Fresher's Night</h3>
    <!-- <a class="waves-effect waves-light btn" onclick="downloadExcel()">Download Excel</a> -->
    <div class="valgn-wrapper" >
        <ul class="collapsible popout" data-collapsible="accordion">
@foreach($freshers as $fresher)
		    <li>
		      <div class="collapsible-header" style="clear: both">
		        <p style="font-size:14pt;float:left"><em>{{$fresher->name}}</em><p>
		        <p style="font-size:14pt;float:right"><em>{{$fresher->dept}}</em><p>
		      </div>
		      <div class="collapsible-body row">
		        <div class="col s12" style="margin:0;padding:0;">
		            <p style="padding: 10px 30px;"><strong>Name : </strong>{{$fresher->name}}</p>
		            <p style="padding: 10px 30px;"><strong>Department : </strong>{{$fresher->dept}}</p>
		            <p style="padding: 10px 30px;"><strong>Email : </strong>{{$fresher->email}}</p>
		            <p style="padding: 10px 30px;"><strong>Mobile : </strong>{{$fresher->mobile}}</p>
		            <p style="padding: 10px 30px;"><strong>Question 1: </strong>{{$fresher->ques1}}</p>
		            <p style="padding: 10px 30px;"><strong>Question 2: </strong>{{$fresher->ques2}}</p>
		        </div>
		      </div>
		      </li>
@endforeach
            </ul>
        </div>
    </div>
</div>
@endsection