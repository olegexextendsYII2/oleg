@extends('main')

@section('task')
<h2>Создать задачу</h2>
<form action="/store" method="POST">
	<input type="text" name="title"> <br>
	<textarea name="content" id="" cols="30" rows="10"></textarea>
	{{csrf_field()}}
	<button>Создать</button>
</form>
@endsection