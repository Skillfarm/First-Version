{{--Editing an existing work--}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit: {!! $work->subject !!}
                </div>

                <div class="panel-body">


                    {!! Form::model($work, ['method' => 'PATCH', 'action' => ['WorkController@update', $work->id]]) !!}
                       @include('work.form', ['submitButtonText' => 'Update Work'])
                    {!! Form::close() !!}

                    @include('errors.list')


                </div>
            </div>
        </div>
    </div>
@endsection