<?php
/**
 * 簡単なショートコード
 */
function shortcode_test() {
    return "「ショートコードのテストです」";
}
add_shortcode( 'test', 'shortcode_test' );

/**
 * リンクを含むショートコード
 */
function shortcode_twitter() {
    return 'こんにちは！ナカシマ（<a href="https://twitter.com/kanakogi" target="_blank">@kanakogi</a>）です。';
}
add_shortcode('twitter', 'shortcode_twitter');

/**
 * 状況に応じて変化するショートコード
 */
 function shortcode_apple($atts) {
     $atts = shortcode_atts(
         array( 'num' => 5 ), //numの初期値を設定
         $atts,
         'apple', //ショートコード名を指定（オプション）
     );
     return "リンゴが" . $atts['num'] . "個ありました。";
 }
 add_shortcode('apple', 'shortcode_apple');

/**
 * HTMLを共通化するためのショートコード
 */
function shortcode_price( $atts, $content = null ) {
    return '<div class="wrap"><em>価格</em>:' . $content . '</div>';
}
add_shortcode( 'price', 'shortcode_price' );

/**
 * get_template_directory_uri()変わりのショートコード
 */
function shortcode_url(){
    echo get_template_directory_uri();
}
add_shortcode( 'dir_url', 'shortcode_url' );
