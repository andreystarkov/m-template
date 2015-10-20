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

    <link rel="stylesheet" href="css/styles.min.css" />

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
                <div class="svg-logo logo-fish">
                <? includeSVG("fish.svg"); ?>
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
        <img src="images/fish/rooms/7W2A1580-1600-large.jpg" class="background-image img-parallax"
        data-parallax='{ "y" : -100, "duration": 200, "rotateY": 15, "scale" : 1.25}' />
    </section>


    <section class="intro section-padding section-gray" id="get-started">
        <div class="container">
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
        <img src="images/fish/food/7W2A1501-1600-large.jpg" class="background-image img-parallax"
         data-parallax='{ "y" : -100, "smoothness": 50, "scale": 1.05, "rotateY": 20}' />
    </section>

    <section id="menu-list-full" class="section-menu-full text-center section-light">
        <div class="container container-menu">
            <div class="row">
                <div class="col-md-4">
                    <article class="menu-post">
                        <figure>
                            <figcaption>
                                <div class="menu-link">
                                    <div class="img-wrap">
                                        <img src="img/sample/1.jpg" />
                                    </div>
                                    <div class="caption">
                                        <div class="menu-buttons">
                                            <div class="menu-btn vkusno" data-toggle="tooltip" data-placement="top" data-original-title="Это произведение искусства можно получить с доставкой на дом! Подробнее на М-Вкусно"><i class="icon ot-icon-dish-spoon"></i></div>
                                            <div  data-toggle="tooltip" data-placement="top" data-original-title="Вам нравится это блюдо!" class="menu-btn sweet"><i class="icon ot-icon-heart"></i></div>
                                        </div>
                                        <span class="price"><i class="icon ot-icon-shopping-cart"></i> 250 р</span>
                                        <b class="name">Крабовый холодец с имбирём</b>
                                        <i class="about">Щупальце каракатицы и соус с элементами коралловых водорослей!</i>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="menu-post">
                        <figure>
                            <figcaption>
                                <div class="menu-link">
                                    <div class="img-wrap">
                                        <img src="img/sample/3.jpg" />
                                    </div>
                                    <div class="caption">
                                        <div class="menu-buttons">
                                            <div class="menu-btn vkusno" data-toggle="tooltip" data-placement="top" data-original-title="Это произведение искусства можно получить с доставкой на дом! Подробнее на М-Вкусно"><i class="icon ot-icon-dish-spoon"></i></div>
                                            <div  data-toggle="tooltip" data-placement="top" data-original-title="Вам нравится это блюдо!" class="menu-btn sweet"><i class="icon ot-icon-heart"></i></div>
                                        </div>
                                        <span class="price"><i class="icon ot-icon-shopping-cart"></i> 250 р</span>
                                        <b class="name">Крабовый холодец с имбирём</b>
                                        <i class="about">И снова всё по новой, щупальце каракатицы и соус с элементами коралловых водорослей!</i>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="menu-post">
                        <figure>
                            <figcaption>
                                <div class="menu-link">
                                    <div class="img-wrap">
                                        <img src="img/sample/2.jpg" />
                                    </div>
                                    <div class="caption">
                                        <div class="menu-buttons">
                                            <div class="menu-btn vkusno" data-toggle="tooltip" data-placement="top" data-original-title="Это произведение искусства можно получить с доставкой на дом! Подробнее на М-Вкусно"><i class="icon ot-icon-dish-spoon"></i></div>
                                            <div  data-toggle="tooltip" data-placement="top" data-original-title="Вам нравится это блюдо!" class="menu-btn sweet"><i class="icon ot-icon-heart"></i></div>
                                        </div>
                                        <span class="price"><i class="icon ot-icon-shopping-cart"></i> 250 р</span>
                                        <b class="name">Крабовый холодец с имбирём</b>
                                        <i class="about">И снова всё по новой, щупальце каракатицы и соус с элементами коралловых водорослей!</i>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <article class="menu-post">
                        <figure>
                            <figcaption>
                                <div class="menu-link">
                                    <div class="img-wrap">
                                        <img src="img/sample/1.jpg" />
                                    </div>
                                    <div class="caption">
                                        <div class="menu-buttons">
                                            <div class="menu-btn vkusno" data-toggle="tooltip" data-placement="top" data-original-title="Это произведение искусства можно получить с доставкой на дом! Подробнее на М-Вкусно"><i class="icon ot-icon-dish-spoon"></i></div>
                                            <div  data-toggle="tooltip" data-placement="top" data-original-title="Вам нравится это блюдо!" class="menu-btn sweet"><i class="icon ot-icon-heart"></i></div>
                                        </div>
                                        <span class="price"><i class="icon ot-icon-shopping-cart"></i> 250 р</span>
                                        <b class="name">Крабовый холодец с имбирём</b>
                                        <i class="about">Щупальце каракатицы и соус с элементами коралловых водорослей!</i>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="menu-post">
                        <figure>
                            <figcaption>
                                <div class="menu-link">
                                    <div class="img-wrap">
                                        <img src="img/sample/2.jpg" />
                                    </div>
                                    <div class="caption">
                                        <div class="menu-buttons">
                                            <div class="menu-btn vkusno" data-toggle="tooltip" data-placement="top" data-original-title="Это произведение искусства можно получить с доставкой на дом! Подробнее на М-Вкусно"><i class="icon ot-icon-dish-spoon"></i></div>
                                            <div  data-toggle="tooltip" data-placement="top" data-original-title="Вам нравится это блюдо!" class="menu-btn sweet"><i class="icon ot-icon-heart"></i></div>
                                        </div>
                                        <span class="price"><i class="icon ot-icon-shopping-cart"></i> 250 р</span>
                                        <b class="name">Крабовый холодец с имбирём</b>
                                        <i class="about">И снова всё по новой, щупальце каракатицы и соус с элементами коралловых водорослей!</i>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="menu-post">
                        <figure>
                            <figcaption>
                                <div class="menu-link">
                                    <div class="img-wrap">
                                        <img src="img/sample/3.jpg" />
                                    </div>
                                    <div class="caption">
                                        <div class="menu-buttons">
                                            <div class="menu-btn vkusno" data-toggle="tooltip" data-placement="top" data-original-title="Это произведение искусства можно получить с доставкой на дом! Подробнее на М-Вкусно"><i class="icon ot-icon-dish-spoon"></i></div>
                                            <div  data-toggle="tooltip" data-placement="top" data-original-title="Вам нравится это блюдо!" class="menu-btn sweet"><i class="icon ot-icon-heart"></i></div>
                                        </div>
                                        <span class="price"><i class="icon ot-icon-shopping-cart"></i> 250 р</span>
                                        <b class="name">Крабовый холодец с имбирём</b>
                                        <i class="about">И снова всё по новой, щупальце каракатицы и соус с элементами коралловых водорослей!</i>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <article class="menu-post">
                        <figure>
                            <figcaption>
                                <div class="menu-link">
                                    <div class="img-wrap">
                                        <img src="img/sample/3.jpg" />
                                    </div>
                                    <div class="caption">
                                        <div class="menu-buttons">
                                            <div class="menu-btn vkusno" data-toggle="tooltip" data-placement="top" data-original-title="Это произведение искусства можно получить с доставкой на дом! Подробнее на М-Вкусно"><i class="icon ot-icon-dish-spoon"></i></div>
                                            <div  data-toggle="tooltip" data-placement="top" data-original-title="Вам нравится это блюдо!" class="menu-btn sweet"><i class="icon ot-icon-heart"></i></div>
                                        </div>
                                        <span class="price"><i class="icon ot-icon-shopping-cart"></i> 250 р</span>
                                        <b class="name">Крабовый холодец с имбирём</b>
                                        <i class="about">Щупальце каракатицы и соус с элементами коралловых водорослей!</i>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="menu-post">
                        <figure>
                            <figcaption>
                                <div class="menu-link">
                                    <div class="img-wrap">
                                        <img src="img/sample/2.jpg" />
                                    </div>
                                    <div class="caption">
                                        <div class="menu-buttons">
                                            <div class="menu-btn vkusno" data-toggle="tooltip" data-placement="top" data-original-title="Это произведение искусства можно получить с доставкой на дом! Подробнее на М-Вкусно"><i class="icon ot-icon-dish-spoon"></i></div>
                                            <div  data-toggle="tooltip" data-placement="top" data-original-title="Вам нравится это блюдо!" class="menu-btn sweet"><i class="icon ot-icon-heart"></i></div>
                                        </div>
                                        <span class="price"><i class="icon ot-icon-shopping-cart"></i> 250 р</span>
                                        <b class="name">Крабовый холодец с имбирём</b>
                                        <i class="about">И снова всё по новой, щупальце каракатицы и соус с элементами коралловых водорослей!</i>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="menu-post">
                        <figure>
                            <figcaption>
                                <div class="menu-link">
                                    <div class="img-wrap">
                                        <img src="img/sample/1.jpg" />
                                    </div>
                                    <div class="caption">
                                        <div class="menu-buttons">
                                            <div class="menu-btn vkusno" data-toggle="tooltip" data-placement="top" data-original-title="Это произведение искусства можно получить с доставкой на дом! Подробнее на М-Вкусно"><i class="icon ot-icon-dish-spoon"></i></div>
                                            <div  data-toggle="tooltip" data-placement="top" data-original-title="Вам нравится это блюдо!" class="menu-btn sweet"><i class="icon ot-icon-heart"></i></div>
                                        </div>
                                        <span class="price"><i class="icon ot-icon-shopping-cart"></i> 250 р</span>
                                        <b class="name">Крабовый холодец с имбирём</b>
                                        <i class="about">И снова всё по новой, щупальце каракатицы и соус с элементами коралловых водорослей!</i>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>


        <div class="container-footer container text-center">
            <button id="btn-more-menu" class="btn btn-ghost btn-accent btn-small btn-more"><span class="icon-plus"></span> Загрузить ещё</button>
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

    <script>
    $(function() {
        function loadMenuSamples(){
            $.post('testing.php', {
                'page': 1,
                'what': 'menu'
            }, function(data) {
                $('#menu-list-full .container-menu').append(data);
            });
        }
        loadMenuSamples();loadMenuSamples();loadMenuSamples();loadMenuSamples();
    });

    </script>
</body>
</html>