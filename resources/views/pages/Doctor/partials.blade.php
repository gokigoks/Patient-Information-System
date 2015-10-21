<div class="row-form">			      	        
	{!! Form::text('doctor_fname',null,['placeholder'=>'First Name']) !!}<span class="highlight"></span><span class="bar"></span>
</div>
<div class="row-form">   
	{!! Form::text('doctor_mname',null,['placeholder' => 'Middle Name']) !!}<span class="highlight"></span><span class="bar"></span>
</div>
<div class="row-form">			      	        
	{!! Form::text('doctor_lname',null,['placeholder'=>'Last Name']) !!}<span class="highlight"></span><span class="bar"></span>
</div>
<div class="row-form">			      	        
	{!! Form::text('doctor_address',null,['placeholder'=>'Address']) !!}<span class="highlight"></span><span class="bar"></span>
</div>
<div class="row-form">			      	        
	{!! Form::text('doctor_contact',null,['placeholder'=>'Contact']) !!}<span class="highlight"></span><span class="bar"></span>
</div>
<div class="row-form"> 
<label for="sel1">Specialty list:</label>
	
					{!!  Form::select('medspecialty_id',$specialty, null, array('class' => 'form-control')) !!}<span class="highlight"></span><span class="bar"></span>
</div>
	    

{!! Form::submit('Add Doctor',['class' => 'button2 pull-right']) !!}
			    <!-- {!! Form::submit('Cancel',['class' => 'button2 cancel-btn pull-left']) !!} -->
<a href="{{url('/pis/doctor')}}" class="button2 cancel-btn pull-left">Cancel</a>