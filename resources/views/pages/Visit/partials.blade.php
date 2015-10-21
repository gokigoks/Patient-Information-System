<div class="row-form">   
	{!! Form::number('patient_id',null,['placeholder' => 'patient ID']) !!}<span class="highlight"></span><span class="bar"></span>
</div>
<div class="row-form">			      	        
	{!!  Form::select('doctor_id',$doctors, null, array('class' => 'form-control', 'placeholder' => ' choose doctor ')) !!}<span class="highlight"></span><span class="bar"></span>
</div>
<div class="row-form">			      	        
	{!!  Form::select('bed_id',$beds, null, array('class' => 'form-control', 'placeholder' => ' choose bed ')) !!}<span class="highlight"></span><span class="bar"></span>
</div>
<div class="row-form">			      	        
	{!!  Form::select('visit_type',$visit_type, null, array('class' => 'form-control', 'placeholder' => ' visit type ')) !!}<span class="highlight"></span><span class="bar"></span>
</div>
<div class="row-form">			      	        
	{!! Form::textarea('symptoms',null,['placeholder'=>'symptoms', 'class' => 'form-control' ]) !!}<span class="highlight"></span><span class="bar"></span>
</div>
<div class="row-form">			      	        
	{!! Form::textarea('medical_advice',null,['placeholder'=>'immediate advice' ,'class' => 'form-control']) !!}<span class="highlight"></span><span class="bar"></span>
</div>
	    

{!! Form::submit('enter patient ',['class' => 'button2 pull-right']) !!}
			    <!-- {!! Form::submit('Cancel',['class' => 'button2 cancel-btn pull-left']) !!} -->
<a href="{{url('/visit')}}" class="button2 cancel-btn pull-left">Cancel</a>