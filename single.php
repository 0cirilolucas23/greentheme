<?php get_header(); ?>

<main>
    <?php
    // Loop para PAGES e POSTS
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if ( is_singular() ) : // Só mostra o título se for uma página/post individual ?>
                    <h1><?php the_title(); ?></h1>
                <?php endif; ?>
                <?php the_content(); ?>
            </article>
            <?php
        endwhile;
    else :
        ?>
        <p>Nenhum conteúdo encontrado.</p>
        <?php
    endif;
    ?>
</main>

<?php get_footer(); ?>