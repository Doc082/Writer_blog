<?php get_header();?>
<!-- Jumbotron -->
<div id="spark" class="position-relative overflow-hidden p-3 p-md-5 m-md-2">
      <div class="col-md-6 p-lg-5 my-5 text-md-start text-center">
        <h1 class="display-6 fw-bold">Esplora mondi nascosti tra le pagine. Benvenuto nel rifugio delle parole, dove l'immaginazione prende vita.</h1>
        <h3 class="fw-normal text-muted mb-3"></h3>
        <div class="d-flex justify-content-md-start justify-content-center fw-normal">
          <a class="btn btn-primary" href="#">
            Scopri il potere delle parole!
          </a>
        </div>
        <div class="d-flex justify-content-md-start justify-content-center fw-normal mt-5">
          <a href="#" class="me-2"><img class="social" src="<?php echo get_theme_file_uri('images/insta.png');?>" alt="Condividi su Instagram"/></a>
          <a href="#"><img class="social" src="<?php echo get_theme_file_uri('images/facebook.png');?>" alt="Condividi su Facebook"/></a>
        </div>
      </div>
      <div class="img_right shadow-sm d-none d-md-block shadow-sm"></div>
    </div>
  </div>
  <div class="diagonal"></div>
  <!-- Nuove Uscite-->
  <a name="nuove_uscite"></a>
    <div id="books" class="position-relative overflow-hidden p-3 m-md-2">
        <div class="row p-3 m-3">
          <div class="col-md-4 col-sm-12"><img class="img_thumb shadow" src="<?php echo get_theme_file_uri('images/thumb001.jpg');?>" alt="" /></div>
          <div class="offset-md-4 col-md-4 col-sm-12">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit neque facilis nemo itaque maxime magni libero
              quisquam unde beatae asperiores</p>
            </div>
        </div>
        <hr class="hr"/>
        <div class="row p-3 m-3">
          <div class="col-md-4 col-sm-12">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit neque facilis nemo itaque maxime magni.</p>
          </div>
          <div class="offset-md-4 col-md-4 col-sm-12"><img class="img_thumb shadow" src="<?php echo get_theme_file_uri('images/thumb002.jpg');?>" alt="" /></div>
        </div>
        <hr class="hr"/>
        <div class="row p-3 m-3">
          <div class="col-md-4 col-sm-12"><img class="img_thumb shadow" src="<?php echo get_theme_file_uri('images/thumb003.jpg');?>" alt="" /></div>
          <div class="offset-md-4 col-md-4 col-sm-12">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit neque facilis nemo itaque maxime magni libero.
            </p>
          </div>
      </div>
    </div>
    <!-- Middle Chi Sono -->
    <a name="chi_sono"></a>
    <div class="diagotwo"></div>
    <div class="container-fluid">
      <div id="middle" class="position-relative overflow-hidden p-3 p-md-5 m-md-2">
        <div class="img_middle_r shadow-sm d-none d-lg-block shadow-sm"></div>
        <div class="offset-lg-3 col-md-6 p-lg-5 my-5 text-center">
          <h3 class="fw-normal fw-bold">Il viaggio inizia qui</h3>
          <h3 class="fw-normal text-muted mb-3">Ma l'avventura continua nel mio mondo. Scegli di rimanere e scoprire ancora di piu'.</h3>
          <div class="d-flex justify-content-center fw-normal">
            <a class="btn btn-primary" href="#">
              Prenota la tua avventura letteraria!
            </a>
          </div>
        </div>
        <div class="img_middle_l shadow-sm d-none d-md-block shadow-sm"></div>
      </div>
    </div>
    <div class="diagonal"></div>
    <!--Book List-->
    <a name="i_miei_libri"></a>
    <div class="container-fluid">
      <div class="row p-md-5 m-md-2">
        <div class="col-md-4 col-sm-12 d-flex justify-content-center">
          <div class="card card_height" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo get_theme_file_uri('images/img_card001.jpg');?>" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Aquista Libro</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 d-flex justify-content-center">
          <div class="card card_height" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo get_theme_file_uri('images/img_card002.jpg');?>" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Aquista Libro</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 d-flex justify-content-center">
          <div class="card card_height" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo get_theme_file_uri('images/img_card003.jpg');?>" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Aquista Libro</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>-->
    <?php get_footer();?>
    <?php wp_footer();?>
</body>

</html>