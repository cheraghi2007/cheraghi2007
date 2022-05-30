<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NXWXTDT');</script>
	<!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXWXTDT"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<header id="main-header" class="d-none d-lg-block">
		<div class="container">
			<div class="main-menu d-flex justify-content-center align-items-center">
				<nav id="navbars-left" class="main-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-left',
							'menu_id'        => 'primary-menu-left',
							'menu'                 => '',
							'container'            => 'ul',
							'container_class'      => '',
							'container_id'         => '',
							'container_aria_label' => '',
							'menu_class'           => 'primary-menu',
							'echo'                 => true,
							'fallback_cb'          => 'wp_page_menu',
							//'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'                => 1,
						)
					);
					?>
				</nav>
				<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo THEME_DIR_URI; ?>/src/images/design/logo.png" alt="Agapi Boat Club" width="80" height="40">
				</a>
				<nav id="navbars-right" class="main-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-right',
							'menu_id'        => 'primary-menu-right',
							'menu'                 => '',
							'container'            => 'ul',
							'container_class'      => '',
							'container_id'         => '',
							'container_aria_label' => '',
							'menu_class'           => 'primary-menu',
							'echo'                 => true,
							'fallback_cb'          => 'wp_page_menu',
							//'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'                => 1,
						)
					);
					?>
				</nav>
			</div>
			<button class="lang-header">
				<i class="fa fa-globe"></i>
				<ul>
					<?php pll_the_languages(); ?>
				</ul>
			</button>
			<button class="search-header">
				<i class="fa fa-search"></i>
			</button>
			<div class="overlay-search">
				<div class="mmb-container">
					<div class="menu-close-search">
						<span class="lines"></span>
					</div>
				</div>
				<div class="search-container">
					<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
						<div class="search-container-inner">
							<input type="search" class="search-field form-fluid no-livesearch" placeholder="Search…" value="<?php the_search_query(); ?>" name="s" title="Search for:">
							<i class="fa fa-search"></i>
						</div>
					</form>
				</div>
			</div>
		</div>
	</header>
	<header id="mobile-header" class="d-block d-lg-none">
		<div class="main-menu d-flex justify-content-between align-items-center">
			<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
				<img src="<?php echo THEME_DIR_URI; ?>/src/images/design/logo.png" alt="Agapi Boat Club" width="80" height="50">
			</a>
			<nav id="navbars" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'mobile-menu',
						'menu_id'        => 'mobile-menu',
						'menu'                 => '',
						'container'            => 'ul',
						'container_class'      => '',
						'container_id'         => '',
						'container_aria_label' => '',
						'menu_class'           => 'mobile-menu',
						'echo'                 => true,
						'fallback_cb'          => 'wp_page_menu',
						//'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'                => 1,
					)
				);
				?>
			</nav>
			<div class="menu-items">
				<button class="search-header">
					<i class="fa fa-search"></i>
				</button>
				<button class="navbar-toggle" type="button">
					<span></span>
					<span></span>
					<span></span>
				</button>
			</div>
		</div>
		<div class="overlay-search">
			<div class="mmb-container">
				<div class="menu-close-search">
					<span class="lines"></span>
				</div>
			</div>
			<div class="search-container">
				<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
					<div class="search-container-inner">
						<input type="search" class="search-field form-fluid no-livesearch" placeholder="Search…" value="<?php the_search_query(); ?>" name="s" title="Search for:">
						<i class="fa fa-search"></i>
					</div>
				</form>
			</div>
		</div>
	</header>
	<div class="head-height d-none d-lg-block"></div>
	<div class="head-height-mob d-block d-lg-none"></div>