@extends('main')

@section('content')
<div class="container-home">
 
<div class="container-investment-services">
    <div class="container">
		<div class="page-header" id="services">
			<h1>Направления деятельности</h1>
        </div>
        <div class="page-header" id="services">
            <h3>Немного философии</h3>
            <div>
                    <h2>Создание сайтов</h2>
                    <p class="text-justify">Да да именно создание, в этом понятии кроется главная мысль. Индивидуальность подхода, и в тоже время только проверенные надежные технологии. Только при саблюдении этих основных правил возможно создание чего либо. </p>
                    {{-- <button type="button" class="btn btn-primary btn-lg" style="margin:20px;">READ MORE</button> --}}
                </div>
        </div>
        <div class="row">
		    <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-responsive" style="margin-bottom:20px;" src={{asset('asset/images/gallery/gallery1.jpg')}} />
                    <div class="overlay">
                        <h2 style="margin-top: 10px;">Индивидуальный подход</h2>
                        <a class="info" href="#StrongCode">только проверенные технологии</a>
                    </div>
			    </div>
				<div>
					<h2>Создание сайтов</h2>
					<p class="text-justify">Да да именно создание, в этом понятии кроется главная мысль. Индивидуальность подхода, и в тоже время только проверенные надежные технологии. Только при саблюдении этих основных правил возможно создание чего либо. </p>
					{{-- <button type="button" class="btn btn-primary btn-lg" style="margin:20px;">READ MORE</button> --}}
				</div>
		    </div>
		    <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-responsive" style="margin-bottom:20px;" src={{asset('asset/images/gallery/gallery2.jpg')}} />
                    <div class="overlay">
                        <h2>Business</h2>
                        <a class="info" href="#ArtDirector">analytics</a>
                    </div>
			    </div>
				<div>
					<h2>Business Analytics</h2>
					<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<button type="button" class="btn btn-primary btn-lg" style="margin:20px;">READ MORE</button>
				</div>
		    </div>
		    <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-responsive" style="margin-bottom:20px;" src={{asset('asset/images/gallery/gallery3.jpg')}}/>
                    <div class="overlay">
                        <h2>Investment</h2>
                        <a class="info" href="#StartupCEO">consulting</a>
                    </div>
                </div>
				<div>
					<h2>Investment Consulting</h2>
					<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<button type="button" class="btn btn-primary btn-lg" style="margin:20px;">READ MORE</button>
				</div>
		    </div>
	    </div>
	</div>
</div>
<script src={{asset('asset/js/jquery.min.js')}}></script>
<script src={{asset('asset/bootstrap/js/bootstrap.min.js')}}></script>
<script type="text/javascript" src="https://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
<script src={{asset('asset/js/gridData.js')}}></script>
<script src={{asset('asset/js/theme.js')}}></script>

<script type="text/javascript">
    jQuery(function($) {
		// Shield UI Grid
        $("#grid").shieldGrid({
            dataSource: {
                data: gridData                 
            },
            sorting:{
                multiple: true
            },
            paging: {
                pageSize: 12,
                pageLinksCount: 10
            },
            selection:{
                type: "row",
                multiple: true,
                toggle: false
            },
            columns: [                
                { field: "id", width: "70px", title: "ID" },
                { field: "name", title: "Person Name" },
                { field: "company", title: "Company Name" },
                { field: "email", title:"Email Address", width: "270px" }
            ]
        });
    });
</script>

	

@endsection