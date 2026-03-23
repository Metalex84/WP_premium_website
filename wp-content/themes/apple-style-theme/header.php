<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container header-inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">Mi<span class="logo-accent">Marca</span></a>

    <nav class="nav" id="main-nav">
      <?php
      if ( has_nav_menu('primary') ) {
        wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false
        ]);
      } else {
      ?>
      <ul class="menu">
        <li><a href="#features">Producto</a></li>
        <li><a href="#showcase">Soluciones</a></li>
        <li><a href="#testimonials">Clientes</a></li>
        <li><a href="#cta">Contacto</a></li>
      </ul>
      <?php } ?>
    </nav>

    <a href="#cta" class="header-cta header-cta-desktop">Comenzar</a>

    <button class="menu-toggle" id="menu-toggle" aria-label="Abrir menú">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</header>
