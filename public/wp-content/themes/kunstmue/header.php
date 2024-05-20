<!DOCTYPE html>
<html lang="en">

<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kunstmue Festival</title>

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
</head>

<body>
<?php wp_body_open(); ?>
  <header>
    <ul>
      <li><div class="logo"><a href=""><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Logo"></a></div></li>
      <li><a href="/page-about.php">About</a></li>
      <li><a href="/line-up.php">Line-Up</a></li>
      <li><a href="/fact.php">Facts</a></li>
      <li><a href="/galerie.php">Galerie</a></li>
      <li><a href="/partner.php">Partner</a></li>
      <li><a href="/contact.php">Kontakt</a></li>
    </ul>
</header>