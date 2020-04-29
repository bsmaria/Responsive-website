<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"  />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <META name="MB" content="Prueba">
  <?php wp_head(); ?>
  <title>Maria Briceño - Build this site.</title>
</head>
<body>
	<header id="home">
    <div id="slideout-menu">
      <ul class="menu inline">
        <li class="menu-item"><a href="#home">Home </a></li>
        <li class="menu-item"><a href="#pages"> Pages </a></li>
        <li class="menu-item"><a href="#features"> Feature </a></li>
        <li class="menu-item"><a href="#services"> Services </a></li>
        <li class="menu-item"><a href="#contact"> Contact </a></li>
        <li class="menu-item">
          <input type="text" placeholder="search here">
        </li>
      </ul>
    </div>
		<nav id="home-nav">
          <div id="img-logo">
			      <a href="<?php echo site_url(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-v1-blanco.png" width="" height="40px" class="inline"/></a>
          </div>
      <div class="inline">
        <a id="menu-icon"><i class="fas fa-bars"></i></a>
      </div>
			<ul class="menu inline">
				<li class="menu-item inline"><a href="#home">Home </a></li>
				<li class="menu-item inline"><a href="#pages"> Pages </a></li>
				<li class="menu-item inline"><a href="#features"> Feature </a></li>
				<li class="menu-item inline"><a href="#services"> Services </a></li>
				<li class="menu-item inline "><a href="#contact"> Contact </a></li>
        <li class="menu-item inline">
          <a>
            <div id="search-icon">
              <i class="fas fa-search" id="search-btn" ></i>
            </div>
          </a>
        </li>
			</ul>
		</nav>
    <div id="searchbox">
      <input type="text" placeholder="Search here." id="search-input">
    </div>
		<div class="h1-title">
			<div class="title-text" id="home-title-text">
				<span>Here you can type your company slogan</span>
			</div>
		</div>

	</header>