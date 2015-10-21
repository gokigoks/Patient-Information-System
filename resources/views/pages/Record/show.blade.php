@extends('layout.master')

@section('content')
  
  <div class="container">

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>record no</h3>
      </div>
      <div class="panel-body">
        Bed type : {{ $record->visit_type }}<hr>
        floor : {{ $record->symptoms }}<hr>
        Section located : @if($record->findings)
                          {{ $record->findings }}
                          @else
                          No findings.
                          @endif
                          <hr>
        Rate per night : {{ $record->medical_advice }}<hr>
        Vacancy : {{ $record->visit_date }}
        Vacancy : {{ $record->discharge_date }}
        
      </div>
      <div class="panel-footer"><a href="{{ url('pis/patient/'.$patient->id) }}">
        <button class="btn btn-small">
          <span class="glyphicon glyphicon-arrow-left"> back </span>
        </button></a>
      </div>
    </div>

  </div>

@endsection