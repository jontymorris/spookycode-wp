<?php if (is_front_page()) : ?>

	<!-- home page banner -->
	<div class="home-header" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/banner.jpg)">
		<img src="<?php echo get_template_directory_uri() ?>/images/logo-clear.png">
		<span>Your friendly experts in WordPress security</span>
	</div>

<?php else : ?>

	<!-- general page banner -->
	<header>
		<div class="container">
			<a href="/">
				<img class="logo" src="<?php echo get_template_directory_uri() ?>/images/logo.png">
			</a>
			<span class="motto">Your friendly experts in WordPress security</span>
		</div>
	</header>

<?php endif; ?>