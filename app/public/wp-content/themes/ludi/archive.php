<?php get_header(); ?>
<?php
if ( is_category() ) {
	$title = "Catégorie : " . single_tag_title( '', false );
}
elseif ( is_tag() ) {
	$title = "Étiquette : " . single_tag_title( '', false );
}
elseif ( is_search() ) {
	$title = "Vous avez recherché : " . get_search_query();
}
else {
	$title = 'Le blog de Ludi';
}
?>
    <h1><?php echo $title; ?></h1>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <article class="post">
        <h2><?php the_title(); ?></h2>

	    <?php if ( has_post_thumbnail() ): ?>
            <div class="post__thumbnail">
			    <?php the_post_thumbnail(); ?>
            </div>
        <?php else :?>
            <a href="<?php echo home_url( '/' ); ?>">
                <img src="http://themesurmesure.local/wp-content/uploads/2022/04/f6ab60b9-2878-317e-8ae4-71ca46956673.jpg" alt="Logo">
            </a>
	    <?php endif; ?>

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

    <div id="commentaires" class="comments">
		<?php if ( have_comments() ) : ?>
            <h2 class="comments__title">
				<?php echo get_comments_number(); // Nombre de commentaires ?> Commentaire(s)
            </h2>

            <ol class="comment__list">
				<?php
				// La fonction qui liste les commentaires
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 74,
				) );
				?>
            </ol>

		<?php
		// S'il n'y a pas de commentaires
		else :
			?>
            <p class="comments__none">
                Il n'y a pas de commentaires pour le moment. Soyez le premier à participer !
            </p>
		<?php endif; ?>

		<?php comment_form(); // Le formulaire d'ajout de commentaire ?>
    </div>


<?php get_footer(); ?>