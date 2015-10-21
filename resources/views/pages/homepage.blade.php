@extends('layout.master')
@section('content') 
<div class="container">
  <!-- <div class="row">
    <div class="col-xs-12"> 
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://placehold.it/1140x300/e8117f/fff&amp;text=Image+1">
            </div>
            <div class="item">
              <img src="http://placehold.it/1140x300/00cc00/fff&amp;text=Image+2">
            </div>
            <div class="item">
              <img src="http://placehold.it/1140x300/6600ff/fff&amp;text=Image+3">
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
    </div> <!-- /col -->
  </div> <!-- /row --> 
</div> <!-- /container -->
    <!-- Page Content -->
    <div class="container">

    <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <!-- <h2 class="page-header">Welcome, come see us</h2> -->
                <h1 class="page-header">
                    Welcome to E-Patient
                </h1>
            </div>
            <div class="col-md-4 col-sm-6">
                
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <!-- <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div> -->
                                <div class="text-center">
                                    <div class="huge">26</div>
                                    <div>Registered Patients</div>
                                </div>
                            </div>
                        </div>
                        <a class = "panel-link" href="{{ url('pis/patient')}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                
            </div>
            <div class="col-md-4 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <!-- <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div> -->
                                <div class="text-center">
                                    <div class="huge">15</div>
                                    <div>Available Beds</div>
                                </div>
                            </div>
                        </div>
                        <a class = "panel-link" href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
               


            </div>
            <div class="col-md-4 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <!-- <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div> -->
                                <div class="text-center">
                                    <div class="huge">10</div>
                                    <div>Doctors</div>
                                </div>
                            </div>
                        </div>
                        <a class = "panel-link" href="{{ url('pis/doctor')}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                
        </div>
        <!-- /.row -->

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                    About Us
                </h2>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Our history</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Affordable &amp; Quality Service</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Costumer care</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Services offered</h2>
            </div>
            <div class="col-md-6">
                <p>E-Patient offers services such as:</p>
                <ul>
                    <li><strong>Plastic Surgery</strong>
                    </li>
                    <li>Check up</li>
                    <li>X ray</li>
                    <li>Admittance</li>
                    <li>Blood transfusion</li>
                    <li>Cat Scan</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="{{ URL::to('/') }}/images/hospital.png" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>
    </div>

@endsection