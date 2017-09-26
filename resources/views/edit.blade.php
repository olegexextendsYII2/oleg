@extends('main')

@section('task')
<h2>Редактировать задачу - {{$portfolio->title}}</h2>
{!! Form::open(['route' => ['update' , $portfolio->id],'files'=>true]) !!}
    <div class="form-group">
     <input type="text" class="form-control" name="title" value="{{$portfolio->title}}">
     <br>
    <textarea name="content" class="form-control">{{$portfolio->content}}</textarea>
     <br>
     <input type="file" name="image" class="form-control">
     <br>

     <button class="btn btn-success">Submit</button>
    </div>
   {!! Form::close() !!}
   {{csrf_field()}}
@endsection

