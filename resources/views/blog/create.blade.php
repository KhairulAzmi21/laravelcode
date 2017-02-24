@extends('blog.master')

@section('content')

	<div class="container">
		<form method="POST" action="/posts">
			{{ csrf_field() }}
		  <div class="form-group">
		    <label for="title">Title</label>
		    <input type="text" class="form-control"  id="title" name="title">
		  </div>
		  <div class="form-group">
		    <label for="body">Body</label>
		    <textarea id="body" name="body"  class="form-control"></textarea>
		  </div>

		   <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Publish</button>
		  </div>
		  @include('blog.errors')

		</form>


	</div>

@endsection