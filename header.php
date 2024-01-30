<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mypaperwriter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/fav/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/img/fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/img/fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114"
		href="<?php bloginfo('template_url'); ?>/img/fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120"
		href="<?php bloginfo('template_url'); ?>/img/fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144"
		href="<?php bloginfo('template_url'); ?>/img/fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152"
		href="<?php bloginfo('template_url'); ?>/img/fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180"
		href="<?php bloginfo('template_url'); ?>/img/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"
		href="<?php bloginfo('template_url'); ?>/img/fav/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/img/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/img/fav/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/img/fav/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<link rel="preload" href="<?php bloginfo('template_url'); ?>/fonts/Poppins-Bold.woff2" as="font" type="font/woff2"
		crossorigin="anonymous">
	<link rel="preload" href="<?php bloginfo('template_url'); ?>/fonts/OpenSans-Regular.woff2" as="font"
		type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="<?php bloginfo('template_url'); ?>/fonts/OpenSans-Bold.woff2" as="font" type="font/woff2"
		crossorigin="anonymous">
	<link rel="preload" href="<?php bloginfo('template_url');?>/img/close.svg" as="image" type="image/svg+xml" />
	<link rel="preload" href="<?php bloginfo('template_url');?>/img/lightning.svg" as="image" type="image/svg+xml" />

	<?php wp_head(); ?>

	<!-- Google Tag Manager -->
	<script>
	(function(w, d, s, l, i) {
		w[l] = w[l] || [];
		w[l].push({
			'gtm.start': new Date().getTime(),
			event: 'gtm.js'
		});
		var f = d.getElementsByTagName(s)[0],
			j = d.createElement(s),
			dl = l != 'dataLayer' ? '&l=' + l : '';
		j.async = true;
		j.src =
			'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
		f.parentNode.insertBefore(j, f);
	})(window, document, 'script', 'dataLayer', 'GTM-PXTS35LW');
	</script>
	<!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>

	<img width="99999" height="99999"
		style="pointer-events: none; position: absolute; top: 0; left: 0; width: 99vw; height: 99vh; max-width: 99vw; max-height: 99vh;"
		src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSI5OTk5OXB4IiBoZWlnaHQ9Ijk5OTk5cHgiIHZpZXdCb3g9IjAgMCA5OTk5OSA5OTk5OSIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZyBzdHJva2U9Im5vbmUiIGZpbGw9Im5vbmUiIGZpbGwtb3BhY2l0eT0iMCI+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9Ijk5OTk5IiBoZWlnaHQ9Ijk5OTk5Ij48L3JlY3Q+IDwvZz4gPC9zdmc+"
		alt="">

	<div class="top-block ">
		<header class="header">
			<div class="header__container">
				<a href="/samples/" class="logo poppins-bold">
					<img loading="lazy" width="28" height="28"
						src="<?php bloginfo('template_url'); ?>/img/logo/up-logo.svg"
						alt="Research Paper Examples & Samples">
					<p>My<span>Paper</span>Writer</p>
				</a>
				<nav class="menu">
					<ul class="menu--left">
						<li><a href="/how-it-works.htm" rel="nofollow" class="menu__link">How It Works</a></li>
						<li class="nav-dropdown"><a href="#" class="menu__link dropdown-button">Services
								<span></span></a>
							<div class="dropdown-menu">
								<div class='menu__link-wrapper'>
									<p class='menu__link-title'>Services</p>
									<a href="#" class="menu__link">Buy Research Paper</a>
									<a href="#" class="menu__link">Buy Term Paper</a>
									<a href="#" class="menu__link">Cheap Research Paper</a>
									<a href="#" class="menu__link">Term Papers for Sale</a>
								</div>
								<div class='menu__link-wrapper'>
									<p class='menu__link-title'>Disciplines</p>
									<a href="#" class="menu__link">Write My Economics Paper</a>
									<a href="#" class="menu__link">Write My Psychology Paper</a>
								</div>
								<div class='menu__link-wrapper'>
									<p class='menu__link-title'>Offers</p>
									<a href="#" class="menu__link">Buy Thesis</a>
									<a href="#" class="menu__link">Coursework Help</a>
									<a href="#" class="menu__link">Custom Dissertation</a>
									<a href="#" class="menu__link">Write My Case Study</a>
									<a href="#" class="menu__link">Research Proposal Writing</a>
								</div>
							</div>
						</li>
						<li><a href="/prices.htm" rel="nofollow" class="menu__link">Pricing</a></li>
						<li><a href="/about.htm" rel="nofollow" class="menu__link">About</a></li>
						<li><a href="/contact.htm" rel="nofollow" class="menu__link">Contact</a></li>
					</ul>
					<ul class="menu--right">
						<li>
							<a href="/manage/login" rel="nofollow" class="secondary-link">
								<img loading="lazy" width="20" height="20"
									src="<?php bloginfo('template_url'); ?>/img/ico/iconamoon_profile-fill.svg"
									alt="Research Paper Examples & Samples">Sign In</a>
						</li>
						<li><a href="/manage/signup" rel="nofollow" class="main-link">Order Now</a></li>
						<li>
							<button class="toggle_menu">
								<span class="sandwich">
									<span class="sw-topper"></span>
									<span class="sw-bottom"></span>
									<span class="sw-footer"></span>
								</span>
							</button>
						</li>
					</ul>
				</nav>
				<div class="mobile-menu" style="display: block;">
					<ul class="menu--right top-links">
						<li>
							<a href="/manage/login" rel="nofollow" class="link">Sign In</a>
						</li>
						<li><a href="/manage/signup" rel="nofollow" class="button-small--light">Order Now</a></li>
					</ul>
					<ul class="menu">
						<li><a href="/how-it-works.htm" class="menu__link">How It Works</a></li>
						<li class="mobile-dropdown-btn"><a href="#" class="menu__link dropdown-button"
								id="menu-services-mob">Services
								<span></span></a>
							<div class="dropdown-menu-mobile">
								<button class="dropdown-menu-mobile__back" id="menu-back-mob">Menu</button>
								<div class='menu__link-wrapper'>
									<p class='menu__link-title'>Services</p>
									<a href="#" class="menu__link">Buy Research Paper</a>
									<a href="#" class="menu__link">Buy Term Paper</a>
									<a href="#" class="menu__link">Cheap Research Paper</a>
									<a href="#" class="menu__link">Term Papers for Sale</a>
								</div>
								<div class='menu__link-wrapper'>
									<p class='menu__link-title'>Disciplines</p>
									<a href="#" class="menu__link">Write My Economics Paper</a>
									<a href="#" class="menu__link">Write My Psychology Paper</a>
								</div>
								<div class='menu__link-wrapper'>
									<p class='menu__link-title'>Offers</p>
									<a href="#" class="menu__link">Buy Thesis</a>
									<a href="#" class="menu__link">Coursework Help</a>
									<a href="#" class="menu__link">Custom Dissertation</a>
									<a href="#" class="menu__link">Write My Case Study</a>
									<a href="#" class="menu__link">Research Proposal Writing</a>
								</div>
							</div>
						</li>
						<li><a href="/prices.htm" rel="nofollow" class="menu__link">Pricing</a></li>
						<li><a href="/about.htm" rel="nofollow" class="menu__link">About</a></li>
						<li><a href="/contact.htm" rel="nofollow" class="menu__link">Contact</a></li>
					</ul>
				</div>
			</div>
		</header>

		<div id="content" class="site-content">