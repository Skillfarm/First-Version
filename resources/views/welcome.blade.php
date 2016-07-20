@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">

                    {{--zeinab  change--}}
                    <h1>Departments</h1>

                    @foreach($departments as $department)

                        <article>
                            <h2>
                                <a href="/department/{{$department->id}}">{{ $department->name }}</a>
                            </h2>
                        </article>

                    @endforeach
                    {{--Your Application's Landing Page.--}}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
