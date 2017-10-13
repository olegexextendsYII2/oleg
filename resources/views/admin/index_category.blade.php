
	@extends('main')

@section('categorys')
 <div class="table-responsive">
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
    

<br>

<br>
<br>
<br>
<br>

	

@endsection