<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1> This is about page</h1>
	<ul>
		@foreach($tasks as $task)
		<li><a href="/about/{{$task->id}}">  {{$task-> body}}</a> </li>
		@endforeach
	</ul>
</body>
</html>