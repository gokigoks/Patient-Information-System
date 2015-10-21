@extends('layout.master')

@section('content')
  
  <div class="container">

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>Bed no.{{ $bed->id}}</h3>
      </div>
      <div class="panel-body">
        Bed type : {{ $bed->bed_type }}<hr>
        floor : {{ $bed->floor }}<hr>
        Section located : {{ $bed->section }}<hr>
        Rate per night : {{ $bed->rate_per_night }}<hr>
        Vacancy : {{ $vacant }}
      </div>
      <div class="panel-footer"><a href="{{ url('beds') }}">
        <button class="btn btn-small">
          <span class="glyphicon glyphicon-arrow-left"> back </span>
        </button></a>
      </div>
    </div>

  </div>

@endsection