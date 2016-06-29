@extends('layouts.app')



@section('content')

<div class="container" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h2>Give Help From Others</h2>
            </div>
        </div>
    </div>



    <h2>Our Departments</h2>

    <div class="container">
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="col-sm-4">
                    <img class="img-circle img-responsive" src="{{ URL::to('/') }}/images/amir.png" alt="Chania" width="460" height="345">
                    </div>
                    <div class="col-sm-4">
                        <img class="img-circle img-responsive" src="{{ URL::to('/') }}/images/amir.png" alt="Chania" width="460" height="345">
                    </div>
                    <div class="col-sm-4">
                        <img class="img-circle img-responsive" src="{{ URL::to('/') }}/images/amir.png" alt="Chania" width="460" height="345">
                    </div>
                </div>

                <div class="item">
                    <div class="col-sm-4">
                        <img class="img-circle img-responsive" src="{{ URL::to('/') }}/images/amir.png" alt="Chania" width="460" height="345">
                    </div>
                    <div class="col-sm-4">
                        <img class="img-circle img-responsive" src="{{ URL::to('/') }}/images/amir.png" alt="Chania" width="460" height="345">
                    </div>
                    <div class="col-sm-4">
                        <img class="img-circle img-responsive" src="{{ URL::to('/') }}/images/amir.png" alt="Chania" width="460" height="345">
                    </div>
                </div>

            </div>


        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>


        <!-- Container (Services Section) -->
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">
<div id="services" class="container-fluid text-center">
    <h2>SERVICES</h2>
    <h4>What we offer</h4>
    <br>
    <div class="row slideanim">
        <div class="col-sm-4">
            <span style="font-size:3em;" class="glyphicon glyphicon-off logo-medium"></span>
            <h4>POWER</h4>
        </div>
        <div class="col-sm-4">
            <span style="font-size:3em;" class="glyphicon glyphicon-heart logo-small"></span>
            <h4>LOVE</h4>
        </div>
        <div class="col-sm-4">
            <span style="font-size:3em;" class="glyphicon glyphicon-lock logo-small"></span>
            <h4>JOB DONE</h4>
        </div>
    </div>
    <br><br>
    <div class="row slideanim">
        <div class="col-sm-4">
            <span style="font-size:3em;" class="glyphicon glyphicon-leaf logo-small"></span>
            <h4>GREEN</h4>
        </div>
        <div class="col-sm-4">
            <span style="font-size:3em;" class="glyphicon glyphicon-certificate logo-small"></span>
            <h4>CERTIFIED</h4>
        </div>
        <div class="col-sm-4">
            <span style="font-size:3em;" class="glyphicon glyphicon-wrench logo-small"></span>
            <h4 style="color:#303030;">HARD WORK</h4>
        </div>
    </div>
</div>
        </div>
</div>

@endsection