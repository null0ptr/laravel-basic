@extends('layout')

@section('page-content')
<div class="container mt-5">
	<div class="mb-3 d-flex justify-content-end">
		<a class="btn btn-primary" href="{{route('books.create')}}">Add Book</a>
	</div>
	<table class="table table-bordered table-striped">
		<caption>List of Books</caption>
		<thead class="thead-dark">
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Title</th>
				<th scope="col">Author</th>
				<th scope="col">Details</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($books as $book)
				<tr>
					<td>{{$book->id}}</td>
					<td>{{$book->title}}</td>
					<td>{{$book->author}}</td>
					<td><a class="" href="{{route('books.show', $book->id)}}">Link</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{{ $books->links() }}
</div>

@endsection