@extends('app')

@section('content')

<h1>Profile</h1>
 
@foreach ($tasks as $task)
<article>
	
	<h2>
	<a href="/profile/{{$task -> id}}" >{{$task -> name}}</a>
	</h2>


</article>

@endforeach

@stop