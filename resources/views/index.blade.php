
@extends('main')

@section('task')
<a href="/create">Создать</a>
	@foreach ($tasks as $task)
		<p>{{$task->title}} <a href="/{{$task->id}}/edit">Изменить</a></p>	
	@endforeach
	
	
@endsection
		