@extends('main')

@section('index_page')

<div class="content"><p><h4>Какие есть версии Laravel?
Ларавел насчитывает 3 версии:
V3
V4
V5
На данный момент, большинство программистов уже перешло на пятую версию этого фреймворка и их количество с каждым днем растет.
Системные требования и хостинг для PHP Laravel
Для того, чтобы ваш сайт на этом фреймворке работал корректно, необходимо, чтобы на хостинге было установлено, как минимум:
PHP >= 5.5.9
PDO расширение для PHP (для версии 5.1+)
MCrypt расширение для PHP (для версии 5.0)
OpenSSL (расширение для PHP)
Mbstring (расширение для PHP)
Tokenizer (расширение для PHP)
Json (расширение для PHP)
MySQL или MariaDB 5й версии и выше
Стоит отметить, что это не конечный список. Если вы используете дополнительные модули или плагины, у них могут быть свои требования. Мы рекомендуем добавить к этому списку следующие:
cURL
Акселератор (APC, opCache)
ionCube 
наличие SSH
Какой тип хостинга подойдет для Ларавел?
На самом деле, CMF Laravel довольно неприхотлив и для него подойдет любой вид хостинга:
Виртуальный
VPS
Выделенный сервер
Многое зависит от того, что за проект у вас на нем разработан, объем данных (файлов и базы), а так же посещаемости. Если у вас небольшой сайт - мы рекомендуем взять обычный хостинг. Если посещаемость более 1000 человек в сутки - смотрите в сторону VPS. А когда не будет хватать ресурсов самого можного VPS - значит ваш проект уже вырос и ему нужен выделенный сервер.
Установка фреймворка на хостинг
В Интернете множество подробных инструкций по установке. Имеется 2 способа установки этого фреймворка:
Воспользоваться установщиком с помощью Composer. Достаточно его скачать и выполнить команду 'php composer global require "laravel/installer"' и последняя версия фреймворка будет уже установлена
Скачать последнию версию из официального репозитория gitgub
Мы рекомендуем первый вариант и пользоваться им в дальнейшем, т.к. будет легче управлять зависимости, обновлять фреймворк и даже устанавливать дополнительные модули. Подробный мануал по установке Laravel вы найдете на официальном сайте.
А если у вас возникнут трудности с установкой - наши специалисты окажут помощь оперативно и установят и настроят вам Laravel бесплатно.
Перенос сайта на Laraverl на другой хостинг
Если у вас есть последняя версия сайта в git, то сделать это проще простого. В обратном случае, вам нужно заархивировать все файлы сайта и сделать полный дамп базы.
Далее, создаете базу на новом хостинге и импортируете дамп. После чего необходимо залить архив с файлами на новый сервер и распаковать его. Папка "public" в директории проекта, должна являться document_root вашего сайта. Поэтому перенести сайт на CMF Laravel довольно просто.
Не смотря на то, что Laravel довольно легкий фреймворк - когда Ваш проект заметно вырастит, потребуется аренда мощного сервера, который вы можете заказать у нас с бесплатным администрированием. Мы подготовим Ваш сервер к эффективной и комфортной работе.
Если же у вас возникли трудности, то наши квалифицированные специалисты с удовольствием помогут вам с переносом абсолютно бесплатно и в любое время.</h4></p></div>

	

@endsection