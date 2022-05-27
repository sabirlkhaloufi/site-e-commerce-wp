<?php
/**
 * Display 404 page
 * @package Ultimate Ecommerce Shop
 */
get_header(); ?>

<main id="main" role="main" class="main-content my-5">
    <div class="container">
        <h1><?php printf( '<strong>%s</strong> %s', esc_html__( '404', 'ultimate-ecommerce-shop' ), esc_html__( 'Not Found', 'ultimate-ecommerce-shop' ) ) ?></h1>
        <p class="text-404 m-0"><?php esc_html_e( 'Looks like you have taken a wrong turn', 'ultimate-ecommerce-shop' ); ?></p>
        <p class="text-404 m-0"><?php esc_html_e( 'Dont worry it happens to the best of us.', 'ultimate-ecommerce-shop' ); ?></p>
        <div class="read-moresec my-4">
            <a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right py-2 px-3"><?php esc_html_e( 'Return to the home page', 'ultimate-ecommerce-shop' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Return to the home page','ultimate-ecommerce-shop' );?></span></a>
        </div>
        <div class="clearfix"></div>
    </div>
</main>

<?php get_footer(); ?>