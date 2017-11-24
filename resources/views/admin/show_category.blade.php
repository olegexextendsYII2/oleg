     


    @extends('admin.layout_admin')

	@section('content')

		<h2>{{$category->name}}</h2>
		<ul class="nav nav-pills">
    <li class="active"><a href="{{route('category.create')}}">Создать категорию</a>
    </li>
    <li><a href="{{route('home.page.admin')}}">админка</a></li>
    <li><a href="{{route('category.index')}}">категории</a></li>   
    </ul>


	@endsection