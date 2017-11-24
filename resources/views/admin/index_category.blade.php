
	@extends('admin.layout_admin')

@section('content')
 <{{-- div class="table-responsive">
 	 				 @foreach ($categorys as $category)
                            <table class="table table-bordered table-hover">
                              
                                <tbody>
                                    <tr>
                                        <td><p>{{$category->name}}</p><p>название</p></td>
                                         <tr>
                                        <td>{!! Form::open(['method' => 'DELETE','route' => ['category.destroy' , $category->id]]) !!}
                                               {!!Form::submit('удалить')!!}     
                                            {!! Form::close() !!}</td>
                                        <td> 
                                            </li>
                                           <li><a href="{{route('category.show' , ['id' => $category->id] )}}">просмотр категории</a></li>   
                                           </ul></td>
                                    </tr>
                                 
                                </tbody>
                            </table>
                     @endforeach

                        </div>
                    </div>
    <ul class="nav nav-pills">
    <li class="active"><a href="{{route('category.create')}}">Создать категорию</a>
    </li>
    <li><a href="{{route('home.page.admin')}}">админка</a></li>   
    </ul>
 --}}

<table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                
            </tr>
        </thead>

        <tbody>
           @foreach ($categorys as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    
                    <td>
                        
                        {!! Form::open([
                            'route' =>  ['category.destroy' , $category->id],
                            'method'    =>  'DELETE'
                            ]) 
                        !!}
                        <button class="btn btn-danger">Delete</button>
                        {!! Form::close() !!}
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

<ul class="nav nav-pills">
    <li class="active"><a href="{{route('category.create')}}">Создать категорию</a>
    </li>
    <li><a href="{{route('home.page.admin')}}">админка</a></li>   
</ul>
    

<br>

<br>
<br>
<br>
<br>

	

@endsection