@extends('layout.master')
@section('content')
<div class="container">
<div class="panel panel-default">
              <div class="panel-heading"><h2>Beds<a href ="{{url('/beds/create')}}" class='btn btn-default pull-right' title = 'Add Doctor'><i class='glyphicon glyphicon-plus' title = 'Add Doctor'></i></a>
              
              </h2></div>
	<div class="panel-body">
	<div id="example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row">
                  <div class="col-xs-12">
                  <table id="example" class="table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            
                            <th>Bed Type</th>
                            <th>floor</th>
                            <th>section located</th>
                            <th>rate per night</th>
                            <th></th>
                            
                            <!-- <th></th> -->
                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($beds as $bed)
                    <tr>
                      <td>{{ $bed->bed_type }}</td>                      
                      <td>{{ $bed->floor }}</td>
                      <td>{{ $bed->section }} </td>
                      <td>{{ $bed->rate_per_night }} </td>
                      <td> 
                        <a href="{{ url('beds/'.$bed->id.'/edit') }} ">
                          <button class="btn btn-xs btn-primary" title="edit">
                            <span class="glyphicon glyphicon-pencil"></span>
                          </button>
                        </a>
                        <a href="{{ url('beds/'.$bed->id) }} ">
                          <button class="btn btn-xs btn-primary" title="edit">
                            show</span>
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