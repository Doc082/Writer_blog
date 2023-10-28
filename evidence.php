<?php
/*
* Template Name: Pagina in Evidenza
*/
get_header();
?>
<div class="container">
    <div class="row">

        <?php while(have_posts()){
            the_post();
            ?>
            <div class="col-md-12 has-text-align-center">
                <img class="img-contatti m-3" src="<?php the_post_thumbnail_url();?>" alt="<?php the_post_thumbnail_caption();?>"/>
            </div>
            <div class="col-md-12">
                <h1 class="txt-article text-center mt-5"><b><?php the_title()?></b></h1>
                <div class="txt-var">
                    <p><?php the_content(); ?></p>
                </div>
                <div class="col-lg-4 offset-lg-4 col-sm-10 offset-sm-1">
                    <div class="card text-center card-form">
                        <div class="card-body d-flex flex-column" style="background-color: #e5bde4">
                            <h3 class="txt-var">Inserisci i tuoi dati per prenotare la tua copia autografata</h3>
                        <?php echo do_shortcode('[contact-form-7 id="f7628b5" title="Modulo di contatto"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>

<?php get_footer();?>
