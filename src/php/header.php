<!DOCTYPE html>
<html lang="en">

<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kunstmue Festival</title>

  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/favicon.svg" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
</head>

<body>
<?php wp_body_open(); ?>
  <header>
    <div class="nav">
      <div class="logo"><a href="/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Logo"></a></div>
      <div class="burger" onclick="openMenu()"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/Burger_menue.svg" alt="Burger"></div>
      <div class="close hidden" onclick="closeMenu()"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/Close.svg" alt="Close"></div>
     <div id="menu" class="hidden">
      <div class="menu-container">
      <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
      </div>
      </div>
    </div>
</header>

<script>
  const burger = document.querySelector('.burger');
  const close = document.querySelector('.close');
  const hidden = document.querySelector('.hidden');
  const menu = document.querySelector('#menu');
  const openMenu = () => {
        menu.classList.remove('hidden');
        close.classList.remove('hidden');
        burger.classList.add('hidden');
    }

    const closeMenu = () => {
        menu.classList.add('hidden');
        close.classList.add('hidden');
        burger.classList.remove('hidden');
    }
</script>