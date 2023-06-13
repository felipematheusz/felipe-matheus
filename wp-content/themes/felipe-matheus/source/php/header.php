<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="<?php echo get_template_directory_uri();?>/dist/img/benedo_share.jpg">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dist/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dist/css/slick.css">
  <title><?php the_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body>
<?php wp_body_open(); ?>
  <?php include("svg.php"); ?>
  <header>
    <div class="top">
      <div class="container">
        <div class="left">
          <a class="logo" href="<?php echo esc_url(home_url('/home')); ?>">SUA LOGO</a>
          <nav>
            <a href="<?php echo esc_url(home_url('/home')); ?>">Home</a>
            <a href="<?php echo esc_url(home_url('/sobre')); ?>">Sobre</a>
            <a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a>
            <a href="<?php echo esc_url(home_url('/contato')); ?>">Contato</a>
          </nav>
        </div>
        <div class="right">
          <button id="search-header" class="search-header"><?php echo $search; ?></button>
          <div id="dropdown-search" style="display: none;">
          <label for="">
            <input type="text" placeholder="Digite aqui..." autofocus>
            <button class="search-header search-input"><?php echo $search; ?></button>
          </label>
          </div>
          <button id="button-login-dropdown" class="login primary-button">Entrar</button>
          <div id="dropdown-login">
            <a href="">
              Sou cliente
              <?php echo $icon_login; ?>
            </a>
            <a href="">
              Sou incorporadora
              <?php echo $icon_login; ?>
            </a>
          </div>
          <button id="dropdown-btn" class="translate-button">
            <span class="globe-icon"><?php echo $globe; ?></span>
            <span class="language">PT</span>
            <?php echo $arrow_bottom; ?>
          </button>
          <div id="dropdown-card" style="display: none;">
            <button id="portuguese-btn">Português</button>
            <div class="border-center"></div>
            <button id="english-btn">English</button>
          </div>
          <div id="overlay" class="overlay"></div>
          <div id="nav-icon4">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="menu-hamburger-header">
            <div class="box-links">
              <a href="<?php echo esc_url(home_url('/home')); ?>">Home</a>
              <a href="<?php echo esc_url(home_url('/sobre')); ?>">Sobre</a>
              <a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a>
              <a href="<?php echo esc_url(home_url('/contato')); ?>">Contato</a>
              <div class="border-menu"></div>
              <a class="development" href="">Desenvolvimento</a>
              <a class="manage" href="">Gestão</a>
              <button id="button-login-dropdown-mobile" class="login-mobile primary-button">Entrar</button>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </header>
