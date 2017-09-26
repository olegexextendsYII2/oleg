@extends('main')

@section('task')
<h2>Создать задачу</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
                   
                    
           
      
    
     {!! Form::open(['route' => 'store' ,'files'=>true]) !!}


                     @foreach ($categoris as $categori)
                           {{$categori->name}}
                        {!! Form::radio('categori_id', "$categori->id"  ) !!}
                    
                     @endforeach
    <div class="form-group">
     <input type="text" class="form-control" name="title" value="">
     <br>
    <textarea name="content" class="form-control"></textarea>
     <br>
     <input type="file" name="image" class="form-control">
     <br>
     <button class="btn btn-success">Submit</button>
    
    </div>
   {!! Form::close() !!}
   {{csrf_field()}}
@endsection