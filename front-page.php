<?php get_header();?>
<!-- Jumbotron -->
<div id="spark" class="position-relative overflow-hidden p-3 p-md-5 m-md-2">
      <div class="col-md-8 col-lg-6 p-lg-5 my-5 text-md-start text-center">
        <h1 class="txt-title fw-bold">Esplora mondi nascosti tra le pagine. Benvenuto nel rifugio delle parole, dove l'immaginazione <br>prende vita.</h1>
        <h3 class="fw-normal text-muted mb-3"></h3>
        <div class="mt-5 text-md-start text-center">
          <a class="button-custom" href="/la-compagnia-di-giustino">
            Scopri il potere delle parole!
          </a>
        </div>
        <div class="d-flex justify-content-md-start justify-content-center fw-normal mt-5">
          <a href="https://www.instagram.com/majla_fadda" class="me-2"><img class="social" src="<?php echo get_theme_file_uri('images/insta.png');?>" alt="Condividi su Instagram"/></a>
          <a href="https://www.facebook.com/profile.php?id=61550895517748"><img class="social" src="<?php echo get_theme_file_uri('images/facebook.png');?>" alt="Condividi su Facebook"/></a>
        </div>
      </div>
      <div class="img_right shadow-sm d-none d-md-block shadow-sm"></div>
    </div>
  </div>
  <div class="diagonal"></div>
  <!-- Nuove Uscite-->
    <div id="books" class="position-relative overflow-hidden p-3 m-md-2">
        <?php
            $evidenceBook = new WP_Query(array(
                'posts_per_page' => 3,
                'category_type' => 'in_evidenza'
            ));
            $count = 0;
            while($evidenceBook->have_posts()){
                $evidenceBook->the_post();
                if($count) echo "<hr class='border border-primary border-2 opacity-25'/>";
        ?>
        <div class="row p-3 m-3">
            <?php if($count == 1) {?>
            <div class="offset-lg-1 col-lg-4 col-md-12 order-lg-2 text-lg-start text-center"><a href="<?php the_permalink(); ?>"><img class="img_thumb shadow" src="<?php echo the_post_thumbnail_url()?>" alt="<?php echo the_post_thumbnail_caption()?>" /></a></div>
            <div class="offset-lg-2 col-lg-4 col-md-12 text-lg-start text-center">
              <?php }else{?>
                <div class="offset-lg-2 col-lg-4 col-md-12 text-lg-start text-center"><a href="<?php the_permalink(); ?>"><img class="img_thumb shadow" src="<?php echo the_post_thumbnail_url()?>" alt="<?php echo the_post_thumbnail_caption()?>" /></a></div>
            <div class="offset-lg-1 col-lg-4 col-md-12 text-lg-start text-center">
              <?php }?>
                <p class="txt-var"><?php echo wp_trim_words(get_the_content(), 20); ?><br><span><a href="<?php the_permalink(); ?>"><i class="fa-regular fa-square-caret-right fa-beat" style="color: #0000EE;"></i> <b>Leggi tutto...</b></a></span></p>
            </div>
        </div>
        <?php
                $count++;
            }
        ?>
      </div>
    </div>
    <!-- Middle Chi Sono -->
    <div class="diagotwo"></div>
    <div class="container-fluid">
      <div id="middle" class="position-relative overflow-hidden p-3 p-md-5 m-md-2">
        <div class="img_middle_r shadow-sm d-none d-lg-block shadow-sm"></div>
        <div class="offset-lg-3 col-md-8 col-lg-6 p-lg-5 my-5 text-center">
          <h3 class="txt-title fw-normal fw-bold">Il viaggio inizia qui</h3>
          <h3 class="txt-title fw-normal text-muted mb-3">Ma l'avventura continua nel mio mondo. Scegli di rimanere e scoprire ancora di piu'.</h3>
        </div>
            <div class="my-5 col-md-10 offset-1 text-center">
            <a class="button-custom" href="/la-compagnia-di-giustino">
              Prenota la tua avventura letteraria!
            </a>
          </div>

        <div class="img_middle_l shadow-sm d-none d-md-block shadow-sm"></div>
      </div>
    </div>
    <div class="diagonal"></div>
    <!--Book List-->
    <div class="container-fluid">
      <div class="row p-md-5 m-md-2">
          <?php
          $newBooks = new WP_Query(array(
              'posts_per_page' => 3,
              'category_type' => 'in_evidenza'
          ));

          while($newBooks->have_posts()){
              $newBooks->the_post();
              ?>
        <div class="col-lg-4 col-md-12 d-flex justify-content-center">
          <div class="card card_height" style="width: auto; margin: 30px;">
            <img class="card-img-top" src="<?php the_post_thumbnail_url()?>" alt="<?php the_post_thumbnail_caption(); ?>">
            <div class="card-body d-flex flex-column">
              <p class="card-text"><?php echo wp_trim_words(get_the_content(), 20);?></p>
              <a href="<?php the_permalink();?>" class="mt-auto button-custom text-center">Leggi di più</a>
            </div>
          </div>
        </div>
          <?php } ?>
      </div>
    </div>

    <?php get_footer();?>
    <?php wp_footer();?>
</body>

</html>