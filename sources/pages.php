
<?

    function includeSVG($svg){
        include "img/svg/".$svg;
   }

?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>M-Restorator Tmpl 1</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-title" content="M-Restorator">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <link rel="apple-touch-icon" href="img/ico-72.png">
    <link rel="icon" type="image/png" href="img/ico-32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="img/ico-16.png" sizes="16x16" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic&subset=latin,cyrillic" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="css/styles.css" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>
<body id="top">

        <section class="navigation top-navigation" id="top-navigation">
            <header>
                <div class="header-content">
                     <div class="logo"><a href="#">
                        <img src="img/logo-small.png" />
                     </a></div>
                     <div class="btn-topnav-toggle navicon" id="btn-topnav">
                     <a href="#0" class="cd-3d-nav-trigger">Menu<span></span></a>
                     </div>
                    <div class="header-nav">
                        <nav>
                        <ul class="primary-nav">
                            <li><a href="#">О компании</a></li>
                            <li><a href="#">Новости</a></li>
                            <li><a href="#">Партнеры</a></li>
                            <li><a href="#">Кейтеринг</a></li>
                            <li><a href="#">Доставка</a></li>
                            <li><a href="#">Вакансии</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                        </nav>
                    </div>
                    <div class="navicon">
                        <a class="nav-toggle" href="#"><span></span></a>
                    </div>
                </div>
            </header>
        </section>
    <main>

     <section class="hero header-single background-parallax" id="page-header">
        <div class="container">
            <div class="caption caption-left">
                <div class="svg-logo logo-chetverg">
                <? includeSVG("chetverg.svg"); ?>
                    <div class="description">
                        <p>Горячие пшеничные булочки в плетеной корзиночке, которые можно обмакнуть в пикантный соус из оливкового масла.</p>
                    </div>
                </div>
                <div class="about-icons">
                    <div class="about-item">
                        <i class="icon-clock"></i><span>с 11:00 до 2:00</span>
                        <div class="subscribe">ежедневно</div>
                    </div>
                    <div class="about-item">
                        <i class="icon-call-in"></i><span>40-92-42</span>
                        <div class="subscribe">заказ столов</div>
                    </div>
                </div>
                <div class="btn-go">
                    <a href="#"><span class="pulse-eye icon-arrow-right"></span><i>Подробнее</i></a>
                </div>
            </div>
        </div>
        <div class="down-arrow floating-arrow"><a href="#"><i class="fa fa-angle-down"></i></a></div>
        <div class="overlay"></div>
        <img src="images/chetverg/rooms/7W2A1309-1600-large.JPG" class="background-image img-parallax"
        data-parallax='{"y" : 350,"scale": 1.05, "distance":300}' />
    </section>


    <section class="section-padding section-gray section-content" style="padding: 100px 0" id="section-content">
        <div class="container">
            <h2>Подаваемые блюда отличного качества.</h3>
            <p>Жизнь хороша тогда, когда даже самое обычное занятие приносит радость, покой и умиротворение, когда есть место, где можно отдохнуть после трудовых будней или <b>отметить знаменательное событие</b> с друзьями, когда для того, чтобы немного поднять себе настроение, достаточно всего лишь зайти в уютный ресторан или кафе провести время, ведь, как известно время - самый ценный ресурс в жизни человека и каждую его секунду каждый из нас должен проводить с пользой для себя и своих близких.</p>
            <p>В стремлении предоставить клиентам максимальный выбор и стать одними из лучших, наша компания предлагает вашему вниманию рестораны и кафе расположенные по всему городу и представляющие кухни разных стран мира. Наши заведения стремятся не только вкусно приготовить то или иное блюдо, но и стараются создать атмосферу той страны, к культуре которой это блюдо принадлежит.</p>

            <h3>Несколько тезисов о ресторане</h3>

            <div class="row">
                <div data-wow-duration="0.7s" data-wow-delay="0.4s" class="wow slideInLeft col-md-4 intro-feature">
                    <div class="intro-icon">
                        <span class="svg-box"><? includeSVG("line/heart.svg"); ?></span>
                    </div>
                    <div class="intro-content">
                        <h5>Первоклассный сервис</h5>
                        <p> Спагетти карбонара, каннелони с мясом, феттучини с грибами, тальятелле с креветками – приходите и сами оцените разнообразие итальянского меню.</p>
                    </div>
                </div>
                <div data-wow-duration="0.6s" data-wow-delay="0.2s" class="wow slideInUp col-md-4 intro-feature">
                    <div class="intro-icon">
                        <span class="svg-box"><? includeSVG("line/gift.svg"); ?></span>
                    </div>
                    <div class="intro-content">
                        <h5>Изысканная кухня</h5>
                        <p>Горячие пшеничные булочки в плетеной корзиночке, которые можно обмакнуть в пикантный соус из оливкового масла и бальзамического уксуса,</p>
                    </div>
                </div>
                <div data-wow-duration="0.7s" data-wow-delay="0.4s" class="wow slideInRight col-md-4 intro-feature">
                    <div class="intro-icon">
                        <span class="svg-box"><? includeSVG("line/wine.svg"); ?></span>
                    </div>
                    <div class="intro-content last">
                        <h5>Волшебная атмосфера</h5>
                        <p>А пока гости заведения ждут своих заказов, на заранее сервированных столах появляются приятные и вкусные бонусы.</p>
                    </div>
                </div>
            </div>

            <h3>Несколько тезисов о ресторане</h3>

            <p>Жизнь хороша тогда, когда даже самое обычное занятие приносит радость, покой и умиротворение, когда есть место, где можно отдохнуть после трудовых будней или <b>отметить знаменательное событие</b> с друзьями, когда для того, чтобы немного поднять себе настроение, достаточно всего лишь зайти в уютный ресторан или кафе провести время, ведь, как известно время - самый ценный ресурс в жизни человека и каждую его секунду каждый из нас должен проводить с пользой для себя и своих близких.</p>
            <p>В стремлении предоставить клиентам максимальный выбор и стать одними из лучших, наша компания предлагает вашему вниманию рестораны и кафе расположенные по всему городу и представляющие кухни разных стран мира. Наши заведения стремятся не только вкусно приготовить то или иное блюдо, но и стараются создать атмосферу той страны, к культуре которой это блюдо принадлежит.</p>

            <h4>Фотографии</h4>

            <div class="row gallery flat" id="gallery">
                <a class="col-md-4 item" href="images/chetverg/details/7W2A1305-1900-xlarge.JPG">
                    <img class="img-responsive" src="images/chetverg/details/7W2A1305-350-thumb.JPG" />
                </a>
                <a class="col-md-4 item" href="images/chetverg/details/7W2A1324-1900-xlarge.JPG">
                    <img class="img-responsive" src="images/chetverg/details/7W2A1324-350-thumb.JPG" />
                </a>
                <a class="col-md-4 item" href="images/chetverg/details/7W2A1328-1900-xlarge.JPG">
                    <img class="img-responsive" src="images/chetverg/details/7W2A1328-350-thumb.JPG" />
                </a>
                <a class="col-md-4 item" href="images/chetverg/details/7W2A1346-1900-xlarge.JPG">
                    <img class="img-responsive" src="images/chetverg/details/7W2A1346-350-thumb.JPG" />
                </a>
                <a class="col-md-4 item" href="images/chetverg/rooms/7W2A1309-1900-xlarge.JPG">
                    <img class="img-responsive" src="images/chetverg/rooms/7W2A1309-350-thumb.JPG" />
                </a>
                <a class="col-md-4 item" href="images/chetverg/rooms/7W2A1313-1900-xlarge.JPG">
                    <img class="img-responsive" src="images/chetverg/rooms/7W2A1313-350-thumb.JPG" />
                </a>
            </div>
        </div>
    </section>


    <section class="section-background section-padding background-parallax" style="background-image: url(img/sample/food-1.jpg" id="menu-list-header">
        <div class="container">
            <div class="col-md-6 text-center">
                <h2>Ознакомтесь с нашим невероятным меню</h2>
                <p>Вкуснее только в космосе, а вообще пшеничные булочки в плетеной корзиночке, которые можно обмакнуть в пикантный соус из оливкового масла и бальзамического уксуса,</p>
            </div>
            <div class="col-md-6 text-center">
                <div class="logo-placeholder-big floating-logo logo-background">
                <svg id="icon-fishwine" class="icon-fish" viewBox="0 0 400 400">
                    <use xlink:href="#svg-fishwine" />
                </svg>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
        <img src="images" class="background-image img-parallax"
         data-parallax='{ "y" : -150, "smoothness": 50, "scale": 1.15}' />
    </section>

    <section class="section-padding-bottom section-light sign-up section-form">
        <div class="container">
            <div class="row section-header">
                <div class="col-md-12">
                    <div class="sign"><i  class="svg-box svg-ico icon-title"><? includeSVG("line/mail.svg"); ?></i></div>
                    <h3>Помогите улучшить наш сервис</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12 leftcol description">
                    <h5>Что вы хотели бы изменить?</h5>
                    <p>У каждого из посетителей нашей сети есть свои любимые блюда и свои причины, по которым они ходят к нам, поэтому важно, чтобы в каждом из ресторанов и кафе сети, подаваемые блюда были одинакового, отличного качества.</p>

                </div>
                <div class="col-md-7 col-sm-12 col-xs-12 rightcol">
                    <form class="form-horizontal form-query">
                        <div class="form-group">
                            <label for="inputName" class="col-lg-2 control-label"><span class="icon-user"></span></label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" id="name" placeholder="Как к вам обращаться?">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label"><span class="icon-envelope-letter"></span></label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Как связаться с вами?">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textArea" class="col-lg-2 control-label"><span class="icon-speech"></span></label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" id="textArea"></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-default">Очистить</button>
                                <button type="submit" class="btn btn-primary">Отправить</button>
                            </div>
                        </div>
                    </form>

                    </div>
            </div>
        </div>
    </section>


    <section class="to-top">
        <div class="container">
            <div class="row">
                <div class="to-top-wrap">
                    <a href="#top" class="top"><i class="fa fa-angle-up"></i></a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="footer-links">
                        <ul class="footer-group">
                            <li><a href="#">Карты проезда</a></li>
                            <li><a href="#">Цены</a></li>
                            <li><a href="#">Рестораны</a></li>
                            <li><a href="#">Блюда</a></li>
                            <li><a href="#">Персонал</a></li>
                            <li><a href="#">Мероиятия</a></li>
                        </ul>
                        <p>© 2015 <a href="#">М-Ресторатор</a>
                    </div>
                </div>
                <div class="social-share">
                    <p>Мы в соцсетях</p>
                    <a href="#" class="twitter-share"><i class="fa fa-twitter"></i></a> <a href="#" class="facebook-share"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </footer>
    </main>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/app.min.js"></script>


</body>
</html>