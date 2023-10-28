<!doctype html>
<html lang="it">

<head>
  <?php wp_head();?>
    <meta name="author" content="Mirko Fenu">
</head>

<body>
  <div class="container-fluid">
    <header>
        <h1 class="m-md-3 text-md-start text-center display-6"><b>Tra Linee e Sogni:</b> <small class="text-body-secondary">Il Viaggio Letterario di Majla</small></h1>
      <nav id="navbar" class="navbar navbar-expand-sm m-md-2 fs-5" style="z-index: 2;">
        <div class="container-fluid nav-cont">
          <!--<a class="navbar-brand" href="index.html">Home</a>-->
          <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>-->
          <div id="navbarNav">
          <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'menu_id' => false,
                        'container' => false,
                        'depth' => 2,
                        'menu_class' => 'navbar-nav ml-auto',
                        'walker' => new bs4navwalker(),
                        'fallback_cb' => 'bs4navwalker::fallback'
                    ));
                ?>
          </div>
        </div>
      </nav>
    </header>
