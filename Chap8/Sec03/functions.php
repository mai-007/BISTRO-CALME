<?php
/**
* REST APIにカスタムフィールドの値を含ませる
*/
add_action( 'rest_api_init', 'api_register_fields' );
function api_register_fields() {
    register_rest_field( 'menu', // ←投稿ポストを指定
        'price', // ←カスタムフィールドのキーを指定
        array(
            'get_callback' => 'get_custom_field',
            'update_callback' => null,
            'schema' => null,
        )
    );

    register_rest_field( 'menu', // ←投稿ポストを指定
        'calorie', // ←カスタムフィールドのキーを指定
        array(
            'get_callback' => 'get_custom_field',
            'update_callback' => null,
            'schema' => null,
        )
    );
}

function get_custom_field( $object, $field_name, $request ) {
    return get_post_meta( $object[ 'id' ], $field_name, true );
}


/**
* REST API を停止する
*/
function stop_rest_api( $access ) {
    if( !is_user_logged_in() ) {
        return new WP_Error( 'rest_cannot_access', 'REST APIは使用できません',
        array( 'status' => rest_authorization_required_code() ) );
    }
    return $access;
}
add_filter( 'rest_authentication_errors', 'stop_rest_api' );
