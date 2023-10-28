<?php get_header();?>
<div class="container">
    <div class="row">

            <?php while(have_posts()){
                the_post();
            ?>
        <div class="col-md-12 has-text-align-center">
                <img class="img-article m-3" src="<?php the_post_thumbnail_url();?>" alt="<?php the_post_thumbnail_caption();?>"/>
        </div>
        <div class="col-md-12">
            <h1 class="txt-article text-center mt-5"><b><?php the_title()?></b></h1>
            <div class="txt-var">
                <p class="txt-var"><?php the_content(); ?></p>
            </div>
        </div>
            <?php } ?>

    </div>
</div>
<?php get_footer(); ?>
