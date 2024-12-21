<?php /*Template Name: Home*/ get_header('home'); ?>

<div id="primary" class="content-area">

    <?php // Start the loop.while (have_posts()) : the_post();// Include the page content template.get_template_part('template-parts/content' , 'page' );// If comments are open or we have at least one comment, load up the comment template.if (comments_open() || get_comments_number()) {comments_template();}// End of the loop.endwhile;
    ?>

    <?php get_template_part('template-parts/content/arquivo-banner-home'); ?>
    <?php get_template_part('template-parts/content/arquivo-sobre'); ?>
    <?php get_template_part('template-parts/content/arquivo-vantagens'); ?>

    <?php get_template_part('template-parts/content/arquivo-destinos-preferidos'); ?>

    <?php get_template_part('template-parts/content/arquivo-novidades'); ?>
    <?php get_template_part('template-parts/content/arquivo-instagram-top'); ?>
    <?php get_template_part('template-parts/content/arquivo-instagram-bottom'); ?>


    <?php get_template_part('template-parts/content/arquivo-parceiros'); ?>
    <!-- < ?php get_template_part('template-parts/content/arquivo-historia-novo'); ?> -->

    <!-- < ?php get_template_part( 'template-parts/content/arquivo-delivery'); ?> -->


    <!--content-area -->
    <?php get_footer(); ?>