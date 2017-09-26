<a href="/create_categori/create">Создать</a>

	@foreach ($categoris as $categori)
		   <p>{{$categori->name}}</p>
		   <a href="/create_categori/{{$categori->id}}/delete">удалить</a>
		   <br>
		
	      <h4><p>{{'=================='}}</p></h4>	
	@endforeach