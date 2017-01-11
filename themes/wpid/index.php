<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="wrapper">
			<?php printf(
				'<img src="%s" alt="%s" />',
				esc_url( get_stylesheet_directory_uri() . '/wcdps2016-logo.png' ),
				esc_attr__( 'WordCamp Denpasar 2016 Logo', 'wpid' )
			); ?>
			<h1>Selamat Datang!</h1>
		</div>

		<?php wp_footer(); /* required */ ?>
	</body>
</html>
