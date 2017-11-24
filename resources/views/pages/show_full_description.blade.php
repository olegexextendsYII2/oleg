
@extends('main')
	
	@section('content')
		

				{{-- <h1>{{$portfolio->title}}</h1> --}}
			
				<img src="/uploads/{{$portfolio->image}}" alt="" class="img-responsive">
				<h3>{{$portfolio->full_description}}</h3>
	@endsection