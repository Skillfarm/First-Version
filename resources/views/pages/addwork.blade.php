@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Work
                </div>

                <div class="panel-body">

                    {!! Form::open(['url' => '/addwork']) !!}

                        <div class="form-group">
                            {!! Form::label('subject', 'Subject') !!}
                            {!! Form::text('subject', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('detail', 'Detail') !!}
                            {!! Form::textarea('detail', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('department_id', 'Department ID') !!}
                            {!! Form::input('number', 'department_id', null, ['class' => 'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('course_id', 'Course ID') !!}
                            {!! Form::input('number', 'course_id', null, ['class' => 'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('dead_time', 'Dead Time') !!}
                            {!! Form::input('date', 'dead_time', date('Y-m-d'), ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Add Work', ['class' => 'btn btn-primary form-control']) !!}
                        </div>


                    {!! Form::close() !!}



                </div>
            </div>

        </div>
    </div>
@endsection
