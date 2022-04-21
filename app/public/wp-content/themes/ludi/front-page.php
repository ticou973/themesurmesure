<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

    <p>
        <strong>Note :</strong>
		<?php echo get_post_meta( get_the_ID(), 'Note', true ); ?> / 10
    </p>

    <div class="plus-moins">
        <div class="plus">
			<?php echo get_post_meta( get_the_ID(), 'Plus', true ); ?>
        </div>
    </div>

<?php endwhile; endif; ?>

    <aside class="site__sidebar">
        <ul>
            <?php dynamic_sidebar( 'blog-sidebar' ); ?>
        </ul>
    </aside>

<?php get_footer(); ?>