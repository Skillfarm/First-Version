@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <h1>{{ $department->name }}  Department<br><br></h1>

                <div class="panel panel-default">
                    <div class="panel-heading">Wroks</div>
                    <div class="panel-body">

                        @foreach($works as $work)

                            <article>
                                <h2>
                                    <a href="{{ url('/work', $work->id)}}">{{ $work['subject'] }}</a>
                                </h2>
                            </article>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Courses</div>
                    <div class="panel-body">

                        @foreach($courses as $course)

                            <article>
                                <h2>
                                    <a href="{{ url('/course', $course->id)}}">{{ $course['name'] }}</a>
                                </h2>
                            </article>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
