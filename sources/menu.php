<? include "../_/functions.php";
   head();
?>
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

    <img src="img/photos" class="background-image img-parallax"
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
<img srcset="img/photos/grill/rooms/1-tiny.jpg 320w, img/photos/grill/rooms/1-xsmall.jpg 480w, img/photos/grill/rooms/1-small.jpg 640w, img/photos/grill/rooms/1-medium.jpg w768, img/photos/grill/rooms/1-medium.jpg 1024w, img/photos/grill/rooms/1-laptop.jpg 1200w, img/photos/grill/rooms/1-large.jpg 1400w, img/photos/grill/rooms/1-xlarge.jpg 1600w, img/photos/grill/rooms/1-full.jpg w1900" class="background-image img-parallax" data-parallax="{ 'y': -100, 'smoothness': 50, 'scale': 1.05, 'rotateY': 20}">
</section>

<section id="menu-list" class="blog section-menu text-center section-light">
    <div class="container container-menu target-box">
        <div class="row section-header">
            <div class="col-md-12">
                <div class="sign"><i class="svg-box svg-ico icon-title"><? includeSVG("line/news.svg"); ?></i></div>
                <h3>Меню ресторана</h3>
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
                                <span class="price">250 Р.</span>
                                <b class="name">Тунец по-невероятно космическому</b>
                                <i class="about">Мясо краба, зелень, печень трески и многое другое, веселое!</i>
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
                                <b class="name">Крабовый холодец с имбирём</b>
                                <i class="about">И снова всё по новой, щупальце каракатицы и соус с элементами коралловых водорослей!</i>
                                <span class="price">750 Р.</span>
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
                                <b class="name">Крабовый холодец с имбирём</b>
                                <i class="about">И снова всё по новой, щупальце каракатицы и соус с элементами коралловых водорослей!</i>
                                <span class="price">750 Р.</span>
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

<section class="section-padding-bottom section-gray sign-up section-form">
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


<? foot(); ?>