<div class="row-form">			      	        
	{!!  Form::select('bed_type',$bed_type, null, array('class' => 'form-control', 'placeholder' => ' bed type')) !!}<span class="highlight"></span><span class="bar"></span>
</div>
<div class="row-form">   
	{!! Form::number('floor',null,['placeholder' => 'floor']) !!}<span class="highlight"></span><span class="bar"></span>
</div>
<div class="row-form">			      	        
	{!! Form::number('rate_per_night',null,['placeholder'=>'rate per night']) !!}<span class="highlight"></span><span class="bar"></span>
</div>
<div class="row-form">			      	        
	{!!  Form::select('section',$section, null, array('class' => 'form-control','placeholder' => 'section located')) !!}<span class="highlight"></span><span class="bar"></span>
</div>
	    

{!! Form::submit('Add Doctor',['class' => 'button2 pull-right']) !!}
			    <!-- {!! Form::submit('Cancel',['class' => 'button2 cancel-btn pull-left']) !!} -->
<a href="{{url('/pis/doctor')}}" class="button2 cancel-btn pull-left">Cancel</a>