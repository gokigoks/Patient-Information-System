@extends('layout.master')
@section('content')
<div class="container">
<div class="form">
<h2 class="panel-h2">{{ $patient->pfname }} {{ $patient->pmname }} {{ $patient->plname }}</h2>
<!-- {{ $patient->pfname }} -->
{!! Form::open(array('url' => 'pis/addvisit/'.$patient->patientid))!!}
		@if($errors->any())
			<div class="alert alert-danger">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				@foreach($errors->all() as $error)
				<!-- {{ implode('',$errors->all('<li class="error">:message</li>'))}} -->
				<li class="error">{{$error}}</li>
				@endforeach
			</div>
		@endif
				<div class="row-form">
				<label for="sel1">Patient Type</label>			      	        
			        {!! Form::select('patienttype', array('0' => 'Out Patient', '1' => 'In Patient'),null ,array('class' => 'form-control','id' => 'patienttype')) !!}<span class="highlight"></span><span class="bar"></span>
			    </div>
			    <hr>
			    
			    <div class="row-form" id="room_selection">
			    <h3>Assign Room/Bed</h3>
			    <form>				    
                    <section class="panel">
                          
                              <ul class="nav nav-tabs">
                                  <li class="active">
                                      <a data-toggle="tab" href="#public">
                                          <i class="icon-home"></i>
                                          Public
                                      </a>
                                  </li>
                                  <li>
                                      <a data-toggle="tab" href="#private">
                                          <i class="icon-user"></i>
                                          Private
                                      </a>
                                  </li>
                              
                              </ul>
                         
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="public" class="tab-pane active">
                                      <table id="example" class="table" cellspacing="0" width="100%">
					                    <thead>
					                        <tr>
					                            <th>Room #</th>
					                            <th>Location</th>
					                            <th>Rate per Day</th>
					                            
					                            <th></th>
					                            
					                        </tr>
					                    </thead>					             
					             
					                    <tbody>

					                    @foreach($pub_rooms as $pub_room)
					                    <tr>
					                        <td>Room {{$pub_room->room_id}}</td>
					                       <td>{{$pub_room->location}}</td>
					                      
					                       <td>{{$pub_room->rate_per_day}}</td>
					                       <td>{!!Form::radio('room_id', $pub_room->room_id, false)!!}</td>
					                     </tr>
					                    @endforeach
					                    </tbody>
					                </table>
                                  </div>
                                  <!-- profile -->
                                  <div id="private" class="tab-pane">
                                   <table id="example" class="table" cellspacing="0" width="100%">
					                    <thead>
					                        <tr>
					                            <th>Room #</th>
					                            <th>Location</th>
					                            <th>Rate per Day</th>
					                            
					                            <th></th>
					                            
					                        </tr>
					                    </thead>					             
					             
					                    <tbody>
					                    @foreach($priv_rooms as $priv_room)
					                    <tr>
					                        <td>Room {{$priv_room->room_id}}</td>
					                       <td>{{$priv_room->location}}</td>
					                      
					                       <td>{{$priv_room->rate_per_day}}</td>
					                       <td>{!!Form::radio('room_id', $priv_room->room_id, false)!!}</td>
					                     </tr>
					                    @endforeach
					                    </tbody>
					                </table>
                                  </div>
                                  <!-- edit-profile -->
                                  
                              </div>
                          </div>
                      </section>
                 </div>
              
			    
				<!-- <label for="sel1">Room Type</label>			      	        
			        {!! Form::select('room_type', array('Select Room Type','Public' => 'Public', 'Private' => 'Private'),null ,array('class' => 'form-control','id' => 'room_type')) !!}<span class="highlight"></span><span class="bar"></span>
			    </div>
			    <div class="row-form">
				<label for="sel1">Select Room</label>			      	        
			        {!! Form::select('room_num', array('Select Room Type','Public' => 'Public', 'Private' => 'Private'),null ,array('class' => 'form-control','id' => 'room_num')) !!}<span class="highlight"></span><span class="bar"></span> -->
			 
			    
			    
			    <div class="row-form">	
			    <label for="sel1">Doctor Specialist:</label>
				{{--*/ $a = array() /*--}} 
				@foreach($specialties as $specialty)				
				{{--*/ $a[$specialty->id] = $specialty->med_specialty /*--}} 			
				@endforeach
					{!!  Form::select('id',$a, null, array('class' => 'form-control' , 'id' => 'med_specialty')) !!}<span class="highlight"></span><span class="bar"></span>
				</div>
			    
			   <!--  <div class="row-form">   
			        {!! Form::textarea('disease',null,['placeholder' => 'Disease']) !!}<span class="highlight"></span><span class="bar"></span>			       	  
			    </div>
			    <div class="row-form">   
			        {!! Form::textarea('treatment',null,['placeholder' => 'Treatment','width' => '100%']) !!}<span class="highlight"></span><span class="bar"></span>
			      
			    </div>		     -->
			    <div class="row-form">	
			    <label for="sel1">Doctors :</label>
				
					{!! Form::select('doctor', array('' => ''),null ,array('class' => 'form-control','id' => 'doctors')) !!}<span class="highlight"></span><span class="bar"></span>
				</div>

				<div class="row-form">
				<label for="sel1">Symptoms :</label>   
			        {!! Form::textarea('symptoms',null,['class' => 'form-control']) !!}<span class="highlight"></span><span class="bar"></span>
			      
			    </div>

			    <div class="row-form">
				<label for="sel1">Initial Treatment :</label>   
			        {!! Form::textarea('treatment',null,['class' => 'form-control']) !!}<span class="highlight"></span><span class="bar"></span>
			      
			    </div>
			     
			    {!! Form::submit('Add Visit',['class' => 'button2 pull-right']) !!}
			   
			    <a href="{{url('/pis/patient')}}" class="button2 cancel-btn pull-left">Cancel</a>
			    
{!! Form::close() !!}			   
</div>
</div>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->
<script type="text/javascript">
// 	var enable_room_type = function () {
//     if ($("#patienttype").val() == 1) {
//         // $('#room_type').prop('disabled', false);
//         $('#room_selection').hide();
        
//     }
//     else {
//         // $('#room_type').prop('disabled', 'disabled');
//         // $('#room_num').prop('disabled', 'disabled');
//       	$('#room_selection').show();
//     	}
//     }
// };

// var enable_room_num = function () {
//     if ($("#room_type").val() == 'Public') {
//         $('#room_num').prop('disabled', false);
//     }
//     else if ($("#room_type").val() == 'Private') {
//         $('#room_num').prop('disabled', false);
//     }
//     else {
//         $('#room_num').prop('disabled', 'disabled');

//     }
// };

// $(enable_room_type);
// $("#patienttype").change(enable_room_type);

// $(enable_room_num);
// $("#room_type").change(enable_room_num);

 $(function() {
      $("#patienttype").on("change", function() {
        var id = $(this).find('option:selected').val();
        if (id == 1) { // 
          $("#room_selection").show();
        }
        else{
        	$("#room_selection").hide();
        }
        // if ($("#patienttype").val() == 1) {

        // 	#("#room_selection").hide();
        // }    
      }).trigger("change");
    });

 $("#med_specialty").on('change', function (e) {
 	// body...
 	console.log(e);

 	var doc_id = e.target.value;

 	//ajax
 	$.get('/getdoctors?doc_id='+doc_id, function (data) {
 		// success data
 		// console.log(data)
 		$('#doctors').empty();
 		$.each(data,function  (index,docObj) {
 			// body...
 			$('#doctors').append('<option value="'+docObj.id+'">'+docObj.doctor_fname+ ' ' + docObj.doctor_lname+'</option>')
 		});

	});
 });
</script>

@endsection