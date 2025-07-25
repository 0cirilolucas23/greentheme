<?php
/*
Template Name: Elementor Full Width
Template Post Type: page, post
*/
get_header(); ?>

<main>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_content(); ?>
            </article>
            <?php
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>