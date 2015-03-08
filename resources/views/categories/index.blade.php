<h4 class="text-danger">Categories</h4>

<hr>

@foreach($categories as $category)
<div class="row">
	<div class="col-md-4">
		<a href="#"><p>{{ $category->name }}</p></a>
	</div>
	<div class="col-md-4">
	<form action="{{ route('categories.destroy', [$category->id]) }}" method="post">
		<input type="hidden" name="_method" value="delete">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="submit" value="Delete" class="btn btn-xs btn-danger">
	</form>
</div>
	<div class="col-md-4">
		<a class="btn btn-xs btn-warning" href="{{ route('categories.edit', [$category->id]) }}">Edit</a>
	</div>
</div>
@endforeach
	