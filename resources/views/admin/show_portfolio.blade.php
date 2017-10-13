
@extends('main')

	@section('show_portfolio')

		 <table class="table table-bordered table-hover">
                              
                                <tbody>
                                    <tr>
                                         <td><p>{{$portfolio->title}}</p><p>заголовок</p></td>
                                        
                                        <td><p>{{$portfolio->content}}</p><p>описание</p></td>
                                        
                                        <td><p>{{$portfolio->categori->name}}</p><p>категория</p></td>
                                        
                                        
                                        <td>  <img src = "/uploads/{{$portfolio->image}}" width="50" /></

                                        	td><td><a href="{{route('portfolio.edit' , ['id' =>$portfolio->id] )}}">редактировать</a></td>
                                        
                                        <td>{!! Form::open(['method' => 'DELETE','route' => ['portfolio.destroy' , $portfolio->id]]) !!}
                                               {!!Form::submit('удалить')!!}     
                                            {!! Form::close() !!}</td>
                                        </tr>
                                 
                                </tbody>
                            </table>
                            <li class="active"><a href="{{route('portfolio.create')}}">Создать_портфолио</a>
                            	 <li class="active"><a href="{{route('portfolio.index')}}">портфолио</a></li>
	@endsection