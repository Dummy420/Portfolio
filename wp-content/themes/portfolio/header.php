<html <?= language_attributes(); ?> id="top">
<head>
  <meta charset="<?= bloginfo('charset'); ?>">
  <meta name="author" content="Clément Pavel">

	<meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?= bloginfo('name'); ?></title>

  <?php wp_head(); ?>
</head>

<body <?= body_class() ?>>

<header> 
  <?= wp_body_open() ?>

  <div class="header-logo">
    <img src="<?= get_site_icon_url() ?>" alt="Logo du site">
  </div> 

  <a id="header-menu-trigger" href="#0">
    <span class="header-menu-text">Menu</span>
      <span class="header-menu-icon"></span>
  </a> 

  <nav id="menu-nav-wrap">

    <a href="#0" class="close-button" title="close"><span>Close</span></a>	

    <h3>Pavel.</h3>  

    <ul class="nav-list">
      <!-- <li class="current"><a class="smoothscroll" href="#home" title="">Home</a></li>
      <li><a class="smoothscroll" href="#about" title="">A Propos</a></li>
      <li><a class="smoothscroll" href="#credentials" title="">Experience</a></li>		
      <li><a class="smoothscroll" href="#portfolio" title="">Portfolio</a></li>
      <li><a class="smoothscroll" href="#contact" title="">Contact</a></li>		 -->
      
      <?php
        $menu_name = 'nav-menu';
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
        $menu_items = wp_get_nav_menu_items($menu->term_id, []);

        foreach($menu_items as $item) {
          echo '<li><a class="smoothscroll" href="' . $item->url . '">' . $item->title . '</a></li>';
        }
      ?>
    </ul>	

    <ul class="header-social-list">
      <?php
        wp_nav_menu([
          'theme_location' => 'socials-menu',
          'link_before' => '<i class="fa fa-',
          'link_after' => '"></i>',
          'container' => '',
          'items_wrap'  => '%3$s'
        ]);
      ?>
      </ul>		

  </nav>  <!-- end #menu-nav-wrap -->

</header> 