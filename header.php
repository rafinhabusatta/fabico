<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

		<!-- Animte CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

		<!-- Estilo Personalizado -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilo.css?v=1">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/partials/contato.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/partials/publicacoes.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/partials/header.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/partials/links.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/partials/quemsomos.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/partials/fabico.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/partials/footer.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/partials/graduacao.css">

		<!-- Favicons -->
		<link rel="icon" href="<?php bloginfo('template_directory');?>/assets/fabico.png" >

		<title>
		<?php //is_front_page() ? bloginfo('name') : wp_title() bloginfo('name');  ?>
			<?php wp_title(); ?>
		</title>

		<?php wp_head(); ?>
		<!-- <style>
			.bg-header {
				background-color: <?php echo get_theme_mod('fabico_background', '#001E50'); ?>;
			}
		</style> -->
	</head>
	<body <?php body_class(); ?>>
		<header id="masthead" class="sticky-top">
			<nav class="navbar navbar-expand-lg navbar-light bg-fabico">
				<a href="<?php echo site_url(); ?>" class="navbar-brand">
					<img src="<?php bloginfo("template_directory"); ?>/assets/fabico.svg" alt="Faculdade de Biblioteconomia e Comunicação da Universidade Federal do Rio Grande do Sul" width="230">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        	<span class="navbar-toggler-icon"></span>
    		</button>
				<?php
					if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					}
					wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav ml-auto',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
					);
				?>
			</nav>
		</header>
