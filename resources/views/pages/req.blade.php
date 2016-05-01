@extends('app')

@section('content')

<h1>Write A New Request</h1>
 
 </hr>

{!! Form::open(['url' => '/req']) !!}
	
	<div class="form-group">

		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}

	</div>


	<div class="form-group">

		{!! Form::label('body', 'Body:') !!}
		{!! Form::textarea('title', null, ['class' => 'form-control']) !!}

	</div>


	<div class="form-group">

		{!! Form::submit('Add Request', ['class' => 'btn btn-primary form-control']) !!}

	</div>

{!! Form::close() !!}


@stop