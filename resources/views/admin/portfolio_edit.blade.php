@extends('admin.layout_admin')

@section('content')
<h2>Редактировать задачу - {{$portfolio->title}}</h2>
{!! Form::open(['route' => ['portfolio.update' , $portfolio->id], 'method' => 'PUT' ,'files'=>true ]) !!}
         <select name="categori_id" class="form-control">
                     @foreach($categoris as $categori)
                     <option value="{{$categori->id}}">{{$categori->name}}</option>
                     @endforeach
                     </select>
                     <br>
                     <br>
                     <br>
    <div class="form-group">
     <input type="text" class="form-control" name="title" value="{{$portfolio->title}}">
     <br>
    <textarea name="content" class="form-control">{{$portfolio->content}}</textarea>
     <br>
      <br>
   
     <input type="file" name="image" class="form-control">
     <br>

     <button class="btn btn-success">редактировать</button>
     <br><br>

<ul class="nav nav-pills">
    <li class="active"><a href="{{route('portfolio.index')}}">портфолио</a></li>
    
    <li><a href="{{route('home.page.admin')}}">админка</a></li>   
   </ul>
   {!! Form::close() !!}
   {{csrf_field()}}
@endsection

