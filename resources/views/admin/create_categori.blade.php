{!! Form::open(['route' => 'storeCategori']) !!}
	{!!Form::text('name')!!} 
	{!!Form::submit('создать категорию');!!}
	@foreach ($categoris as $categori)
		   <p>{{$categori->name}}</p>
		   <a href="/create_categori/{{$categori->id}}/delete">удалить_категорию</a>
		   <br>
		
	      <h4><p>{{'=================='}}</p></h4>	
	@endforeach
{!! Form::close() !!}