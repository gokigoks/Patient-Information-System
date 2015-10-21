@extends('layout.master')
@section('content')
<div class="container">
<div class="panel panel-default">
              <div class="panel-heading"><h2>Patient Details<a href ="{{url('/pis/patientform')}}" class='btn btn-default pull-right' title = 'Add Book'><i class='glyphicon glyphicon-plus' title = 'Add Book'></i></a>
              
              </h2></div>
	<div class="panel-body">
	    
            name : {{ $patient->pfname }} {{ $patient->pmname }} {{ $patient->plname }} <br>
            date of birth : {{ $patient->pbirth }} <br>
            record since : {{ $patient->created_at }} <br>

  </div>
  </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>Patient Record</h3>
      </div>
      <div class="panel-body">
         <div id="example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row">
                  <div class="col-xs-12">
                  <table id="example" class="table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            
                            <th>visit type</th>
                            <th>symptoms</th>
                            <th>findings</th>
                            <th>medical advice</th>                            
                            <th>visit date</th>
                            <th>discharge date</th>
                            <th></th>
                            
                        </tr>
                    </thead>
             
                   
             
                    <tbody>
                    @foreach($records as $record)
                      <tr>
                        <td>{{ $record->visit_type }}</td> 
                        <td>{{ $record->symptoms }}</td>
                        <td>{{ $record->findings  }}</td>
                        <td>{{ $record->medical_advice }}</td>
                        <td>{{ $record->visit_date }}</td>
                        <td>{{ $record->discharge_date }}</td>
                        <td>
                          <a href="{{ url('patient/'.$patient->id.'/record/'.$record->id) }} ">
                            <button class="btn btn-xs btn-primary" title="view">
                              show
                            </button>
                          </a>  
                        </td>
                      </tr>
                     @endforeach
                    </tbody>
                </table>
              </div>
              </div>


              </div>
</div>
      </div>
      <div>

      </div>
    </div>
</div>
@endsection