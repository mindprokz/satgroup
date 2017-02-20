<!DOCTYPE html>
<html lang="RU-ru">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="Keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="i<?php echo get_template_directory_uri();?>/mg/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri();?>/img/favicon/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/fancybox/source/jquery.fancybox.css">
  </head>
  <body>
    <header id="menu">
      <div class="container"><a href="#main" class="anchor"><img src="<?php echo get_template_directory_uri();?>/images/logo_small.png" id="logo_small"></a><a href="#main" class="anchor"><img src="<?php echo get_template_directory_uri();?>/images/logo_mobile.png" id="logo_mobile"></a><a href="#main" class="anchor"><img src="<?php echo get_template_directory_uri();?>/images/logo_big.png" id="logo_big"></a>
        <nav><a href="#about" class="anchor">Біз туралы</a><a href="#rests" class="anchor">Мейрамханалар</a>
          <!--a(href="#").anchor События-->
          <!--a(href="#").anchor Партнеры--><a href="#contact" class="anchor">Орналасқан жері</a>
        </nav>
        <div class="lang"><a href="http://eng.satgroup.kz">EN</a><a href="http://satgroup.kz">RU</a><a href="http://kz.satgroup.kz">KZ</a></div>
        <div class="social"><a href="https://www.instagram.com/satgrouprest/" target="_blank" class="inst"></a><a href="https://www.facebook.com/SAT-GROUP-Rest-1823563401189352/?hc_ref=SEARCH&amp;fref=nf" target="_blank" class="facebook"></a><a href="mailto:info@satgroup.kz" class="mail"></a></div>
        <div class="burger"></div>
      </div>
    </header>
    <?php
      $args = array(
        'post_type' => 'stocks', //Тип поста
        'posts_per_page' => 10,//Постов на одной странице
        'category_name' => 'uncategorized' //Категория постов
      );
      $lastBlog = new WP_Query($args);
    ?>
    <div id="first-slider" class="flex-container container-float"><a name="main"></a>
      <div class="flexslider">
        <div class="slides">
          <?php
          if( $lastBlog->have_posts() ):
            while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
          <li>
            <picture>
              <source srcset="<?php echo(types_render_field( 'mobile_stock', array('raw' => true) ) ); ?>" media="(max-width:750px)">
              <source srcset="<?php echo(types_render_field( 'verttablet_stock', array('raw' => true) ) ); ?>" media="(max-width:970px)">
              <source srcset="<?php echo(types_render_field( 'tablet_stock', array('raw' => true) ) ); ?>" media="(max-width:1170px)">
              <source srcset="<?php echo(types_render_field( 'desktop_stock', array('raw' => true) ) ); ?>" media="(max-width:1980px)"><img src="<?php echo(types_render_field( 'desktop_stock', array('raw' => true) ) ); ?>">
            </picture>
          </li><?
            endwhile;
          endif; ?>
        </div>
      </div>
    </div>
    <section id="logos">
      <div class="container"><a href="#Gramm" class="anchor"><img src="<?php echo get_template_directory_uri();?>/images/Gramm.png"></a><a href="#Brew" class="anchor"><img src="<?php echo get_template_directory_uri();?>/images/Brew.png"></a><a href="#Arnau" class="anchor"><img src="<?php echo get_template_directory_uri();?>/images/arnau.png"></a><a href="#Kiku" class="anchor"><img src="<?php echo get_template_directory_uri();?>/images/Kiku.png"></a><a href="#Sunduk" class="anchor"><img src="<?php echo get_template_directory_uri();?>/images/Sunduk.png"></a><a href="#Butchers" class="anchor"><img src="<?php echo get_template_directory_uri();?>/images/Butchers.png"></a><a href="#Buno" class="anchor"><img src="<?php echo get_template_directory_uri();?>/images/buno.png"></a></div>
    </section>
    <section id="quote"><a name="about"></a>
      <div class="container">
        <div class="quote_visible">
          <div class="wrap"><img src="<?php echo get_template_directory_uri();?>/images/spoon.png" class="spoon"></div>
          <p><b>«SAT Group restaurants»</b> - премиум-сегменттегі танымал мекемелердің біріне айналған Астана қаласындағы мейрамханалар желісі. Сол жағалаудың дәл ортасында, бір-біріне жақын, әр түрлі бағыттағы 7 мейрамхана орналасқан, олардың ортақ мақсаты – тіпті ең талғампаз деген қонақтың көңілінен шығу. 2013 жылдан бері Fitness Palace клубы ғимаратындағы премиум-класты 4 мейрамхана көпшілікке танылып үлгерді: <b>GRAMMY</b> караоке-мейрамханасы, <b>ARNAU</b> ұлттық мейрамханасы, жеке сыра қайнататын орны бар <b>BREWERY</b> мейрамханасы, <b>KIKU MATSURI</b> жапон мейрамханасы. 2016 жылдың соңында Arnau Premium тұрғын үй кешенінде орналасқан 3 жаңа концептуалдық мекеме өз есігін айқара ашты: <b>BUTCHER’S</b> гастропабы, <b>SUNDUK</b> шығыс мейрамханасы, <b>BUNO</b> кофеханасы</p>
        </div>
      </div>
    </section><a name="rests"></a>
    <!-- RESTOURANTS-->
    <sections class="restourant dark"><a name="Gramm"></a>
      <div class="poster"><img src="<?php echo get_template_directory_uri();?>/images/grammy_bg.jpg">
        <h3>караоке - мейрамханасы</h3>
      </div>
      <div class="info">
        <div class="wrap"><img src="<?php echo get_template_directory_uri();?>/images/grammy_site.png">
          <p>Tағамдар: еуропа, паназиялық, жапондық<br>Жұмыс уақыты: күнделікті 18:00-06:00<br>Мекен жайы: Астана қ., Тұран даңғ., 30 (Fitness Palace кешені)<br>Тел.: +7(7172) 279-000, 8 701 100 0703</p><a href="#" class="button">Толығырақ</a>
        </div>
      </div>
    </sections>
    <sections class="restourant middle"><a name="Brew"></a>
      <div class="poster"><img src="<?php echo get_template_directory_uri();?>/images/brew_bg.jpg">
        <h3>мейрамханасы</h3>
      </div>
      <div class="info">
        <div class="wrap"><img src="<?php echo get_template_directory_uri();?>/images/brewery_site.png">
          <p>Tағамдар: еуропа<br> Жеке сыра қайнату<br>Жұмыс уақыты: күнделікті 12:00-02:00<br>Мекен жайы: Астана қ., Тұран даңғ., 30 (Fitness Palace кешені)<br>Тел.: +7 (7172) 56-77- 11, 8 702 888 1159</p><a href="#" class="button">Толығырақ</a>
        </div>
      </div>
    </sections>
    <sections class="restourant light"><a name="Arnau"></a>
      <div class="poster"><img src="<?php echo get_template_directory_uri();?>/images/arnau_bg.jpg">
        <h3>ұлттық мейрамханасы</h3>
      </div>
      <div class="info">
        <div class="wrap"><img src="<?php echo get_template_directory_uri();?>/images/arnau_site.png">
          <p>Tағамдар: қазақ, еуропа, шығыс<br>Жұмыс уақыты: күнделікті 12:00-01:00<br>Мекен жайы: Астана қ., Тұран даңғ., 30 (Fitness Palace кешені)<br>Тел.: +7 (7172) 279-111, 8 701 100 0704</p><a href="#" class="button">Толығырақ</a>
        </div>
      </div>
    </sections>
    <sections class="restourant middle"><a name="Kiku"></a>
      <div class="poster"><img src="<?php echo get_template_directory_uri();?>/images/kiku_bg.jpg">
        <h3>жапон мейрамханасы</h3>
      </div>
      <div class="info">
        <div class="wrap"><img src="<?php echo get_template_directory_uri();?>/images/kiku_site.png">
          <p>Tағамдар: жапондық<br>Жұмыс уақыты: күнделікті 12:00-01:00<br>Мекен жайы: Астана қ., Тұран даңғ., 30 (Fitness Palace кешені)<br>Тел.: +7 (7172) 56-77- 33, 8 775 793-17-06</p><a href="#" class="button">Толығырақ</a>
        </div>
      </div>
    </sections>
    <sections class="restourant dark"><a name="Sunduk"></a>
      <div class="poster"><img src="<?php echo get_template_directory_uri();?>/images/sunduk_bg.jpg">
        <h3>жапон мейрамханасы</h3>
      </div>
      <div class="info">
        <div class="wrap"><img src="<?php echo get_template_directory_uri();?>/images/sunduk_site.png">
          <p>Tағамдар: шығыс, өзбек<br>Жұмыс уақыты: күнделікті 12:00-01:00<br>Мекен жайы: Астана қ., Керей, Жанибек хандар к-сі, 14/2<br>Тел.: +7701 070707 2</p><a href="#" class="button">Толығырақ</a>
        </div>
      </div>
    </sections>
    <sections class="restourant light"><a name="Butchers"></a>
      <div class="poster"><img src="<?php echo get_template_directory_uri();?>/images/butchers_bg.jpg">
        <h3>гастропабы</h3>
      </div>
      <div class="info">
        <div class="wrap"><img src="<?php echo get_template_directory_uri();?>/images/butchers_site.png">
          <p>Tағамдар: еуропа, аралас<br>Жұмыс уақыты: күнделікті 12:00-01:00<br>Мекен жайы: Астана қ., Керей, Жанибек хандар к-сі, 14/2<br>Тел.: +7701 070707 4</p><a href="#" class="button">Толығырақ</a>
        </div>
      </div>
    </sections>
    <sections class="restourant middle"><a name="Buno"></a>
      <div class="poster"><img src="<?php echo get_template_directory_uri();?>/images/buno_bg.jpg">
        <h3>кофехана</h3>
      </div>
      <div class="info">
        <div class="wrap"><img src="<?php echo get_template_directory_uri();?>/images/buno_site.png">
          <p>Tағамдар: еуропа, аралас<br>Жұмыс уақыты: күнделікті 12:00-01:00<br>Мекен жайы: Астана қ., Керей, Жанибек хандар к-сі, 14/2<br>Тел.: +77172 222 444, +7701 070707 3</p><a href="#" class="button">Толығырақ</a>
        </div>
      </div>
    </sections>
    <section id="contact"><a name="contact"></a>
      <div class="container kz">
        <div class="left"></div>
        <div class="right"></div>
      </div>
    </section>
    <script src="<?php echo get_template_directory_uri();?>/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/libs/FlexSlider/jquery.flexslider.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/libs/fancybox/source/jquery.fancybox.pack.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.2/picturefill.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/bundle.js"></script>
  </body>
</html>