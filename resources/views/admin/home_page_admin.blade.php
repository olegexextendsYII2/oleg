@extends('main')

	@section('home_page_admin')
	<div class="table-responsive">
   	
   <ul class="nav nav-pills">
    <li class="active"><a href="{{route('portfolio.index')}}">портфолио</a></li>
    <li><a href="{{route('category.index')}}">категории</a></li>
     	
    </ul>
   </div>
	@endsection

 