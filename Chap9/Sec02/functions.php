<?php
/**
 * No Image画像を表示する関数
 */
function display_thumbnail() {
    if ( has_post_thumbnail() ) {
        echo '<a href="'.get_permalink().'">'.get_the_post_thumbnail( 'thumbnail' ).'</a>';
    }else {
        echo '<a href="'.get_permalink().'"><img src="'.get_template_directory_uri().'/images/common/noimage.png" height="180" width="180" alt=""></a>';
    }
}

/**
 * カスタムフィールドの画像を表示する関数
 */
 function display_image($field_name, $size = 'large') {
     $pic = get_field($field_name);
     if (!empty($pic)) {
         $url = $pic['sizes'][ $size ]; //画像のURL
         echo '<img src="'. $url .'" alt="">';
     }
 }
