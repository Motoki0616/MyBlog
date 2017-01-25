<?php get_header(); ?>
	<main class="main-contents">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <article class="article__single">
            <div class="single__head">
                <h1 class="single__title"><?php the_title(); ?></h1>
                <p class="single__date"><?php the_time( 'Y/m/d' ); ?><span class="single__cat"><?php the_category( ' ' ); ?></span></p>

                <?php if ( get_the_post_thumbnail() ): ?>
                    <div class="single__image">
                    <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="single__main">
                <?php the_content(); ?>
            </div>
    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
		</article>

	<?php comments_template(); ?>

	<?php
		$args = array(
		'post_type' => 'works'
		);
		$query = new WP_Query( $args );
	?>
	<section class="related-posts">
		<?php if( $query->have_posts()) : while( $query->have_posts()) : $query->the_post(); ?>
		<div class="related-post">
			<p class="realted-post__image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a></p>
			<h3 class="related-post__title"><?php the_title();?></h3>
		</div>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</section>

	</main>
<?php get_footer(); ?>
