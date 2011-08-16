<?php
/*Plugin Name: Video Codes
Plugin URI: http://www.workerslab.com
Description: The easiest way to add youtube videos on your Wordpress Blog.
Version: 1.0
Author: Babar
Author URI: http://www.iBabar.com
License: GPL v2
*/

/*Youtube Video ShortCode*/
function yt_shortcode( $atts ) {
   extract( shortcode_atts( array(
      'h' => '385',
      'w' => '640',
      'id' => null,
      'rel' => null,
      'ytlogo' => null,
      'theme' => null,
      'info' => null,
      'playlist' => null,
      'time' => '0',
      'border' => '0',
      ), $atts ) );
 
   return '<iframe class="youtube-player" type="text/html" width="' . esc_attr($w) . '" height="' . esc_attr($h) . '" src="http:
//www.youtube.com/embed/' . esc_attr($id) . '/?modestbranding=' . esc_attr($ytlogo) . '&amp;theme=' . esc_attr($theme) . '&amp;autohide=1&amp;rel=' . esc_attr($rel) . '&amp;showinfo=' . esc_attr($info) . 'playlist=' . esc_attr($playlist) . '&amp;start=' . esc_attr($time) . '" frameborder="' . esc_attr($border) . '" ></iframe>';
}
add_shortcode( 'yt', 'yt_shortcode' );

/*Google Video ShortCote*/
function vcgv_shortcode( $atts ) {
   extract( shortcode_atts( array(
      'h' => '326',
      'w' => '400',
      'id' => null,
      ), $atts ) );
 
   return '<embed id=VideoPlayback src=http://video.google.com/googleplayer.swf?docid=' . esc_attr($id) . '&amp;hl=en&amp;fs=true style=width:' . esc_attr($w) . 'px;height:' . esc_attr($h) . 'px allowFullScreen=true allowScriptAccess=always type=application/x-shockwave-flash> </embed>';
}
add_shortcode( 'vcgv', 'vcgv_shortcode' );

/*Vimeo Video Shortcode*/
function vcvv_shortcode( $atts ) {
   extract( shortcode_atts( array(
      'h' => '338',
      'w' => '600',
      'id' => null,
      'title' => '0',
      'byline' => '0',
      'portrait' => '0',
      'border' => '0',
      ), $atts ) );
 
   return '<iframe src="http://player.vimeo.com/video/' . esc_attr($id) . '?title=' . esc_attr($title) . '&amp;byline=' . esc_attr($byline) . '&amp;portrait=' . esc_attr($portrait) . '" width="' . esc_attr($w) . '" height="' . esc_attr($h) . '" frameborder="' . esc_attr($border) . '"></iframe>';
}
add_shortcode( 'vcvv', 'vcvv_shortcode' );

/*DailyMotion Video ShortCode*/
function vcdm_shortcode( $atts ) {
   extract( shortcode_atts( array(
      'h' => '332',
      'w' => '480',
      'id' => null,
      'border' => '0',
      ), $atts ) );
 
   return '<iframe frameborder="' . esc_attr($border) . '" width="' . esc_attr($w) . '" height="' . esc_attr($h) . '" src="http://www.dailymotion.com/embed/video/' . esc_attr($id) . '"></iframe>';
}
add_shortcode( 'vcdm', 'vcdm_shortcode' );


/*MetaCafe Video ShortCode*/
function vcmc_shortcode( $atts ) {
   extract( shortcode_atts( array(
      'h' => '370',
      'w' => '600',
      'id' => null,
      ), $atts ) );
 
   return '<object type="application/x-shockwave-flash" data="http://www.metacafe.com/fplayer/' . esc_attr($id) . '/.swf" width="' . esc_attr($w) . '" height="' . esc_attr($h) . '" wmode="transparent"><param name="movie" value="http://www.metacafe.com/fplayer/' . esc_attr($id) . '/.swf" /></object>';
}
add_shortcode( 'vcmc', 'vcmc_shortcode' );


/*MegaVideo ShortCode*/
function vcmv_shortcode( $atts ) {
   extract( shortcode_atts( array(
      'h' => '344',
      'w' => '640',
      'id' => null,
      ), $atts ) );
 
   return '<object width="' . esc_attr($w) . '" height="' . esc_attr($h) . '"><param name="movie" value="http://www.megavideo.com/v/' . esc_attr($id) . '.3920544471.0"></param><param name="allowFullScreen" value="true"></param><embed src="http://www.megavideo.com/v/' . esc_attr($id) . '.3920544471.0" type="application/x-shockwave-flash" allowfullscreen="true" width="' . esc_attr($w) . '" height="' . esc_attr($h) . '"></embed></object>';
}
add_shortcode( 'vcmv', 'vcmv_shortcode' );

/*Facebook Video ShortCode*/
function vcfb_shortcode( $atts ) {
   extract( shortcode_atts( array(
      'h' => '344',
      'w' => '640',
      'id' => null,
      ), $atts ) );
 
   return '<object width="' . esc_attr($w) . '" height="' . esc_attr($h) . '"><param name="movie" value="http://www.facebook.com/v/' . esc_attr($id) . '"></param><param name="allowFullScreen" value="true"></param><embed src="http://www.megavideo.com/v/' . esc_attr($id) . '" type="application/x-shockwave-flash" allowfullscreen="true" width="' . esc_attr($w) . '" height="' . esc_attr($h) . '"></embed></object>';
}
add_shortcode( 'vfbv', 'vcfb_shortcode' );
?>
