@extends('layout.master')

@section('content')
  
  <div class="container">

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>Discharge patient</h3>

         <!--  <a data-toggle="modal"  data-target="#myModal" data-href="{{ url('visit') }}"> -->
         {!! Form::open(array('url' => 'visit/'.$visit->id, 'method' => 'DELETE')) !!}
          
          <button type="submit" class="btn btn-success btn-md pull-right" data-target="#confirm_modal" data-toggle="modal">
            <span class="glyphicon glyphicon-ok">discharge</span>
          </button></a>
          
        Delete record #54
          </button>
          
        <div class="clearfix"></div>
      </div>
      <div class="panel-body">
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
        <div class="row-form">                      
          {!! Form::textarea('findings',null,['placeholder'=>'findings', 'class' => 'form-control' ]) !!}<span class="highlight"></span><span class="bar"></span>
        </div>
        <div class="row-form">                      
          {!! Form::textarea('medical_advice',null,['placeholder'=>'medical advice' ,'class' => 'form-control']) !!}<span class="highlight"></span><span class="bar"></span>
        </div>
        doctor name : {{ $doctor }}<hr>
        patient name : {{ $patient }}<hr>
        room : {{ $visit->bed->getBed() }}<hr>
        due payment : P {{ $visit->getTotalDue() }}<hr>
        {!! Form::close() !!}
      </div>
      <div class="panel-footer"><a href="{{ url('visit') }}">
        <button class="btn btn-small">
          <span class="glyphicon glyphicon-arrow-left"> back </span>
        </button></a>
      </div>
    </div>

  </div>


<!-- modal -->
        <div id="confirm-delete" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Discharge {{ $patient }} </h4>
              </div>
              <div class="modal-body">
                <p>patient will be discharged. proceed?&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
                  <button type="submit" class="btn btn-primary">Save changes</button>
                
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div>
@endsection

@section('js')
<script>
<!-- Dialog show event handler -->
  $('#confirm_delete').on('show.bs.modal', function (e) {
      $message = $(e.relatedTarget).attr('data-message');
      $(this).find('.modal-body p').text($message);
      $title = $(e.relatedTarget).attr('data-title');
      $(this).find('.modal-title').text($title);

      // Pass form reference to modal for submission on yes/ok
      var form = $(e.relatedTarget).closest('form');
      $(this).find('.modal-footer #confirm').data('form', form);
  });

  <!-- Form confirm (yes/ok) handler, submits form -->
  $('#confirmDelete').find('.modal-footer #confirm').on('click', function(){
      $(this).data('form').submit();
  });
</script>
@endsection


