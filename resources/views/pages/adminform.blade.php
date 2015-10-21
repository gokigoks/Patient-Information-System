@extends('layout.master')
@section('content')
<div class="container">
<div class="form">
<h2 class="panel-h2">Add Admin</h2>
{!! Form::open(array('url' => '/addadmin')) !!}
	

    
			    <div class="row-form">			      	        
			        {!! Form::text('adminid',null,['placeholder'=>'Admin ID']) !!}<span class="highlight"></span><span class="bar"></span>
			        @foreach($errors->get('adminid')as $message)
					{{$message}}
					@endforeach
			    </div>
			  
			    <div class="row-form">   
			        {!! Form::text('adminlname',null,['placeholder' => 'Last Name']) !!}<span class="highlight"></span><span class="bar"></span>
			        @foreach($errors->get('adminlname')as $message)
					{{$message}}
					@endforeach
			    </div>
			      
			   
			    <div class="row-form">			      	        
			        {!! Form::text('adminfname',null,['placeholder'=>'First Name']) !!}<span class="highlight"></span><span class="bar"></span>
			        @foreach($errors->get('adminfname')as $message)
					{{$message}}
					@endforeach
			    </div>
			  
			    <div class="row-form">   
			        {!! Form::text('adminmname',null,['placeholder' => 'Middle Name']) !!}<span class="highlight"></span><span class="bar"></span>
			        @foreach($errors->get('adminmname')as $message)
					{{$message}}
					@endforeach
			    </div>
			      
			 
			    <div class="row-form">   
			        {!! Form::text('adminemail',null,['placeholder' => 'Email']) !!}<span class="highlight"></span><span class="bar"></span>
			        @foreach($errors->get('adminemail')as $message)
					{{$message}}
					@endforeach
			    </div>			       	  
			 
			    <div class="row-form">   
			        {!! Form::text('adminpass',null,['placeholder' => 'Password']) !!}<span class="highlight"></span><span class="bar"></span>
			        @foreach($errors->get('adminpass')as $message)
					{{$message}}
					@endforeach
			    </div>
			      
			
			    <div class="row-form">   
			        {!! Form::text('adminaddress',null,['placeholder' => 'Address']) !!}<span class="highlight"></span><span class="bar"></span>
			        @foreach($errors->get('adminaddress')as $message)
					{{$message}}
					@endforeach
			    </div>
			      
			   
			    <div class="row-form">   
			        {!! Form::text('admingender',null,['placeholder' => 'Gender']) !!}<span class="highlight"></span><span class="bar"></span>
			      	@foreach($errors->get('admingender')as $message)
					{{$message}}
					@endforeach
			    </div>

			    <div class="row-form">   
			        {!! Form::text('adminnumber',null,['placeholder' => 'Admin Number']) !!}<span class="highlight"></span><span class="bar"></span>
			        @foreach($errors->get('adminnumber')as $message)
					{{$message}}
					@endforeach
			    </div>
			      
	


			     
			    {!! Form::submit('Register',['class' => 'button2 pull-right']) !!}
			    
			    <a href="{{url('/pis/patient')}}" class="button2 cancel-btn pull-left">Cancel</a>
		{!! Form::close() !!}			   
</div>
</div>

@stop