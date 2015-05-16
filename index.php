<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Кухни на заказ</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/flexslider.css" type="text/css">
                
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/script.js"></script>
        <script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-59762704-1', 'auto');
			ga('send', 'pageview');
		</script>
    </head>
    <body>
        <div class="wrapper">
            <div class="sheet">
                <header class="header">
                    <div class="header_left"><a href="index.php">Кухни "под ключ"</a></div>
                    <div class="header_center"><img src="img/phone.png" align="left" vspace="3">+38 (095) 77-30-120</div>
                    <div class="header_right">
                        <ul id="nav">
                            <li class="button"><a href="gallery.php">Галерея работ</a></li>
                        </ul>
                    </div>
                </header>
            </div><br>
            <div class="sheet">
                <div class="container">
                    <h1>Кухни на заказ по индивидуальным проектам</h1>
                    <h3>Харьков и харьковская область (до 10 км)</h3>
                    <div class="flexslider">
                        <ul class="slides">
                            <li><img src="img/5.jpg"></li>
                            <li><img src="img/1.jpg"></li>
                            <li><img src="img/2.jpg"></li>
                            <li><img src="img/3.jpg"></li>
                            <li><img src="img/4.jpg"></li>
                        </ul>
                    </div>
                </div>
                <div><img src="img/information.png"></div>
                <div class="wrapper2">
                    <div class="form">
                        <div class="messegeResult">
                            <p> Оставьте ваши контакты и наш консультант свяжется с вами </p>
                        </div>
                        <form method="POST" action="" id="formMain">
                            <input id="user_name" type="text" name="user_name" placeholder="Введите ваше имя" autocomplete="off" >
                            <input id="user_telephone" type="text" name="user_telephone" placeholder="Введите ваш телефон" autocomplete="off" >
                            <input id="sbt_button" type="button"  value="Заказать обратный звонок">
                        </form>
                    </div>
                </div>
                
                <div class="info"><img src="img/information2.png"></div>                
                
                <!--VK Widget--> 
                <div id="vk_groups"></div>
                <script type="text/javascript">VK.Widgets.Group("vk_groups", {mode: 0, width: "350", height: "300", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 79846921);</script>
            </div><br>
            <div class="sheet">
                <footer class="footer">
                    <div class="footer_left">
                        Срок изготовления 30 календарных дней</br></br>
                        Мы работаем:</br>                                                 
                        пн.- пт. с 9 до 20</br>
                        сб. с 10 до 17</br>
                        вс. выходной</br>
                    </div>
                    <div class="footer_center">
                        <br><br>тел.: &nbsp;&nbsp;&nbsp;+38 (095) 77-30-120</br>e-mail: sael.seal@gmail.com</br>г. Харьков
                    </div>
                    <div class="footer_right"><a href="http://www.blum.com/ua/ru/" target="_blank"><img src="img/logo_blum.png"></a></div>
                </footer>
            </div>
        </div>
    </body>
</html>
