<!doctype html>
<html lang="it">

<head>
  <title>Majla Fadda - Writer Blog</title>
  <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">-->
  <?php wp_head();?>
</head>

<body>
  <div class="container-fluid">
    <header>
        <h1 class="m-md-3 text-md-start text-center"><b>Tra Linee e Sogni:</b> <small class="text-body-secondary">Il Viaggio Letterario di Majla</small></h1>
      <nav id="navbar" class="navbar navbar-expand-lg m-md-2" style="z-index: 2;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
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
