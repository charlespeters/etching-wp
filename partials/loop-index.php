<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
		<header>
			<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<?php get_template_part('partials/meta' ); ?>
		</header>
		<section>
			<?php the_post_thumbnail(); ?>
			<?php the_excerpt(); ?>
		</section>
		<footer class="postmetadata">
			<?php the_tags('Tags: ', ', ', ''); ?>
			<a class="readmore" href="<?php the_permalink() ?>">Read More &rarr;</a>
		</footer>
	</article>
<?php endwhile; ?>
<nav class="content--navigation">
	<div class="previous"><?php next_posts_link( '&larr; Older posts' ); ?></div>
	<div class="next"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></div>
</nav>
