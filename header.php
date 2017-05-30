<!doctype html>
<html class="no-js" lang="en">
<head>
  <!-- Meta Tags -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700|Roboto:300,400,700" rel="stylesheet">
  <!-- Modernizr -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Start Header Section -->
  <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="left-top">
          <a href="">Sign Up</a>
          <a href="">Sign In</a>
        </div>
        <div class="right-top">
          <a href="" target="_blank"><i class="fa fa-rss" aria-hidden="true"></i></a>
          <a href="" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          <a href="" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
          <a href="" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <strong>303-455-5535</strong>
        </div>
      </div>
    </div><!-- .header-top -->
    
    <!-- Start Site Header -->
    <div class="site-header">
      <div class="container">
        <div class="header-wrap">
          <div class="site-branding">
			<?php nostalgic_the_custom_logo(); ?>
          </div>
          <nav class="primary-nav">
            <ul class="primary-nav-list">
              <?php wp_nav_menu( array( 'nostal_menu' => 'nostal_menu' ) ); ?>
            </ul>
          </nav>
        </div><!-- .header-wrap -->
      </div>
    </div>
    <!-- End Site Header -->
  </header>
