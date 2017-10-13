
@extends('main')

@section('portfolio')
 <div class="table-responsive">
 	 				@foreach ($portfolios as $portfolio)
                            <table class="table table-bordered table-hover">
                              
                                <tbody>
                                    <tr>
                                        <td><p>{{$portfolio->title}}</p><p>заголовок</p></td>
                                        <td><p>{{$portfolio->content}}</p><p>описание</p></td>
                                        <td><p>{{$portfolio->categori->name}}</p><p>категория</p></td>
                                        <td><a href="{{route('portfolio.edit' , ['id' =>$portfolio->id] )}}">редактировать</a></td>
                                        <td>{!! Form::open(['method' => 'DELETE','route' => ['portfolio.destroy' , $portfolio->id]]) !!}
                                               {!!Form::submit('удалить')!!}     
                                            {!! Form::close() !!}</td>
                                        <td>  <img src = "/uploads/{{$portfolio->image}}" width="50" /></td> 
                                        <td><a href="{{route('portfolio.show' , ['id' => $portfolio->id] )}}">посмотреть портфолио</a></td>
                                    </tr>
                                 
                                </tbody>
                            </table>
                     @endforeach

                        </div>
                    </div>
    <ul class="nav nav-pills">
    <li class="active"><a href="{{route('portfolio.create')}}">Создать_портфолио</a>
    </li>
    <li><a href="{{route('home.page.admin')}}">админка</a></li>   
    </ul>

<br>

<br>
<br>
<br>
<br>

	

@endsection
		