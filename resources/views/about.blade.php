@extends('master')
@section('content')
	<h1> This is about page</h1>
	<ul>
		@foreach($tasks as $task)
		<li><a href="/task/{{$task->id}}">  {{$task-> body}}</a>   </li>
		@endforeach
	</ul>
@endsection('content')