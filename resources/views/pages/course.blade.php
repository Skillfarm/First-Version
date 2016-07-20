@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Works</div>

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

@endsection
