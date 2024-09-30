@extends('layout')

@section('page-content')
<div class="container">
	<h1 class="mt-5">Add Book</h1>
	<form action="{{route('books.store')}}" method="POST">
		@csrf
		<div class="form-group">
			<div>
				<label for="title">Title</label>
				<input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
					value="{{old('title')}}">
				@if($errors->has('title'))
					<small id="titleHelp" class="form-text text-danger">{{ $errors->first('author') }}</small>
				@else
					<small id="titleHelp" class="form-text text-muted">Title of the book</small>
				@endif
			</div>
			<div class="mt-3">
				<label for="author">Author</label>
				<input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author"
					value="{{old('author')}}">
				@if($errors->has('author'))
					<small id="authorHelp" class="form-text text-danger">{{ $errors->first('author') }}</small>
				@else
					<small id="authorHelp" class="form-text text-muted">Author of the book</small>
				@endif
			</div>
			<div class="mt-3">
				<label for="isbn">ISBN</label>
				<input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn" name="isbn"
					value="{{old('isbn')}}">
				@if($errors->has('isbn'))
					<small id="isbnHelp" class="form-text text-danger">{{ $errors->first('isbn') }}</small>
				@else
					<small id="isbnHelp" class="form-text text-muted">ISBN No must be 13 digits</small>
				@endif

			</div>
			<div class="mt-3">
				<label for="price">Price</label>
				<input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
					value="{{old('price')}}">
				@if($errors->has('price'))
					<small id="priceHelp" class="form-text text-danger">{{ $errors->first('price') }}</small>
				@else
					<small id="priceHelp" class="form-text text-muted">Price of the book</small>
				@endif
			</div>
			<div class="mt-3">
				<label for="stock">Stock</label>
				<input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock"
					value="{{old('stock')}}">
				@if($errors->has('price'))
					<small id="stockHelp" class="form-text text-danger">{{ $errors->first('stock') }}</small>
				@else
					<small id="stockHelp" class="form-text text-muted">Stock of the book</small>
				@endif
			</div>
			<div class="mt-3">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
</div>
@endsection