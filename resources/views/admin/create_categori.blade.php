@extends('main')



@section('categorys_create')
<div class="container">

{!! Form::open(['route' => 'category.store']) !!}
	 <divclass="form-control">{!!Form::text('name')!!}</div>  
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