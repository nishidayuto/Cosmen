<?php
  //レーティングスタータグの取得
if ( !function_exists( 'get_rating_star_tag' ) ):
  function get_rating_star_tag($rate, $max = 5, $number = false){
    $rate = floatval($rate);
    $max = intval($max);
    //数字じゃない場合
    if (!is_numeric($rate) || !is_numeric($max)) {
      return $rate;
    }
    //レーティングが100より多い場合は多すぎるので処理しない
    if ($rate > 100 && $max > 100) {
      return $rate;
    }
   
    $tag = '<div class="rating-star">';
   
    //小数点で分割
    $rates = explode('.', $rate);
    if (!isset($rates[0])) {
      return $rate;
    }
    //小数点以下が5かどうか
    if (isset($rates[1])) {
      $has_herf = intval($rates[1]) == 5;
    } else {
      $has_herf = false;
    }
    if ($has_herf) {
      $before = intval($rates[0]);
      $middle = 1;
      $after = $max - 1 - $before;
    } else {
      $before = intval($rate);
      $middle = 0;
      $after = $max - $before;
      //3.2とかの場合は小数点以下を切り捨てる
    $rate = floor(floatval($rate));
  }
  //スターの出力
  for ($j=1; $j <= $before; $j++) {
    $tag .= '<span class="fa fa-star"></span>';
  }
  //半分スターの出力
  for ($j=1; $j <= $middle; $j++) {
    $tag .= '<span class="fa fa-star-half-o"></span>';
  }
  //空スターの出力
  for ($j=1; $j <= $after; $j++) {
    $tag .= '<span class="fa fa-star-o"></span>';
  }
 
  if ($number) {
    $tag .= '<span class="rating-number">'.$rate.'</span>';
  }
 
  $tag .= '</div>';
  return $tag;
}
endif;
 
//星ショートコード
add_shortcode('star', 'rating_star_shortcode');
if ( !function_exists( 'rating_star_shortcode' ) ):
function rating_star_shortcode( $atts, $content = null ) {
  extract( shortcode_atts( array(
      'rate' => 5,
      'max' => 5,
      'number' => 1,
  ), $atts ) );
 return get_rating_star_tag($rate, $max, $number);
}
endif;
 
// //Font Awesome4の読み込み
add_action( 'wp_enqueue_scripts', 'wp_enqueue_scripts_custom_demo' );
if ( !function_exists( 'wp_enqueue_scripts_custom_demo' ) ):
function wp_enqueue_scripts_custom_demo() {
  wp_enqueue_style( 'font-awesome-style', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}
endif;
?>