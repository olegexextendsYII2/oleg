@extends('admin.layout_admin')

	@section('content')
	
   	
   {{-- <ul class="nav nav-pills">
    <li class="active"><a href="{{route('portfolio.index')}}">портфолио</a></li>
    <li><a href="{{route('category.index')}}">категории</a></li>
     	
    </ul>
   </div> --}}
   
<div class="container">

{{-- <div class="col-md-6">
<h2>Портфолио</h2>
<p>Переход на редактированиие портфолио  </p>
<p><a class="btn btn-default" href="{{route('home.page.admin')}}" role="button">портфолио</a></p>
</div> --}}

<div class="row">
<div class="col-md-6">
<h2>Портфолио</h2>
<p>Переход в раздел портфолио  </p>
<p><a class="btn btn-default" href="{{route('portfolio.index')}}" role="button">портфолио</a></p>
</div>
<div class="col-md-6">
<h2>Категории</h2>
<p>Переход в раздел категорий </p>
<p><a class="btn btn-default" href="{{route('category.index')}}" role="button">категории</a></p>
</div>

</div>

 

      
	@endsection

 