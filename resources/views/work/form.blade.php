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
    {!! Form::label('label_list', 'Tags: ') !!}
    {!! Form::select('label_list[]', $labels, null, ['class' => 'form-control', 'multiple']) !!}
    {{--arguments: (name, default, selected item, any kind of additional attributes(here: multiple attribut)--}}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>