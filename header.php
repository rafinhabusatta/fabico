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
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilo.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/partials/contato.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/partials/publicacoes.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/partials/header.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/partials/links.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/partials/quemsomos.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/partials/footer.css">

		<!-- Favicons -->
		<link rel="icon" href="<?php bloginfo('template_directory');?>/assets/fabico.png" >

		<title><?php wp_title();?></title>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header id="masthead" class="sticky-top">
			<nav class="navbar navbar-expand-lg navbar-light bg-fabico">
				<a href="<?php echo site_url(); ?>" class="navbar-brand">
					<img src="<?php bloginfo("template_directory"); ?>/assets/fabico.png" alt="Faculdade de Biblioteconomia e Comunicação da Universidade Federal do Rio Grande do Sul">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Menu de navegação">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="menu">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="<?php echo site_url(); ?>/a-fabico" class="nav-link">A Fabico</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url(); ?>/graduacao">Graduação</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url(); ?>/pos-graduacao">Pós Graduação</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url(); ?>/pesquisa" class="nav-link">Pesquisa</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url(); ?>/extensao" class="nav-link">Extensão</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url(); ?>/aluno" class="nav-link">Aluno</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" id="navbar-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mais</a>
							<div class="dropdown-menu dropdown-menu-right bg-submenu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo site_url(); ?>/nucleos-e-laboratorios">Núcleos e Laboratórios</a>
								<a class="dropdown-item" href="<?php echo site_url(); ?>/portal-egressos">Portal de Egressos</a>
								<a class="dropdown-item" href="<?php echo site_url(); ?>/atos-normativos">Atos Normativos</a>
								<a class="dropdown-item" href="<?php echo site_url(); ?>/quem-somos">Quem Somos</a>
								<a class="dropdown-item" href="<?php echo site_url(); ?>/contato">Contato</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</header>
