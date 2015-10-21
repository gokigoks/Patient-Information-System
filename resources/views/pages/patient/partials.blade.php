				<div class="row-form">			      	        
			        {!! Form::text('plname',null,['placeholder'=>'Last Name']) !!}<span class="highlight"></span><span class="bar"></span>
			    </div>
			    <div class="row-form">   
			        {!! Form::text('pfname',null,['placeholder' => 'First Name']) !!}<span class="highlight"></span><span class="bar"></span>
			      
			    </div>
			    <div class="row-form">			      	        
			        {!! Form::text('pmname',null,['placeholder'=>'Middle Name']) !!}<span class="highlight"></span><span class="bar"></span>
			    </div>
			    <div class="row-form">   
			        {!! Form::text('paddress',null,['placeholder' => 'Address']) !!}<span class="highlight"></span><span class="bar"></span>
			      
			    </div>
			    <div class="row-form">   
			        {!! Form::date('pbirth', \Carbon\Carbon::now()) !!}<span class="highlight"></span><span class="bar"></span>			       	  
			    </div>
			    <div class="row-form">   
			        {!! Form::text('pcontact',null,['placeholder' => 'Emergency Contact']) !!}<span class="highlight"></span><span class="bar"></span>
			      
			    </div>		    


			     
			    {!! Form::submit('Register',['class' => 'button2 pull-right']) !!}
			    <!-- {!! Form::submit('Cancel',['class' => 'button2 cancel-btn pull-left']) !!} -->
			    <a href="{{url('/pis/patient')}}" class="button2 cancel-btn pull-left">Cancel</a>