@extends('main')

@section('content')

<div class="container-home">
    <div class="container">
		<div class="page-header" id="home">
        </div>
        <div class="row">
			<div class="col-md-4">
				<img class="img-responsive" style="border-radius:50%; width:250px; height:250px;" src={{asset('asset/images/image0.jpg')}} />
			</div>
			<div class="col-md-6">
				<h2 class="text-warning">Oбо мне</h2>
				<h3>коротко</h3>
				<p class="text-justify">. Здравствуйте меня Зовут Олег мне 39 лет. Работаю и живу в Подмосковье , семья находиться в Ростове на Дону по этому ищу работу в Ростове(хочу воссоединиться с семьей. 
Учусь в университете на заочном факультете по специальности Автоматизация технологических процессов и производств.
В свободное время занимаюсь web-программированием. 
Изучаю язык программирования PHP, паттерн MVC, объектно ориентированное программирование. В частности специализируюсь на "back end" разработке, активно изучаю 
Laravel Framework. Есть пример моих учебных изысканий 
http://umakep.zzz.com.ua ссылка на сайт.

проект на GitHub https://github.com/olegexextendsYII2/oleg
Сейчас продолжаю интенсивно и развиваться в сфере Web технологий и есть желание продолжать !!!

Если вам нужен начинающий но очень целеустремленный и ответственный с творческим подходом сотрудник , буду рад работать у вас!!!
</p>
			</div>
			<{{-- div class="col-md-4">
				<h2 class="text-warning">Services</h2>
				<h3>What`s New?</h3>
				<p>
				<ul>
					<li>Estate Preservation</li>
					<li>Education Funding</li>
					<li>Stock Option Planning</li>
					<li>Retirement Planning</li>
					<li>Insurance Planning</li>
					<li>Cash Flow Management</li>
					<li>Tax Planning</li>
				</ul> 	
				</p>
			</div> --}}
		</div>
    </div>
</div>

@endsection