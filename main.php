<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Экологически чистый мед</title>
    <link rel="shortcut icon" href="favicon.ico"/>
    <script src="jquery/jquery-2.1.1.js" type="text/javascript"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <style type="text/css">
        div#rotator {position:relative; height:150px; margin-left: 15px;}
        div#rotator ul li {float:left; position:absolute; list-style: none;}
        div#rotator ul li.show {z-index:500;}
    </style>



    <!-- Автор Dylan Wagstaff, http://www.alohatechsupport.net -->
    <script type="text/javascript">

        function theRotator() {
            // Устанавливаем прозрачность всех картинок в 0
            $('div#rotator ul li').css({opacity: 0.0});

            // Берем первую картинку и показываем ее (по пути включаем полную видимость)
            $('div#rotator ul li:first').css({opacity: 1.0});

            // Вызываем функцию rotate для запуска слайдшоу, 3000 = смена картинок происходит раз в 3 секунд
            setInterval('rotate()',3000);
        }

        function rotate() {
            // Берем первую картинку
            var current = ($('div#rotator ul li.show')?  $('div#rotator ul li.show') : $('div#rotator ul li:first'));

            // Берем следующую картинку, когда дойдем до последней начинаем с начала
            var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div#rotator ul li:first') :current.next()) : $('div#rotator ul li:first'));

            // Подключаем эффект растворения/затухания для показа картинок, css-класс show имеет больший z-index
            next.css({opacity: 0.0})
                .addClass('show')
                .animate({opacity: 1.0}, 1000);

            // Прячем текущую картинку
            current.animate({opacity: 0.0}, 1000)
                .removeClass('show');
        };

        $(document).ready(function() {
            // Запускаем слайдшоу
            theRotator();
        });

    </script>
    <body onselectstart="return false" style="margin: 0px">
   <div>
       Хеллоу ворлд!!!
   </div>


   <div id="rotator">
       <ul>
           <li class="show"><a href="http://google.ru/"><img src="images/image-1.jpg"  alt="pic1" /></a></li>
           <li><a href="http://yandex.ru/"><img src="images/image-2.jpg"  alt="pic2" /></a></li>
           <li><a href="http://nigma.ru/"><img src="images/image-3.jpg"  alt="pic3" /></a></li>
       </ul>
   </div>

    </body>
</head>
</html>