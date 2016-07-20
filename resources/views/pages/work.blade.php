@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Work Subject: {{ $work['subject'] }}</div>

                    <div class="panel-body">

                        <h3>Work detail:</h3>
                        <h4>{{ $work->detail }}</h4>
                        <br><br><br>
                        <h3>Work dead time:</h3>
                        <h4>{{ $work->dead_time->addDays(8)->diffForHumans() }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
