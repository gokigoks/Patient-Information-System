@extends('layout.master')
@section('content')
<div class="container">
<div class="panel panel-default">
              <div class="panel-heading"><h2>Doctors<a href ="{{url('/pis/doctorform')}}" class='btn btn-default pull-right' title = 'Add Doctor'><i class='glyphicon glyphicon-plus' title = 'Add Doctor'></i></a>
              
              </h2></div>
	<div class="panel-body">
	<div id="example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row">
                  <div class="col-xs-12">
                  <table id="example" class="table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Specialty</th>
                            
                            <!-- <th></th> -->
                            
                        </tr>
                    </thead>
             
                    <tfoot>
                        <tr>
                        
                            
                            <!-- <th></th> -->
                        </tr>
                    </tfoot>
             
                    <tbody>
                    @foreach($doctors as $doctor)
                    <tr>
                       <td>{{$doctor->doctor_lname}}, {{$doctor->doctor_fname}} {{$doctor->doctor_mname}}</td>
                      
                       <td>{{$doctor->specialty->med_specialty}}</td>
                      
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