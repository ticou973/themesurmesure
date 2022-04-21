<?php get_header(); ?>
    <h1>Le blog de Ludi</h1>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <article class="post">
        <h2><?php the_title(); ?></h2>
        <?php var_dump(the_post_thumbnail());?>

        <?php the_post_thumbnail(); ?>

        <p class="post__meta">
            Publié le <?php the_time( get_option( 'date_format' ) ); ?>
            par <?php the_author(); ?> • <?php comments_number(); ?>
        </p>

        <?php the_excerpt(); ?>

        <p>
            <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
        </p>
    </article>


<?php endwhile; endif; ?>
    <div class="site__navigation">
        <!--<div class="site__navigation__prev">
         <?php //previous_posts_link( 'Page Précédente' ); ?>
        </div>
        <div class="site__navigation__next">-->
            <?php //next_posts_link( 'Page Suivante' ); ?>

        <?php the_posts_pagination(); ?>
        </div>
    </div>


<?php get_footer(); ?>