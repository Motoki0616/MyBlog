<?php get_header(); ?>
	<main class="main-contents">

    <h2 class="archive__title"><?php wp_title(' ') ?> Articles</h2>

	<div class="article__container">
	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		$thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full');
		$thumbnail_url = $thumbnail_data[0];
		?>
	        <article class="article__each">
					<p class="article__image" style="background: url('<?php echo $thumbnail_url ?>') center center no-repeat; background-size: cover;"></p>
				<div class="article__box">
		            <p class="article__info"><?php the_time( 'Y/m/d' ); ?><span class="article__cat"><?php the_category( ' ' ); ?></span></p>
		            <h1 class="article__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p class="btn__morelink"><a href="<?php echo get_permalink(); ?>">続きを読む</a></p>
				</div>
	        </article>
        <?php endwhile; else : ?>
            <p><?php _e( '少々お待ちください！！！' ); ?></p>
        <?php endif; ?>
	</div>

	<?php the_posts_pagination( array( 'mid_size' => 3, 'prev_text' => '前へ',
    'next_text' => '次へ' ) ); ?>

	</main>
<?php get_footer(); ?>
