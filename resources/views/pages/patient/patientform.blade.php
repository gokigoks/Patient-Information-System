@extends('layout.master')
@section('content')
<div class="container">
<div class="form">
<h2 class="panel-h2">Patient Registration</h2>
{!! Form::open(array('url' => 'pis/addpatient'))!!}
	

    @include('pages.patient.partials')	
			    
{!! Form::close() !!}			   
</div>
</div>

@endsection