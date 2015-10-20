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

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic&subset=latin,cyrillic" />

    <link rel="stylesheet" href="css/styles.css" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>
<body id="top">

    <nav class="cd-3d-nav-container">
        <ul class="cd-3d-nav">
            <li class="cd-selected"><a href="#1"></a</li>
            <li><a href="#2"></a></li>
            <li><a href="#3"></a></li>
            <li><a href="#4"></a></li>
            <li><a href="#5"></a></li>
        </ul>
        <span class="cd-marker color-1"></span>
    </nav>

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
    <section class="cd-hero" id="top-slider">
        <ul class="cd-hero-slider autoplay">
            <li class="selected first-slide" style="background-image:url(images/fish/rooms/7W2A1569-1600-large.jpg">
                <div class="overlay"></div>
                <div class="slider-content slider-content-full">
                    <div class="caption svg-logo logo-m" id="logo-m">
                        <? includeSVG("mrestorator.svg"); ?>
                            <div class="description">
                                <p>Горячие пшеничные булочки в плетеной корзиночке, которые соус из оливкового масла.</p>
                            </div>
                            <div class="btn-go" style="margin:70px auto">
                                <a href="#get-started"><span class="down-arrow floating-arrow fa fa-angle-down"></span></a>
                            </div>
                    </div>
                </div>
            </li>

            <li class="cd-bg-video" style="background-image:url(images/smoke/rooms/7W2A1385-1600-large.jpg">
                <div class="overlay"></div>
                <div class="slider-content slider-content-full">
                    <div class="caption caption-left">
                        <div class="svg-logo logo-grill">
                        <? includeSVG("grill.svg"); ?>
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
                <div class="cd-bg-video-wrapper" data-video="video/grill">
                </div>
            </li>

            <li class="cd-bg-video" style="background-image:url(images/fish/rooms/7W2A1569-1600-large.jpg">
                <div class="overlay"></div>
                <div class="slider-content slider-content-full">
                    <div class="caption caption-left">
                        <div class="svg-logo logo-trefol">
                        <? includeSVG("trefol.svg"); ?>
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
                <div class="cd-bg-video-wrapper" data-video="video/trefol"></div>
            </li>


            <li class="cd-bg-video" style="background-image:url(images/fish/rooms/7W2A1569-1600-large.jpg">
                <div class="overlay"></div>
                <div class="slider-content slider-content-full">
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
                <div class="cd-bg-video-wrapper" data-video="video/fish">
                </div>
            </li>
            <li style="background-image:url(images/chetverg/rooms/7W2A1309-1600-large.JPG">
                <div class="overlay"></div>
                <div class="slider-content slider-content-full">
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
            </li>
            <li style="background-image:url(images/comfort/rooms/7W2A1622-1600-large.jpg">
                <div class="overlay"></div>
                <div class="slider-content slider-content-full">
                    <div class="caption caption-left">
                        <div class="svg-logo logo-comfort">
                        <? includeSVG("comfort.svg"); ?>
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
                    <div class="down-arrow btn-go"><a href="#section-content"><span class="icon-magnifier"></span></a></div>
                </div>
            </li>
            <li class="cd-bg-video" style="background-image:url(images/fish/rooms/7W2A1569-1600-large.jpg">
                <div class="overlay"></div>
                <div class="slider-content slider-content-full">
                    <div class="caption caption-left">
                        <div class="svg-logo logo-grill">
                        <? includeSVG("mamamo.svg"); ?>
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
                <div class="cd-bg-video-wrapper" data-video="video/mamamo">
                </div>
            </li>

            <li style="background-image:url(images/chetverg/details/7W2A1324-1600-large.JPG)">
                <div class="overlay"></div>
                <div class="slider-content slider-content-full">
                    <div class="caption caption-left">
                        <div class="svg-logo logo-shale">
                        <? includeSVG("shale.svg"); ?>
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
            </li>
            <li class="cd-bg-video" style="background-image:url(images/fish/rooms/7W2A1569-1600-large.jpg">
                <div class="overlay"></div>
                <div class="slider-content slider-content-full">
                    <div class="caption caption-left">
                        <div class="svg-logo logo-smoke">
                        <? includeSVG("smoke.svg"); ?>
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
                <div class="cd-bg-video-wrapper" data-video="video/vostokh">
                </div>
            </li>
            <li style="background-image:url(images/fish/details/7W2A1524-1600-large.jpg">
                <div class="overlay"></div>
                <div class="slider-content slider-content-full">
                    <div class="caption caption-left">
                        <div class="svg-logo logo-shale">
                        <? includeSVG("ratatui.svg"); ?>
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

            </li>

        </ul> <!-- .cd-hero-slider -->

        <div class="cd-slider-nav">
            <nav>
                <span class="cd-marker item-1"></span>
                <ul class="sub-list">
                    <li id="nav-intro" style="width:1%" class="selected"><a href="#0">
                        <i class="fa fa-prev"></i>
                    </a></li>
                    <li id="nav-grill"><a href="#0">
                    <div class="svg-container" id="icon-grill">
                        <? includeSVG("grill.svg"); ?>
                    </div>
                    </a></li>
                    <li id="nav-trefol"><a href="#0">
                    <div class="svg-container" id="icon-trefol">
                        <? includeSVG("trefol.svg"); ?>
                    </div>
                    </a></li>
                    <li id="nav-fish"><a href="#0">
                    <div class="svg-container" id="icon-fish">
                        <? includeSVG("fish.svg"); ?>
                    </div>
                    </a></li>
                    <li id="nav-chetverg"><a href="#0">
                    <div class="svg-container" id="icon-chetverg">
                        <? includeSVG("chetverg.svg"); ?>
                    </div>
                    </a></li>
                    <li id="nav-comfort"><a href="#0">
                    <div class="svg-container" id="icon-comfort">
                        <? includeSVG("comfort.svg"); ?>
                    </div>
                    </a></li>
                    <li  id="nav-mamamo"><a href="#0">
                    <div class="svg-container" id="icon-mamamo">
                        <? includeSVG("mamamo.svg"); ?>
                    </div>
                    </a></li>
                    <li id="nav-shale"><a href="#0">
                    <div class="svg-container" id="icon-shale">
                        <? includeSVG("shale.svg"); ?>
                    </div>
                    </a></li>
                    <li s id="nav-smoke"><a href="#0">
                    <div class="svg-container" id="icon-smoke">
                        <? includeSVG("smoke.svg"); ?>
                    </div>
                    </a></li>
                    <li id="nav-ratatui"><a href="#0">
                    <div class="svg-container" id="icon-ratatui">
                        <? includeSVG("ratatui.svg"); ?>
                    </div>
                    </a></li>
                </ul>
            </nav>
        </div>
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
    <section class="section-background section-padding background-parallax" id="menu-list-header">
        <div class="container">
            <div class="col-md-6 text-center">
                <h2>Великолепная возможность</h2>
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
         data-parallax='{ "y" : -150, "smoothness": 50, "scale": 1.15}' />
    </section>


    <section id="news-feed" class="blog text-center section-padding section-light">
        <div class="container-fluid container-news" id="news-trigger">
            <div class="row section-header">
                <div class="col-md-12">
                    <div class="sign"><i  data-wow-duration="0.6s" data-wow-delay="0.2s" class="wow bounceInUp svg-box svg-ico icon-title"><? includeSVG("line/news.svg"); ?></i></div>
                    <h3>Новости и события компании</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/blog-img-01.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/sample/3.jpg" class="single_image" />
                                </div>
                            </a>
                            <figcaption>
                            <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Виды прожарки и другие истории</a></h2>
                            <p><a href="#" class="blog-post-title">Сегодня, у многих успешно развивающихся компаний при проведении презентаций. А приехать готовить еду чужим людям сложнее вдвойне. <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/blog-img-02.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/sample/1.jpg" />
                                </div>
                            </a>
                            <figcaption>
                            <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">"Истории одного ресторана или двух"</a></h2>
                            <p><a href="#" class="blog-post-title">Горячие пшеничные булочки в плетеной корзиночке, которые можно
                            обмакнуть в пикантный соус из оливкового масла и бальзамического уксуса, Переехать в другую страну сложно.
                            <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/blog-img-03.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/sample/2.jpg" />
                                </div>
                            </a>
                            <figcaption>
                            <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Итальянская пицца</a></h2>
                            <p><a href="#" class="blog-post-title">В «М-Рестораторе» вы можете заказать настоящую итальянскую пиццу которые можно
                            обмакнуть в пикантный соус из оливкового масла и бальзамического уксуса<i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/blog-img-01.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/sample/1.jpg" />
                                </div>
                            </a>
                            <figcaption>
                            <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Виды прожарки</a></h2>
                            <p><a href="#" class="blog-post-title">Сегодня, у многих успешно развивающихся компаний при проведении презентаций. <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/blog-img-02.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/sample/2.jpg" />
                                </div>
                            </a>
                            <figcaption>
                            <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">"Истории одного ресторана"</a></h2>
                            <p><a href="#" class="blog-post-title">Переехать в другую страну сложно. А приехать готовить еду чужим людям сложнее вдвойне.<i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/blog-img-03.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/sample/3.jpg" class="single_image" />
                                </div>
                            </a>
                            <figcaption>
                            <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Итальянская пицца</a></h2>
                            <p><a href="#" class="blog-post-title">В «М-Рестораторе» вы можете заказать настоящую итальянскую пиццу<i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
         </div>
        <div class="row">
            <div class="col-md-4">
            <button class="btn btn-ghost btn-accent btn-small btn-more disabled"><span class="icon-clock"></span> Архив</button>
            </div>
            <div class="col-md-4 text-center">
            <button id="btn-more-news" class="btn btn-ghost btn-accent btn-small btn-more"><span class="icon-plus"></span> Загрузить ещё</button>
            </div>
            <div class="col-md-4">
            <button class="btn btn-ghost btn-accent btn-small btn-more disabled"><span class="icon-newspaper"></span> Журнал</button>
            </div>
        </div>
    </section>

    <section class="section-background section-info-light section-padding section-info" id="instagram-header">
        <div class="container">
            <div class="col-md-6 text-center">
                <h2>Мы в социальных сетях</h2>
                <p>Будте в курсе новостей ресторана в режиме онлайн. Ниже наша инстаграмм-лента, самые свежие события из первых рук.</p>
                <div class="text-center">
                    <a href="#" class="social-button">
                        <span class="fa fa-facebook tip" title="Группа в фейсбуке"></span>
                    </a>
                    <a href="#" class="social-button">
                        <span class="fa fa-vk tip" title="Сообщество вконтакте"></span>
                    </a>
                    <a href="#" class="social-button">
                        <span class="fa fa-instagram tip" title="Инстаграм"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="logo-placeholder svg-drawing floating-logo logo-background">
                    <? includeSVG("line/camera.svg"); ?>
                 <div class="down-arrow floating-arrow"><a href="#recent"><span class="fa fa-angle-down"></span></a></div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <section class="section-padding instagram-feed section-gray" id="instagram-recent" style="padding-bottom:120px">
        <div class="row" style="text-align:center">
          <div class="col-xs-12">
            <div id="recent" class="well well-sm"></div>
          </div>
        </div>
    </section>

    <section class="section-padding-bottom section-light sign-up section-form">
        <div class="container">
            <div class="row section-header">
                <div class="col-md-12">
                    <div class="sign"><i  data-wow-duration="0.6s" data-wow-delay="0.2s" class="wow bounceInUp svg-box svg-ico icon-title"><? includeSVG("line/mail.svg"); ?></i></div>
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

   <section class="testimonial-slider section-padding text-center" id="slider-partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="avatar"><img src="img/partners/fro.jpg"></div>
                                <h2>Федерация Рестораторов и Отельеров (ФРиО)</h2>
                                <p class="author">Барменская Ассоциация Екатеринбурга (БАЕ) была организована в 2002г. БАЕ является официальным представителем Российской Ассоциации Барменов (БАР) и единственной в
                                городе организацией, объединяющей барменов и официантов, зарегистрированной на международном уровне.</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/partners/dae.jpg"></div>
                                <h2>Барменская Ассоциация Екатеринбурга</h2>
                                <p class="author">Шеф-повар гастрономического кафе «Четверг» мог бы легко обыграть любую итальянку в познаниях рецептур</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/partners/1.jpg"></div>
                                <h2>Центр коммуникативных технологий Дегтярева</h2>
                                <p class="author">«Центр коммуникативных технологий Дегтярева» основан в 2000 году. Основные тренинги и мастер-классы: Навыки эффективных бизнес-коммуникаций. Искусство убеждения. Технологии эффективных переговоров. Техника профессиональных продаж</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/partners/metro.jpg"></div>
                                <h2>МЕТРО Кэш энд Керри</h2>
                                <p class="author">«Центр коммуникативных технологий Дегтярева» основан в 2000 году. Основные тренинги и мастер-классы: Навыки эффективных бизнес-коммуникаций. Искусство убеждения. Технологии эффективных переговоров. Техника профессиональных продаж</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/partners/2.jpg"></div>
                                <h2>Группа компаний «Бирюзовый чай»</h2>
                                <p class="author">разработка концепций, решений и полное чайное обеспечение ресторанного бизнеса; организация чаепитий и дегустаций; создание гастрономических композиций на основе чая; создание коллекций чая и чайной посуды; обучение персонала.
                                Интернет-магазин: www.teaexpress.ru</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/partners/1.jpg"></div>
                                <h2>«Центр коммуникативных технологий Дегтярева»</h2>
                                <p class="author">«Центр коммуникативных технологий Дегтярева» основан в 2000 году. Основные тренинги и мастер-классы: Навыки эффективных бизнес-коммуникаций. Искусство убеждения. Технологии эффективных переговоров. Техника профессиональных продаж</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding section-light sign-up section-form">
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 leftcol description">
                    <h5>Войдите в систему</h5>
                    <p>У каждого из посетителей нашей сети есть свои любимые блюда и свои причины, по которым они ходят к нам, поэтому важно, чтобы в каждом из ресторанов и кафе сети, подаваемые блюда были одинакового, отличного качества.</p>

                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 rightcol">
                    <form class="signup-form" action="#" method="POST" role="form" style="width:75%; margin: 0 auto">
                        <div class="form-input-group">
                            <i class="fa fa-user"></i><input type="text" class="" placeholder="Логин" required>
                        </div>
                        <div class="form-input-group">
                            <i class="fa fa-user"></i><input type="text" class="" placeholder="Логин" required>
                        </div>
                        <button type="submit" class="btn btn-fill btn-ghost btn-lg sign-up-btn">Войти</button>
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