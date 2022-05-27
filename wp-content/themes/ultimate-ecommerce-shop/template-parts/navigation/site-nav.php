<?php 
/*
* Display Theme menus
*/
?>
<div class="<?php if( get_theme_mod( 'ultimate_ecommerce_shop_sticky_header', false) != '') { ?> sticky-menubox"<?php } else { ?>close-sticky <?php } ?>">
  <div class="header w-100 h-auto">
    <div class="container-fluid">
      <div class="row m-0">
        <div class="col-lg-2 col-md-3 cat_menu align-self-center">
          <button role="tab" type="button" class="drp_dwn_ecommerce dropdown-toggle w-100" data-toggle="dropdown">
          <i class="fa fa-bars me-2 my-1" aria-hidden="true"></i> <?php esc_html_e('CATEGORIES','ultimate-ecommerce-shop'); ?> <span class="caret"></span></button>
          <?php if(function_exists('get_term_meta')){ ?>
            <ul class="dropdown-menu cat_box m-0 p-0" role="menu">
              <?php 
                $get_parent_cats = array(
                  'orderby'    => 'title',
                  'order'      => 'ASC',
                  'hide_empty' => 0,
                  'parent'  => 0
                ); 
                $all_categories = get_terms( 'product_cat', $get_parent_cats) ;//get parent categories 
                $count1 = count($all_categories);
                if ( $count1 > 0 ){
                  foreach( $all_categories as $single_category ){
                    //for each category, get the ID
                    $thumbnail_id1 = get_term_meta( $single_category->term_id, 'thumbnail_id', true ); // Get Category Thumbnail
                    $image1 = wp_get_attachment_url( $thumbnail_id1 );
                    //$catID1 = $single_category->term_ID;
                    $category_id_1 = get_cat_ID($single_category->term_id); 
                    $category_link_1 = get_category_link( $single_category->term_id ); ?>
                    <li class="dropdown-submenu py-2 px-3"><a tabindex="-1" href="<?php echo esc_url(  get_term_link( $single_category->term_id ) ); ?> ">
                    <?php
                    if ( $image1 ) {
                      echo '<img role="img" class="thumd_img me-2" src="' . esc_url( $image1 ) . '" alt="" />';
                    }?>
                    <span class="cat_name"><?php echo esc_html( $single_category->name ); ?></span></a>
                    <?php $get_children_cats = array(
                      'parent'   => $single_category->term_id,
                      'orderby'    => 'title',
                      'order'      => 'ASC',
                      'hide_empty' => 0,
                      //'taxonomy' =>  //get children of this parent using the catID variable from earlier
                    );
                    $child_cats = get_terms( 'product_cat' ,$get_children_cats );
                    $count2 = count($child_cats);
                    if ( $count2 > 0 ){
                      echo ' <ul class="dropdown-menu m-0 p-0">';
                      foreach( $child_cats as $child_cat ){
                        //for each child category, get the ID
                        $childID = $child_cat->cat_ID;
                        $thumbnail_id2 = get_term_meta( $child_cat->term_id, 'thumbnail_id', true );
                        $image2 = wp_get_attachment_url( $thumbnail_id2 );
                        ?>
                        <li class="dropdown-submenu py-2 px-3"><a href=" <?php echo esc_url(  get_term_link( $child_cat->term_id ) ); ?> ">
                          <?php
                          if ( $image2 ) {
                            echo '<img role="img" class="thumd_img me-2" src="' . esc_url( $image2 ) . '" alt="" />';
                          }
                          echo esc_html($child_cat->name ); ?></a>
                          <?php
                          $get_children_cats_child = array(
                            'parent'  => $child_cat->term_id,
                            'orderby'    => 'title',
                            'order'      => 'ASC',
                            'hide_empty' => 0,
                            //'taxonomy' =>  //get children of this parent using the catID variable from earlier
                          );
                          $child_cats_child = get_terms( 'product_cat' ,$get_children_cats_child );
                          $count2 = count($child_cats_child);
                          if ( $count2 > 0 ){
                            echo '<ul class="dropdown-menu m-0 p-0">';
                              foreach( $child_cats_child as $child_cat_child ){
                                $thumbnail_id = get_term_meta( $child_cat_child->term_id, 'thumbnail_id', true ); 
                                $image = wp_get_attachment_url( $thumbnail_id );
                                $childID_child = $child_cat_child->cat_ID;
                                ?>
                                <li class="dropdown-submenu py-2 px-3"><a href=" <?php echo esc_url(  get_term_link( $child_cat_child->term_id ) ); ?> ">
                                  <?php
                                  if ( $image ) {
                                    echo '<img role="img" class="thumd_img me-2" src="' . esc_url( $image ) . '" alt="" />';
                                  }
                                  ?>
                                  <?php echo esc_html( $child_cat_child->name );
                                echo '</a></li>';
                              }
                            echo '</ul></li>';
                          }
                        }
                        echo '</ul></li>';
                      }
                    } 
                } ?>
            </ul>
          <?php }?>
        </div>
        <div class="col-lg-8 col-md-6 col-5 align-self-center">
          <div class="menubox">
            <?php 
            if(has_nav_menu('primary')){ ?>
              <div class="toggle-menu responsive-menu text-end text-md-center text-end my-2">
                <button role="tab" class="resToggle ps-0" onclick="ultimate_ecommerce_shop_resmenu_open()"><i class="fas fa-bars p-2"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','ultimate-ecommerce-shop'); ?></span></button>
              </div>
            <?php }?>
            <div id="menu-sidebar" class="nav sidebar">
              <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'ultimate-ecommerce-shop'); ?>">
                <?php
                  if(has_nav_menu('primary')){  
                    wp_nav_menu( array( 
                      'theme_location' => 'primary',
                      'container_class' => 'main-menu-navigation clearfix' ,
                      'menu_class' => 'clearfix',
                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                      'fallback_cb' => 'wp_page_menu',
                    ) );
                  } 
                ?>
                <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="ultimate_ecommerce_shop_resmenu_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','ultimate-ecommerce-shop'); ?></span></a>
              </nav>
            </div>
          </div>  
        </div>
        <div class="search-box col-lg-2 col-md-3 col-7 cart_links align-self-center p-lg-3 p-0">
          <span><i class="fas fa-search p-lg-3 p-2"></i></span>
          <div class="serach_outer w-100 h-100">
            <div class="closepop w-100 text-end"><i class="far fa-window-close"></i></div>
            <div class="serach_inner w-100">
              <?php get_search_form(); ?>
            </div>
          </div>
          <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_cart_page_id') ) ); ?>" id="cart"><i class="fas fa-shopping-cart p-lg-3 p-2"></i><span class="screen-reader-text"><?php esc_html_e('Cart','ultimate-ecommerce-shop'); ?></span></a>
          <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><i class="fas fa-user p-lg-3 p-2"></i><span class="screen-reader-text"><?php esc_html_e('Myaccount','ultimate-ecommerce-shop'); ?></span></a>
        </div>
      </div>
    </div>
  </div>  
</div>