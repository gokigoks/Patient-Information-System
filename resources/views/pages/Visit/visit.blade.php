@extends('layout.master')
@section('content')
<div class="container">
<div class="panel panel-default">
              <div class="panel-heading"><h2>VISITS<a href ="{{url('/visit/create')}}" class='btn btn-default pull-right' title = 'Add Doctor'><i class='glyphicon glyphicon-plus' title = 'Add Doctor'></i></a>
              
              </h2></div>
	<div class="panel-body">
	<div id="example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row">
                  <div class="col-xs-12">
                  <table id="example" class="table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            
                            <th>Bed id</th>
                            <th>patient id</th>
                            <th>doctor id</th>
                            <th>symptoms</th>
                            <th>date of admittance</th>
                            <th></th>
                            
                            <!-- <th></th> -->
                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($visits as $visit)
                    <tr>
                      <td>{{ $visit->bed_id }}</td>                      
                      <td>{{ $visit->patient_id }}</td>
                      <td>{{ $visit->doctor_id }} </td>
                      <td>{{ $visit->symptoms }}
                      <td>{{ $visit->created_at }} </td>

                      <td> 
                        <a href="{{ url('visit/'.$visit->id.'/edit') }} ">
                          <button class="btn btn-xs btn-primary" title="edit">
                            <span class="glyphicon glyphicon-pencil"></span>
                          </button>
                        </a>
                        <a href="{{ url('visit/'.$visit->id) }} ">
                          <button class="btn btn-xs btn-primary" title="edit">
                            discharge</span>
                          </button>
                        </a>                        
                      </td>   
                     </tr>
                    @endforeach
                    </tbody> 
                    <tfoot>
                        <tr>                                                  
                            <!-- <th></th> -->
                        </tr>
                    </tfoot>
                </table>
              </div>
              </div>


              </div>
</div>
</div>
</div>
@endsection