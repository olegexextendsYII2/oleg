
@extends('main')

@section('task')

@foreach ($tasks as $task)
	
		<p>{{$task}}</p>
		
		
	@endforeach
	
	
@endsection('task')	
		