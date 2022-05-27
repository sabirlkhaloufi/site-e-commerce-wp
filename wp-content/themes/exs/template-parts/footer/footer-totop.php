<?php
/**
 * The footer section blank template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage ExS
 * @since 0.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( is_customize_preview() ) {
	echo '<div id="to-top-wrap">';
}

$exs_to_top = exs_option( 'totop', '' );
//page totop button
if ( ! empty( $exs_to_top ) ) :
	?>
	<a id="to-top" href="#body">
		<span class="screen-reader-text">
			<?php esc_html_e( 'Go to top', 'exs' ); ?>
		</span>
	</a>
<?php
endif; //totop_enabled

//read progress bar - since 1.9.3
if ( is_singular( 'post' ) && exs_option( 'blog_single_read_progress_enabled' ) ) :
	$height      = exs_option( 'blog_single_read_progress_height' );
	//5 px is default height
	$height      = empty( $height ) ? '5' : $height;
	$position    = exs_option( 'blog_single_read_progress_position' );
	$position    = empty( $position ) ? 'top' : $position;
	$bg          = exs_option( 'blog_single_read_progress_background' );
	$progress_bg = exs_option( 'blog_single_read_progress_bar_background' );
	$progress_bg = empty( $progress_bg ) ? 'i c c2' : $progress_bg;
	?>
	<div id="read-progress" class="<?php echo esc_attr( $bg ); ?> read-progress-<?php echo esc_attr( $position ); ?>" style="position:fixed;width:100%;z-index:10000;height:<?php echo esc_attr( $height ); ?>px;<?php echo esc_attr( $position ); ?>:0">
		<div class="<?php echo esc_attr( $progress_bg ); ?>" style="position:absolute;width:0;height:<?php echo esc_attr( $height ); ?>px"></div>
	</div>
<?php
endif; //read progress

if ( is_customize_preview() ) {
	echo '</div>';
}
