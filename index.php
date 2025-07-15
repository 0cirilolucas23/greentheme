<?php get_header(); ?>

        <main>
            <?php
            // Este é um loop simples do WordPress para exibir posts
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    ?>
                    <article>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_content(); ?>
                    </article>
                    <?php
                endwhile;
            else :
                ?>
                <p>Nenhum post encontrado.</p>
                <?php
            endif;
            ?>
        </main>
<?php get_footer(); ?>

    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. Todos os direitos reservados.</p>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>