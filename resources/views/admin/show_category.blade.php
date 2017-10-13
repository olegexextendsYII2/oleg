     


    @extends('main')

	@section('show_category')

		<h2>{{$category->name}}</h2>
		<ul class="nav nav-pills">
    <li class="active"><a href="{{route('category.create')}}">Создать категорию</a>
    </li>
    <li><a href="{{route('home.page.admin')}}">админка</a></li>
    <li><a href="{{route('category.index')}}">категории</a></li>   
    </ul>


	@endsection