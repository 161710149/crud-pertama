@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
		
		<div class="panel panel-primary">
			<div class="panel-heading">Tabel Data Post
				<div class="panel-title pull-right "><a href="{{ route('posts.create')}}">Tambah </a></div></div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table">
						<thread>
							<tr>

						<th>No</th>
						<th>Tittle</th>
						<th>Content</th>
						<th colspan="2">Action</th>
						
						</tr>
					</thread>

					<tbody>
						@php $no = 1; @endphp
						@foreach($posts as $data)
						<tr>

							<td>{{ $no++ }}</td>
							<td>{{ $data->tittle }}</td>
							<td><p>{{ $data->content }} </p></td>
							<td>
								<a class="btn btn-warning" href="{{ route('posts.edit',$data->id) }}">Edit</a>
							</td>

							<td>
								<form method="post" action="{{ route('posts.destroy',$data->id) }}">
									<input type="hidden" value="{{ csrf_token() }}">
									<button type="submit" class="btn btn-danger">Delete</button>
									
								</form>
								</td>

								<td href="{{ route('posts.show',$data->id) }}" class="btn btn-success">Show</td>
						</tr>
						@endforeach
					</tbody>
				</table>
	
				</div>
			</div>
		</div>
	</div>
</div>
</div>

@endsection