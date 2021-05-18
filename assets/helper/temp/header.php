<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
<head>
		<meta charset="utf-8" />
		<title><?= APP_NAME ?></title>
		<meta name="description" content="Confectionery shop." />
		
		<script src="<?= base_url() ?>/node_modules/eruda/eruda.js"></script>
        <script>eruda.init();</script> 
		
		<link rel="canonical" href="<?= base_url() ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="<?= base_url() ?>/assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?= base_url() ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?= base_url() ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head--> 
	<!--begin::Body-->
	<body id="kt_body" <?php if ($page === 'home'): ?>data-sidebar="on"<?php endif; ?> class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled <?php if ($page ==='home'): ?>sidebar-enabled<?php endif; ?> ">
	 