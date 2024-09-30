@extends('layout')

@section('page-content')

<div class="container mt-3">
	<a class="btn btn-secondary mb-2" href="{{route('books.index')}}">Home</a>

	<table class="table table-bordered table-striped">
		<tr>
			<th scope="row">ID</th>
			<td>{{$book->id}}</td>
		</tr>
		<tr>
			<th scope="row">Title</th>
			<td>{{$book->title}}</td>
		</tr>
		<tr>
			<th scope="row">Author</th>
			<td>{{$book->author}}</td>
		</tr>
		<tr>
			<th scope="row">ISBN</th>
			<td>{{$book->isbn}}</td>
		</tr>
		<tr>
			<th scope="row">Price</th>
			<td>{{$book->price}}</td>
		</tr>
		<tr>
			<th scope="row">Stock</th>
			<td>{{$book->stock}}</td>
		</tr>
	</table>
</div>
@endsection