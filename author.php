<?php get_header(); ?>

<div class="w3-row w3-content">

	<div class="w3-col l8">
		<main id="content" role="main">
			<header class="header w3-container">
				<?php the_post(); ?>
				<h1 class="entry-title author"><?php the_author_link(); ?></h1>
				<div class="archive-meta"><?php if ( '' != get_the_author_meta( 'user_description' ) ) { echo esc_html( get_the_author_meta( 'user_description' ) ); } ?></div>
				<?php rewind_posts(); ?>
			</header>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="w3-container w3-white w3-margin w3-padding-large w3-card">
				<?php get_template_part( 'entry' ); ?>
			</div>
			<?php endwhile; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
		</main>
	</div>

	<div class="w3-col l4">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>
