@extends('admin.layout_admin')

@section('content')
<h2>портфолио</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
    
     {!! Form::open(['route' => 'portfolio.store' ,'files'=>true]) !!}

                     <select name="categori_id" class="form-control">
                     @foreach($categoris as $categori)
                     <option value="{{$categori->id}}">{{$categori->name}}</option>
                     @endforeach
                     </select>
                     <br>
                     <br>
                     <br>
     <div class="container">
    <div class="form-group">
     <input type="text" class="form-control" name="title" value="">
     <br>
    <textarea name="content" class="form-control"></textarea>
     <br>
     <br>
    <textarea name="full_description" class="form-control"></textarea>
     <br>
     <input type="file" name="image" class="form-control">
     <br>
     <button class="btn btn-success">создать</button>
    </div>
    </div>
     
  <ul class="nav nav-pills">
    <li class="active"><a href="{{route('portfolio.index')}}">портфолио</a></li>
    
    <li><a href="{{route('home.page.admin')}}">админка</a></li>   
   </ul>
   {!! Form::close() !!}
   {{csrf_field()}}
@endsection