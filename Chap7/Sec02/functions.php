<?php
/**
* 管理者の権限グループを設定する
*/
add_action( 'admin_init', 'my_admin_init' );
function my_admin_init(){
    //権限を取得
    $role = get_role( 'administrator' );
    //権限を追加するとき
    $role->add_cap( 'edit_others_menus' );
    $role->add_cap( 'edit_menus' );
    $role->add_cap( 'edit_private_menus' );
    $role->add_cap( 'edit_published_menus' );
    $role->add_cap( 'publish_menus' );
    $role->add_cap( 'read_private_menus' );
    //権限を削除するとき
    $role->remove_cap( 'delete_others_menus' );
    $role->remove_cap( 'delete_menus' );
    $role->remove_cap( 'delete_private_menus' );
    $role->remove_cap( 'delete_published_menus' );
}
