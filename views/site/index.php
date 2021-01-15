<?php

/* @var $this yii\web\View */

$this->title = 'Ростов-авто';
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyD_tAQD36pKp9v4at5AnpGbvBUsLCOSJx8"></script>

<?php $this->title ='Ростов-авто'; ?>
<section id="hello" class="home bg-mega">
                <div class="overlay" style="height: 760px">   
                </div>
                <div class="container">
                    <div class="row">
                        <div class="main_home" >
                            <div class="home_text">
                                <h1 class="text-white">МЫ РАДЫ<br />ПОПРИВЕТСТВОВАТЬ ВАС</h1>
                            </div>
                            <div class="home_btns m-top-40">
                                <a href="#about" target="_self" class="btn btn-primary m-top-20">Узнать больше</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
<section id="about" class="about roomy-100" >
                <div class="container">
                    <div class="row">
                        <div class="main_about">
                            <div class="col-md-6">
                                <div class="about_content">
                                    <h2>О нас</h2>
                                    <div class="separator_left"></div>
                                    <div class="text-main">
                                    <p >Регулярное обновление автопарка позволяет поддерживать
                                     качество обслуживания пассажиров на должном уровне, постоянно
                                      повышать комфорт перевозок, а также увеличивать их объём.
                                      В 2018 году было завершено масштабное обновление автопарка. Так, в рамках программы
                                       Правительства Ростовской области в IV квартале 2017 г. – I квартале 2018 года в автопарк
                                        Ростов-Авто поступило 1 758 новых автобусов (ЛиАЗ 5250 «Вояж» – 540 ед., Газель NEXT – 900 ед.
                                        , ЛиАЗ 5292-60 – 75 ед., ПАЗ Вектор NEXT – 243 ед.). Все автобусы адаптированы для проезда людей с 
                                        ограниченными возможностями здоровья и оснащены кондиционерами. Новые автобусы вышли на маршруты
                                         во всех районах Ростова-на-Дону.
                                        Все машины оборудованы спутниковой системой ГЛОНАСС и тревожной кнопкой.  Экологический класс двигателей:
                                         Евро-4 и Евро-5.  </p>
                                    </div>                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about_accordion wow fadeIn">
                                    <div id="faq_main_content" class="faq_main_content">
                                        <br>
                                        <h6><i class="fa fa-angle-right"></i> ЭКОЛОГИЧЕСКИ ЧИСТО </h6>
                                        <div>
                                            <div class="content">
                                                <p>Экологичные автомобили минимизируют до предела все выбросы в окружающую 
                                                    среду. Современные инженерные идеи, реализованные «в металле» и используемые 
                                                    на дорогах, знакомы многим, например, в виде общественного транспорта.
                                                </p>
                                            </div>
                                        </div> 
                                        <br>
                                        <h6 class="open"><i class="fa fa-angle-right"></i> ОПЫТНАЯ КОМАНДА</h6>
                                        <div class="open">
                                            <div class="content">
                                                <p>В 22 эксплуатационных филиалах предприятия трудятся около 17 000 человек, 
                                                сотрудники обеспечены стабильной заработной платой и полноценным оплачиваемым
                                                 отпуском. Иногородним работникам предоставляется общежитие. </p>
                                            </div>
                                        </div>                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <br />
                <section id="video" class="video" style="height: 500px;">
                <div class="overlay"></div>
                <div class="main_video roomy-100 m-top-100 m-bottom-100 text-center">
                    <div class="video_text text-center">
                        <a class="lightbox" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="video-link"><span class="fa fa-play"></span></a>
                    </div>
                </div>
            </section>                   
            </section> 
             <section id="portfolio" class="portfolio lightbg">
                <div class="container">
                    <div class="row">
                        <div class="main_portfolio roomy-100">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="head_title text-center">
                                    <h2>Наши сотрудники</h2>
                                    <div class="separator_auto"></div>
                                    <p>Мы гордимся своей кадровой политикой и стремимся сделать ее еще лучше. По мнению наших сотрудников, благодаря корпоративной культуре, основанной на формировании международных команд, и нашей приверженности к совершенствованию бизнеса и улучшению мира компания Ростов-Авто является одной из лучших компаний, открывающей перед персоналом широкие карьерные возможности. </p>
                                </div>
                            </div>
                            <div class="pict1 col-md-12" style="text-align: center"> 
                                    <b>Начальник цеха</b>
                                    <br>
                                    <img src="img/worker2.png" class="Kadirov">
                            </div>
                                               
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section id="maps">
            <div class="main_maps text-center fix">
                <div class= "overlay">
                </div>
                <div class="maps_text">
                    <h3 class="" onclick="showmap()">Найти нас<i class="fa fa-angle-down"></i></h3>
                    <div id="map_canvas" class="mapheight"></div>
            </div>
</div>
</section>
<script>
    $(document).ready(function(){
        $('a[href^="#"], *[data-href^="#"]').on('click', function(e){
            e.preventDefault();
            var t = 800;
            var d = $(this).attr('data-href') ? $(this).attr('data-href') : $(this).attr('href');
            $('html,body').stop().animate({ scrollTop: $(d).offset().top }, t);
        });
    });
</script>
   <script>
                            function showmap() {
                                var mapOptions = {
                                    zoom: 14,
                                    scrollwheel: false,
                                    center: new google.maps.LatLng(47.231300, 39.723300),
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                };
                                var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
                                $('.mapheight').css('height', '350');
                                $('.maps_text h3').hide();
                            }

            </script>
             <script>
            $('a.lightbox2').divbox({width:600, height:400, caption: false});
        </script>