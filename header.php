<?php
    $options = get_option( 'my_framework' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Tooplate" />
    <style>
      #page-wraper {
        /* #4AA0DD */
        background: <?php echo $options['background_color']; ?> no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        width: 100%;
    }
    .menu {
        left: 8%;
      -webkit-transition: -webkit-transform 233ms cubic-bezier(0, 0, 0.21, 1);
      -webkit-overflow-scrolling: touch;
      background-color: <?php echo $options['menu_color']; ?>;
      box-sizing: border-box;
      height: 100vh;  
      max-height: 100vh !important;
      max-width: 80vw !important;
      min-width: 45px !important;
      outline: none;
      overflow-x: hidden !important;
      overflow-y: auto !important;
      padding: 0;
      position: fixed !important;
      top: calc(0px);  
      width: 22%;
      will-change: transform;
      z-index: 9999 !important;
    }
    </style>
   <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
    <div id="page-wraper">
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="image">
                <a href="<?php echo home_url(); ?>">
                    <?php
                        if( has_custom_logo() ){
                            the_custom_logo();
                        }else{
                            echo get_bloginfo( 'name' );
                        }
                    ?>
                </a>
            </div>
            <div class="author-content">
              <h4>
                <?php
                    bloginfo( 'name' );
                ?>
              </h4>
              <span>
                <?php
                    bloginfo( 'description' );
                ?>
              </span>
            </div>
            <nav class="main-nav" role="navigation">
              <?php
                wp_nav_menu( array(
                    'theme_location'        => 'primary-menu',
                    'menu_class'            => 'main-menu',
                    'menu_id'               => 'primary-menu',
                    'container'             => 'ul',
                ) );
              ?>
            </nav>
            <div class="social-network">
              <ul class="soial-icons">
                <?php
                    $socials = $options['header_social_icon'];
                    foreach( $socials as $social ):
                ?>
                    <li>
                        <a href="<?php echo $social['social_icon_url']; ?>">
                            <i class="<?php
                            if( isset($social['social_icon']) ){
                                echo $social['social_icon']; 
                            }
                            ?>"></i>
                        </a>
                    </li>
                <?php
                    endforeach;
                ?>
                <!-- <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li> -->
              </ul>
            </div>
            <div class="copyright-text">
                <p>
                    <?php
                        if( isset($options['copyright_text']) ){
                            echo $options['copyright_text'];
                        }
                    ?>
                <br>
              Design: Almamun
                </p>
            </div>
          </div>
        </div>
      </div>