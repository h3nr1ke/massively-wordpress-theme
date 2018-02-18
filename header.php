<!DOCTYPE HTML>
<!--
  Massively by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <?php wp_head(); ?>
  </head>
  <body class="is-loading">
    <!-- Wrapper -->
      <div id="wrapper" class="fade-in">

        <!-- Intro -->
        <?php
          // massively header only appears on home page...
            if( is_home() ) :?>
          <div id="intro">
            <h1>This is<br />
            Massively</h1>
            <p>A free, fully responsive HTML5 + CSS3 site template designed by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a><br />
            and released for free under the <a href="https://html5up.net/license">Creative Commons license</a>.</p>
            <ul class="actions">
              <li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
            </ul>
          </div>

        <?php endif; ?>

        <!-- Header -->
          <header id="header">
            <a href="<?php echo get_home_url(); ?>" class="logo">Massively</a>
          </header>

        <!-- Nav -->
          <nav id="nav">
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'top',
                'menu_id'        => 'top-menu',
                'menu_class'     => 'links',
                'container'      => ''
              )
            );
            ?>
            <!-- <ul class="links">
              <li><a href="index.html">This is Massively</a></li>
              <li class="active"><a href="generic.html">Generic Page</a></li>
              <li><a href="elements.html">Elements Reference</a></li>
            </ul> -->
            <ul class="icons">
              <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
              <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
              <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
              <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
            </ul>
          </nav>
        <!-- Main -->
          <div id="main">