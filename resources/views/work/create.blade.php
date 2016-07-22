{{--create a new work--}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Work
                </div>

                <div class="panel-body">

                    {!! Form::open(['url' => '/work']) !!}
                        @include('work.form', ['submitButtonText' => 'Add Work'])
                    {!! Form::close() !!}


                    @include('errors.list')


                </div>
            </div>

        </div>
    </div>
@endsection
