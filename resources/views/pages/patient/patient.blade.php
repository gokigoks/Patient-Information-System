@extends('layout.master')
@section('content')
<div class="container">
<div class="panel panel-default">
              <div class="panel-heading"><h2>Patients<a href ="{{url('/pis/patientform')}}" class='btn btn-default pull-right' title = 'Add Patient'><i class='glyphicon glyphicon-plus' title = 'Add Book'></i></a>
              
              </h2></div>
	<div class="panel-body">
	<div id="example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row">
                  <div class="col-xs-12">
                  <table id="example" class="table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Date Of Registration</th>
                            
                            <th></th>
                            
                        </tr>
                    </thead>
             
                    <tfoot>
                        <tr>
                        
                            
                        </tr>
                    </tfoot>
             
                    <tbody>
                    @foreach($details as $patient)
                    <tr>
                       <td>{{$patient->plname}}, {{$patient->pfname}} {{$patient->pmname}}</td>
                      
                       <td>{{$patient->created_at}}</td>
                       <th><a href="{{ url('/pis/patient/'.$patient->id)  }}" class="btn btn-info btn-sm pull-left">View Details</a></th>
                     </tr>
                     @endforeach
                    </tbody>
                </table>
              </div>
              </div>


              </div>
</div>
</div>
</div>
@endsection