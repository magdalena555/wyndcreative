<?php

/*
  Template Name: Home Page
*/
 get_header();  ?>

<div class="main">
    <video id="bg" src="<?php bloginfo("template_url") ?>/wind2.mp4" autoplay="true" loop="true" muted="true">
    </video>

<!-- Start of header Center -->
        <div class="headerCenter" id="home">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <img class="wow fadeInDown" data-wow-duration="1s" data-wow-offset="5" src="<?php bloginfo("template_url")?>/images/logo.svg">
                <h2 class="wow fadeInUp" data-wow-duration="1s"  data-wow-offset="5"><?php the_field("header-subtitle"); ?></h2>
            <?php endwhile; // end the loop?>
            <a  href="#about" class="btnSearch wow fadeInUp" data-wow-duration="1s"  data-wow-offset="5" type="button"  >Learn More</a>
        </div>
    </div> 
</div>
<!-- end of header -->
<!-- start of introduction -->
<section class="intro wrapper" id="about">
    <!-- left image    -->
     <div class="introBox1 wow fadeInLeft "  data-wow-duration="1s"  data-wow-offset="5">
        <?php $image = get_field('intro-image'); ?>
        <img src="<?php echo $image['sizes']['large'] ?>"> 
    </div>
    <!-- right about  content-->
    <div class="introBox2 wow fadeInRight" data-wow-duration="1s"  data-wow-offset="5" >
        <h1 class= ""><?php the_field("intro-title-one"); ?></h1>
         <h2><?php the_field("intro-title-two"); ?> </h2>
        <p><?php the_field("intro-content"); ?></p>
        <!-- view work link -->
        <a  href="#portfolio" class="introButton wow fadeInUp" data-wow-duration="1s"  data-wow-offset="5" type="submit" value="submit" >View Work</a>  
    <!--      <a  href="#about" class="btnSearch wow fadeInUp" data-wow-duration="2s"  data-wow-offset="5" type="button"  >Work With Me</a> -->
    </div>
</section>

<!-- end of introduction  -->
<!-- start of colored information sections -->
<section class="colorsParent">
    <!-- branding -->
    <div class="two ">
        <!-- branding content -->
        <div class="twoA wow fadeInLeft" data-wow-duration="1s" mobile: false>
            <h1><?php the_field("brand-title-one"); ?></h1>
            <h2><?php the_field("brand-title-two"); ?></h2>
            <p><?php the_field("brand-content"); ?> </p>
            <a  href="#portfolio" class="button wow fadeInUp" data-wow-duration="2s"  type="submit" value="submit" >View Work</a>
        </div>
        <!-- branding glasses picture -->
        <div class="twoB  wow tada " data-wow-duration="3s" data-wow-iteration="3" data-wow-offset="20" >
            <?php $image = get_field('brand-image'); ?>
            <img src="<?php echo $image['sizes']['large'] ?>"> 
        </div>
    </div>
    <!-- end of branding section -->
    <!-- start of personal section -->
    <div class="three">
        <!-- cup photo -->
        <div class="threeA wow rotateIn " data-wow-duration="3s"  data-wow-offset="5" data-wow-iteration="2">
            <?php $image = get_field('personal-image'); ?>
            <img src="<?php echo $image['sizes']['large'] ?>"> 
        </div>
        <!-- personal work content -->
        <div class="threeB wow fadeInRight" data-wow-duration="1s">
            <h1>
                <?php the_field("personal-title-one"); ?> 
            </h1>
            <h2><?php the_field("personal-title-two"); ?></h2>
            <p><?php the_field("personal-content"); ?></p>
            <a  href="#portfolio" class="button wow fadeInUp" data-wow-duration="2s"  data-wow-offset="5" type="submit" value="submit" >View Work</a>
        </div>
    </div>
    <!-- end of personal work section -->
    <!-- start of deliver in style -->
    <div class="four">
        <!-- deliver in style content -->
        <div class="fourA wow fadeInLeft" data-wow-duration="1s">
            <h1>
                <?php the_field("deliver-title-one"); ?>
            </h1>
            <h2>
                <?php the_field("deliver-title-two"); ?>
            </h2>
            <p><?php the_field("deliver-content"); ?></p>
            <a  href="#portfolio" class="button wow fadeInUp" data-wow-duration="1s"  data-wow-offset="5" type="submit" value="submit" >View Work</a>
        </div>
        <!-- deliver in style image -->
        <div class="fourB wow fadeInRight" data-wow-duration="3s"  data-wow-offset="5" data-wow-iteration="1">
            <?php $image = get_field('deliver-image'); ?>
            <img src="<?php echo $image['sizes']['large'] ?>"> 
        </div>
    </div>
    <!-- end of deliver in style section -->
</section> 
<!-- end of colored information sections -->
<!-- start of filler image -->
<section class="fillerImage">
     <div class="fillerWrapper"></div>
</section>
<!-- end of filler tools image -->
<!-- start of portfolio -->
<section class="portfolioSection" id="portfolio">
     <div class="wrapper">
        <!-- portfolio title -->
        <div class="portfolioMainTitle wow fadeInDown" data-wow-duration="1s"  data-wow-offset="5">
            <h1><?php the_field("portfolio-title"); ?></h1>
        </div>
        <!-- portfolio content box -->
        <div class="gallery js-flickity" data-flickity-options='{ "freeScroll": true, "wrapAround": true
                     }'>
            <!-- porfolio items -->
            <?php while( has_sub_field('portfolio') ): ?>
            <div class="portfolio-item gallery-cell">
                <!-- portfolio image -->
                
               <!--  <?php //$image = get_sub_field('portfolio-image'); ?>
                <img src="<?php //echo $image['sizes']['large'] ?>">
 -->
                <?php $image = get_sub_field("portfolio-image"); ?>
                <div class="portfolio-image" style="background-image:url(<?php echo $image["url"]; ?>); background-repeat: no-repeat;" > 
                </div>
                <!-- portfolio information -->
                <div class="portfolio-info ">
                    <h1> <?php the_sub_field('portfolio-title'); ?></h1>
                    <h2> <?php the_sub_field('portfolio-specs'); ?></h2>
                    <p> <?php the_sub_field('portfolio-content'); ?></p>
                    <!-- portfolio link -->
                    <a class="button" href="<?php the_sub_field('portfolio-link'); ?>">View Live Site</a>
                </div>
            </div>
            <?php endwhile; ?>
            <!-- end of portfolio item -->
        </div> <!-- end of portfolio content box -->
    </div> <!-- end of wrapper -->
</section>
<!-- end of portfolio section -->
<!-- start of idea section-->

<section class="idea wrapper">
    <h1 class="ideaTitle wow fadeInUp" data-wow-duration="1s"  data-wow-offset="5"> <?php the_field("idea-title"); ?></h1>
    <h2 class="ideaContent wow fadeInUp" data-wow-duration="1s"  data-wow-offset="5"> <?php the_field("idea-content"); ?></h2>
     <a  href="#contact" class="button wow fadeInUp" data-wow-duration="1s"  data-wow-offset="5" type="submit" value="submit" ><?php the_field("idea-button"); ?></a>
</section>
<!-- end of idea section -->
<!-- start of footer -->
<section class="footer wrapper " id="contact">
        <div class=" footerContent wow fadeInLeft" data-wow-duration="1s"  data-wow-offset="5">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <img class="wow fadeInDown" data-wow-duration="1s" data-wow-offset="5" src="<?php bloginfo("template_url")?>/images/logo.svg">
            <?php endwhile; // end the loop?>

           
            <h2><i class="fa fa-envelope"></i><span>Email</span></h2>
            <div class="line"></div>
            <p><a href="mailto:hello@wyndcreative.com">hello@wyndcreative.com</a></p>
            
            <h2><i class="fa fa-phone"></i><span>Phone</span></h2>
            <div class="line"></div>
            <p><a href="#"> <?php the_field("contact-number"); ?> </a></p>
            <h2><i class="fa fa-github"></i><span>github</span></h2>
            <div class="line"></div>
            <p><a href="https://github.com/magdalena555"> <?php the_field("github"); ?> </a></p>
           <!--  <div class="social">
                <p><?php the_field("linkedin"); ?></p>
                <p><?php the_field("twitter"); ?></p>
                
            </div>  -->
        </div>
        <div class="footerImage wow rotateIn " data-wow-duration="4s"  data-wow-offset="10" data-wow-iteration="3">
            <?php $image = get_field('footer-image'); ?>
            <img src="<?php echo $image['sizes']['large'] ?>"> 
        </div>
        <!-- footer form -->
            <?php //echo do_shortcode('[contact-form-7 id="105" title="Contact form 1"]'); ?>
</section>


<?php get_footer(); ?>