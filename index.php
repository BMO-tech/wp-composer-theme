<!doctype html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <title><?php get_bloginfo('name'); ?></title>
  <base href="/">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

	<div class="wrap">
		<?php if (is_home() && ! is_front_page()) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php single_post_title(); ?></h1>
			</header>
		<?php else : ?>
		<header class="page-header">
			<h2 class="page-title"><?php _e('Posts', 'twentyseventeen'); ?></h2>
		</header>
		<?php endif; ?>

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</div><!-- .wrap -->

    <?php wp_footer(); ?>
</body>
</html>
