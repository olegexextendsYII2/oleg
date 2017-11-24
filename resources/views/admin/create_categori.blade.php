@extends('admin.layout_admin')



@section('content')
<h1>Создать категорию</h1>
<br>
<br>
<div class="container">

{!! Form::open(['route' => 'category.store']) !!}
	 <input type="text" class="form-control" name="name" value=""> 
     <br>
	<ul class="nav nav-pills">
	  <div class="btn ">{!!Form::submit('создать категорию');!!}</div>
	
  <ul class="nav nav-pills">
     <li class="active"><a href="{{route('home.page.admin')}}">админка</a></li> 
     <li><a href="{{route('category.index')}}">категории</a></li>
  
    </ul>
{!! Form::close() !!}
</div>

@endsection