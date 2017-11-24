

@extends('main')

@section('content')
<div class="page-header" id="services">
			<h1>Мои работы</h1>
        </div>
 @foreach ($portfolios as $portfolio)
 <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-responsive" style="margin-bottom:20px;"   src="/uploads/{{$portfolio->image}}" /> 
                    <div class="overlay">
                        <h2>{{$portfolio->title}}</h2>
                        <a class="info" href="{{route('show.category' , ['id' => $portfolio->categori->id])}}">{{$portfolio->categori->name}}</a>
                    </div>
                     
                      
                    
			    </div>
				<div>
					<h2>{{$portfolio->title}}</h2>
					<p class="text-justify">{{$portfolio->content }}</p>
					<button type="button" class="btn btn-primary btn-lg" style="margin:20px;">READ MORE</button>
				</div>
		    </div>

   @endforeach

{{-- <div class="treatments">
	<div class="container">
		<h3 class="tittle-one">Мои работы</h3> 
			
			<script src={{asset('asset/js/jquery.swipebox.min.js')}}></script> 
			<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
					
			});
			</script>
			@foreach ($portfolios as $portfolio)
				<div class="view view-seventh">
                    <a href="/uploads/{{$portfolio->image}}" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="/uploads/{{$portfolio->image}}" alt="" class="img-responsive">
                    <div class="mask">
                       <h4>{{$portfolio->title}}</h4>
                        <p>{{$portfolio->content }}</p>
                         <ul class="nav nav-pills">
    						<li class="active"><a href="{{route('show.category' , ['id' => $portfolio->categori->id])}}">{{$portfolio->categori->name}}</a></li>

    						<li class=""><a href="{{route('show.description' , ['id' => $portfolio->id])}}">{{$portfolio->title}}</a></li>
    					</ul>
                        
                    </div></a>
                
                </div>
            @endforeach    
				<div class="clearfix"></div>
	</div>
</div> --}}


	

		
		
	

@endsection