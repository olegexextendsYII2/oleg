
@extends('main')

	@section('show_category_portfolio')

	
	<div class="container">
		<h3 class="tittle-one">Мои работы</h3> 
			
			<script src={{asset('asset/js/jquery.swipebox.min.js')}}></script> 
			<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
			</script>

			@foreach($portfolios as $portfolio)

				<div class="view view-seventh">
                    <a href="/uploads/{{$portfolio->image}}" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="/uploads/{{$portfolio->image}}" alt="" class="img-responsive">
                    <div class="mask">
                       <h4>{{$portfolio->title}}</h4>
                        <p>{{$portfolio->content }}</p>
                         <ul class="nav nav-pills">
   
     	
                  </ul>
                        
                    </div></a>
                
                </div>
            @endforeach    
				<div class="clearfix"></div>

</div>

	@endsection