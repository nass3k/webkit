<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webkit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>




<div id="panel"></div>
<div class="header dk-home-header dark  ">
    <div class="container">
        <div class="container-inner">
            <a href="<?= home_url(); ?>" class="logo">
                <svg class="icon">
                    <use xlink:href="/local/templates/itf/assets/icons/sprite.svg#logo"></use>
                </svg>
            </a>

            <nav class="main-nav">




                <a href="local/gulp/build/assets/images/port/b&amp;amp%3Bw.jpg.html" data-badge="" class="link">Портфолио</a>





                <div class="link parent">
                    <span>Услуги</span>
                    <div class="child-items">






                        <a href="services/veb-razrabotka-na-1s-bitriks/index.html" data-badge="" class="link">Веб-разработка</a>





                        <a href="services/razrabotka-prilozheniy/index.html" data-badge="" class="link">Разработка мобильных приложений</a>



                    </div></div>

                <a href="about/index.html" data-badge="4" class="link">Вакансии</a>





                <a href="news/index.html" data-badge="" class="link">Блог</a>





                <a href="contacts/index.html" data-badge="" class="link">Контакты</a>



                <div class="nav-track">
                    <div class="nav-track__active"></div>
                </div>
            </nav>


            <div class="right-side">


                <!--  <div class="language">
                      <span class="active">Ru</span>
                      <span>/</span>
                      <a href="#">En</a>
                  </div>-->

                <div class="email">info@webkit.pw</div>

                <div class="phone">
                    <a href="tel:+7 (999) 027 60 24">+7 (999) 027 60 24</a>
                                    </div>
            </div>
        </div>
    </div>
</div>
<div class="hamburger js-navigation-open">
    <div class="line line-1"></div>
    <div class="line line-2"></div>
    <div class="line line-3"></div>
</div>
<div class="overlay-background"></div>
<div class="overlay-navigation">
    <div class="container narrow">
        <div class="top">

            <div class="left">




                <a class="h1 link animation-element animation-delay-1" href="local/gulp/build/assets/images/port/b&amp;amp%3Bw.jpg.html"><span>Портфолио</span></a>






                <div class="h1 link animation-element animation-delay-2"><span>Услуги</span></div>






                <a href="services/veb-razrabotka-na-1s-bitriks/index.html" class="link-child animation-element animation-delay-5"><span>Веб-разработка</span></a>





                <a href="services/razrabotka-prilozheniy/index.html" class="link-child animation-element animation-delay-5"><span>Разработка мобильных приложений</span></a>





                <a class="h1 link animation-element animation-delay-1" href="about/index.html"><span>Вакансии</span></a>





                <a class="h1 link animation-element animation-delay-1" href="news/index.html"><span>Блог</span></a>





                <a class="h1 link animation-element animation-delay-1" href="contacts/index.html"><span>Контакты</span></a>





            </div>


            <div class="right">
                <div class="feedback-button js-feedback-open">
                    <span class="button-text">Оставить заявку</span>
                </div>
            </div>
        </div>
        <div class="bottom animation-element animation-delay-10">

            <div>
                <a href="tel:tel:+7 (999) 027 60 24"> tel:+7 (999) 027 60 24                </a>
            </div>
            <div>
                <a href="mailto:info@webkit.pw">
                    info@webkit.pw                </a>
            </div>
            <div>
                Санкт-Петербург, ул. Белы Куна, 32
            </div>

<!--            <div>-->
<!--                <div class="language">-->
<!--                     <span class="active">Ru</span>-->
<!--                     <span>/</span>-->
<!--                     <a href="#">En</a>-->
<!--                 </div>-->
<!--            </div>-->
            <div class="social-links">

                <a class="link" href="https://api.whatsapp.com/send/?phone=79990276024&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C+%D0%9D%D0%B8%D0%BA%D0%B8%D1%82%D0%B0%21+%D0%A3+%D0%BC%D0%B5%D0%BD%D1%8F+%D0%B5%D1%81%D1%82%D1%8C+%D0%B2%D0%BE%D0%BF%D1%80%D0%BE%D1%81%D1%8B+%D0%BF%D0%BE+%D0%B2%D0%B5%D0%B1-%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B5." target="_blank">

                    <img src="<?= get_template_directory_uri(); ?>/assets/img/wa.png" alt="" class="icon whatsapp">
                </a>
            </div>
        </div>
    </div>
</div>

