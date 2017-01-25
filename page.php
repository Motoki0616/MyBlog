<?php get_header(); ?>
	<main class="main-contents">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <article class="page">
            <div class="page__head">
                <h1 class="page__title"><?php the_title(); ?></h1>

                <?php if ( get_the_post_thumbnail() ): ?>
                    <div class="page__image">
                    <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="page__main">
                <?php the_content(); ?>
            </div>
		</article>

    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

	</main>
<?php get_footer(); ?>
