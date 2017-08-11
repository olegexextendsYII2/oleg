@extends('main')

@section('task')
<h2>Редактировать задачу - {{$task->title}}</h2>
<form action="/{{$task->id}}/update" method="POST">
	<input type="hidden" value="PUT" name="_method">
	<input type="text" name="title" value="{{$task->title}}"> <br>
	<textarea name="content" id="" cols="30" rows="10">{{$task->content}}</textarea>
	{{csrf_field()}}
	<button>Изменить</button>
</form>
@endsection