<?php 
/*
* Display Top Bar
*/
?>
<?php if( get_theme_mod('ultimate_ecommerce_shop_show_topbar', false) != ''){ ?>
  <?php if( get_theme_mod( 'ultimate_ecommerce_shop_discount_text','' ) != '' || is_active_sidebar( 'social-icon' )) { ?>
    <div class="top-header">
      <div class="container-fluid"> 
        <div class="row">   
          <div class="col-lg-5 col-md-5">
            <div class="social-media">
              <?php dynamic_sidebar('social-icon') ?>
            </div>
          </div>
          <div class="col-lg-7 col-md-7">
            <div class="timebox">
              <?php if( get_theme_mod( 'ultimate_ecommerce_shop_discount_text','' ) != '') { ?>
                <span class="phone ms-2 mt-lg-0 mt-md-0 mt-2"><?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_discount_text','' )); ?> <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_shop_page_id') ) ); ?>"><?php esc_html_e('Shop Now','ultimate-ecommerce-shop'); ?><span class="screen-reader-text"><?php esc_html_e( 'Shop Now','ultimate-ecommerce-shop' );?></span></a></span>
               <?php } ?>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  <?php }?>
<?php }?>