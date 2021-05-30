<?php defined('_EXEC') or die; ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{$vkye_lang}">
	<head>
		<meta charset="UTF-8" />
		<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
		{$dependencies.meta}
		<base href="{$vkye_base}">
		<title>{$vkye_title}</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="author" content="Code Monkey" />
		<meta name="description" content="" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<link rel="stylesheet" href="https://cdn.codemonkey.com.mx/css/valkyrie.css" type="text/css" media="all" />
		<link rel="stylesheet" href="{$path.css}styles.css?v=1.0" type="text/css" media="all" />
		{$dependencies.css}
	</head>
	<body class="pos-relative">
		<header id="desktop_menu" class="pos-fixed p-t-10 p-t-md-20 p-b-10 p-b-md-20 p-l-20 p-l-md-0 p-r-20 p-r-md-0" style="width:100%;transition:400ms;z-index:98;">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-4 col-md-2">
						<figure>
							<a href="/"><img src="{$path.images}logotype.png" alt="Logotype" class="img-fluid" style="max-height:40px;"></a>
						</figure>
					</div>
					<div data-desktop class="col-8">
						<nav>
							<ul class="d-flex align-items-center justify-content-center list-unstyled">
								<li class="m-lr-20"><a href="#nosotros" class="text-uppercase text-light">{$lang.us}</a></li>
								<li class="m-lr-20"><a href="#porque-elegirnos" class="text-uppercase text-light">{$lang.why_choose_us}</a></li>
								<li class="m-lr-20"><a href="#contactanos" class="text-uppercase text-light">{$lang.contact_us}</a></li>
							</ul>
						</nav>
					</div>
					<div data-desktop class="col-2">
						<nav>
							<ul class="d-flex align-items-center justify-content-end list-unstyled">
								<li><a href="?lang=es" class="text-light">ESP</a></li>
								<li class="m-l-20"><a href="?lang=en" class="text-light">ING</a></li>
							</ul>
						</nav>
					</div>
					<div data-mobile-block class="col-8 text-right">
						<a data-action="open_mobile_menu" class="text-light" style="font-size:24px;"><i class="fas fa-bars"></i></a>
					</div>
				</div>
			</div>
		</header>
		<header id="mobile_menu" data-mobile-flex class="pos-fixed d-flex align-items-center justify-content-center p-40" style="width:300px;height:100vh;right:-300px;background-color:#012b7b;transition:400ms;z-index:98;">
			<a data-action="close_mobile_menu" class="pos-absolute text-light" style="top:20px;right:20px;font-size:24px;"><i class="fas fa-times"></i></a>
			<nav>
				<ul class="d-flex align-items-center flex-column list-unstyled">
					<li class="m-b-20"><a href="#nosotros" class="text-uppercase text-light">{$lang.us}</a></li>
					<li class="m-b-20"><a href="#porque-elegirnos" class="text-uppercase text-light">{$lang.why_choose_us}</a></li>
					<li class="m-b-20"><a href="#contactanos" class="text-uppercase text-light">{$lang.contact_us}</a></li>
					<li><a href="?lang=es" class="m-r-20 text-light"><strong>ESP</strong></a><a href="?lang=en" class="text-light"><strong>ING</strong></a></li>
				</ul>
			</nav>
		</header>
