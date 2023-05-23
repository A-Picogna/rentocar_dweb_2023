<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="" class="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="<?=base_url() ?>/css/nav.css" rel="stylesheet">
    <link href="<?=base_url() ?>/css/assets.css" rel="stylesheet">
    <link href="<?=base_url() ?>/css/style.css" rel="stylesheet">

</head>

<body>
<nav class="main-navbar">
		<a class="" href="../index.php">
			<img class="img-64px logo" src="" alt="logo" />
		</a>
		<div class="navbar-body" id="navbarNavDropdown">
			<ul>
				<li><a href="<?=site_url() ?>/Location/locations_view/1"><img  src="<?=base_url() ?>/assets/loc.png"></a></li>
				<li><a href="<?=site_url() ?>/Profil"><img src="<?=base_url() ?>/assets/prof.png"></a></li>
				<li><a href="<?=site_url() ?>/Vehicule"><img src="<?=base_url() ?>/assets/voit.png"></a></li>
			</ul>
		</div>
</nav>
