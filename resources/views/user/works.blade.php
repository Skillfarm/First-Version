@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">

                        <h1>Departments</h1>

                        @foreach($works as $work)

                            <article>
                                <h2>
                                    {{ $work->subject }}
                                </h2>
                            </article>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection