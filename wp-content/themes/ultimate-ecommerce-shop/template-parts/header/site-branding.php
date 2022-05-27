<?php 
/*
* Display Logo and contact details
*/
?>
<div class="headerbox">
  <div class="container-fluid">
    <div class="row">
      <div class="call col-lg-4 col-md-4 align-self-center mt-lg-0 mt-md-0 mt-2 text-lg-start text-md-start text-center">
        <?php if( get_theme_mod( 'ultimate_ecommerce_shop_call','' ) != '' || get_theme_mod( 'ultimate_ecommerce_shop_call_text','' ) != '') { ?>
          <i class="fas fa-phone"></i><span class="infotext ms-2"><?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_call_text','') ); ?></span>
          <a href="tel:<?php echo esc_url( get_theme_mod('ultimate_ecommerce_shop_call','' )); ?>"><?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_call','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_call','') ); ?></span></a>
        <?php } ?>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="logo align-self-center py-2 text-center">
          <?php if ( has_custom_logo() ) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
          <?php endif; ?>
          <?php if( get_theme_mod('ultimate_ecommerce_shop_site_title_tagline',true) != ''){ ?>
            <?php $blog_info = get_bloginfo( 'name' ); ?>
            <?php if ( ! empty( $blog_info ) ) : ?>
              <?php if ( is_front_page() && is_home() ) : ?>
                <h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
              <?php else : ?>
                <p class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
              <?php endif; ?>
            <?php endif; ?>
            <?php
              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) :
            ?>
              <p class="site-description">
                <?php echo esc_html($description); ?>
              </p>
            <?php endif; ?>
          <?php }?>
        </div>
      </div>    
      <div class="email col-lg-4 col-md-4 align-self-center text-lg-end text-md-end text-center my-lg-0 my-md-0 my-2">
        <?php if( get_theme_mod( 'ultimate_ecommerce_shop_mail','' ) != '' || get_theme_mod( 'ultimate_ecommerce_shop_mail_text','' ) != '') { ?>
          <i class="far fa-envelope"></i><span class="infotext ms-2"><?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_mail_text','') ); ?></span>
          <a href="mailto:<?php echo esc_url( get_theme_mod('ultimate_ecommerce_shop_mail','') ); ?>"><?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_mail','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_mail','') ); ?></span></a>
        <?php } ?>
      </div>
      <div class="clear"></div>
    </div>
  </div> 
</div>
