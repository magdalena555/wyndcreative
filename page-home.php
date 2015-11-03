<?php

/*
  Template Name: Home Page
*/
 get_header();  ?>

<div class="main">

    <video id="bg" src="<?php bloginfo("template_url") ?>/wind2.mp4" autoplay="true" loop="true" muted="true">
    </video>

    

        <div class="headerCenter">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                
                <img src="<?php bloginfo("template_url")?>/images/logo.svg">
                <h2><?php the_field("header-sub-title"); ?></h2>
            <?php endwhile; // end the loop?>
                <a href="#about" class="btnSearch" type="submit" value="submit" >See More</a>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.main -->
<section class="intro">
    <div class="introBox1">
    </div>
    <div class="introBox2">
    </div>
</section>

<?php get_footer(); ?>