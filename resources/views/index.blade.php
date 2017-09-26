
@extends('main')

@section('task')

<a href="/create">Создать_портфолио</a>
<br>
<a href="create_categori/create">Создать_категорию</a>
	@foreach ($portfolios as $portfolio)
		<p>{{$portfolio->title}}</p>
		<p>{{$portfolio->content}}</p>
		<p>{{$portfolio->categori->name}}</p> 
		<br>
		<a href="/{{$portfolio->id}}/edit">редактировать</a>
		<br>
		<a href="/{{$portfolio->id}}/crosOut">удалить</a>
		<br>
		<img src = "uploads/{{$portfolio->image}}" width = 100 />
	<h4><p>{{'=================='}}</p></h4>	
	@endforeach

@endsection
		