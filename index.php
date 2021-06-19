<!doctype html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<?php get_header(); ?>

		<div class="container content">

			<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) :
						
						the_post();
						the_content();

					endwhile;

				endif;
			?>

		</div>

		<?php get_footer(); ?>
	</body>
</html>
