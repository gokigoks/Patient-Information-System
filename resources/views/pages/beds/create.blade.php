@extends('layout.master')
@section('content')
<div class="container">
<div class="form">
<h2 class="panel-h2">Add Bed</h2>
@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
{!! Form::open(array('url' => 'beds'))!!}
	
    @include('pages.beds.partials')	
			    
{!! Form::close() !!}			   
</div>
</div>

@endsection	