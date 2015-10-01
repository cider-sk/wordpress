<?php 
require "../../../wp-load.php";
require "./simple_html_dom.php";

//店舗情報
$url_array = array(
    "",
    "map/",
    "staff/",
    "maintenance/",
    "afterservice/",
    "fairevent/",
    "review/",
    "shoplist/"
    );


$users = get_users( $args );
foreach($users as $user){
    $url = get_user_meta($user->data->ID, "carsensor", true);
    $tel = get_user_meta($user->data->ID, "tel", true);
    $address = get_user_meta($user->data->ID, "address", true);
    //販売店の登録
    $user_info = get_userdata($user->data->ID);
    $user_info->first_name;
    //カスタム投稿タイプに投稿
    $shop_id = is_shop_regitered($url);
    if(!$shop_id){
        $shop_id = regist_shop($user_info->first_name, $url);
    }
if($shop_id){
    foreach($url_array as $slug){
        //croll and save meta
        croll_shop_info($url, $slug, $shop_id, $tel, $address);
    }
}
}

function regist_shop($title, $url){
    
    $html = file_get_html( $url );
if($html){
    foreach($html->find("img") as $data ){
        if(strpos($data->src, "http://www.carsensor.net/") === false 
            && strpos($data->src, "http://ccsrpcma.carsensor.net/") === false
        ){
            $data->src = "http://www.carsensor.net/".$data->src;
        }
    }
    foreach($html->find("a") as $data ){
        //if(strpos($data->href, "http://www.carsensor.net/") !== false){
            $data->href = "";
        //}
    }

    $shop_content = $html->find(".l-pageHeader .sn_header .l-wrap--fixed", 0)->innertext;
    /*投稿へ格納*/
    $post_value = array(
        'post_author' => 1,// 投稿者のID。
        'post_title' => $title,// 投稿のタイトル。
        'post_content' => $shop_content,
        'post_status' => 'publish',//投稿ステータス（下書き）。
        'post_type' =>'shop', // 投稿タイプ名。
    );
    $insert_id = wp_insert_post($post_value);
    if($insert_id){
        //update_post_meta($insert_id,'thumbnail_url',$img);
    }

$html->clear();
    return $insert_id;
}
}

//更新に使われる
function croll_shop_info($url, $slug, $shop_id, $tel, $address){
    $html = file_get_html( $url.$slug );
    update_post_meta($shop_id, 'tel', $tel); 
    update_post_meta($shop_id, 'address', $address); 
    update_post_meta($shop_id, 'shop_url', $url); 
if($html){
    foreach($html->find("img") as $data ){
        if(strpos($data->src, "http://www.carsensor.net/") === false 
            && strpos($data->src, "http://ccsrpcma.carsensor.net/") === false
        ){
            $data->src = "http://www.carsensor.net/".$data->src;
        }
    }

    foreach($html->find("a") as $data ){
        //if(strpos($data->href, "http://www.carsensor.net/") !== false){
            $data->href = "";
        //}
    }

    switch($slug){
        case "":   
            $left_content = $html->find(".l-mainColumn-2", 0)->innertext;
            $right_content = $html->find(".l-sideColumn", 0)->innertext;
            update_post_meta($shop_id, 'top_left', $left_content); 
            update_post_meta($shop_id, 'top_right', $right_content); 
            break;
        case "map/":
            $content = $html->find(".l-seclv1", 0)->innertext;
            update_post_meta($shop_id, 'map', $content); 
            break;
        case "staff/":
            $left_content = $html->find(".l-mainColumn-2", 0)->innertext;
            $right_content = $html->find(".l-sideColumn", 0)->innertext;
            update_post_meta($shop_id, 'staff-left', $left_content);
            update_post_meta($shop_id, 'staff-right', $right_content); 
            break;
        case "maintenance/":
            $left_content = $html->find(".l-mainColumn-2", 0)->innertext;
            $right_content = $html->find(".l-sideColumn", 0)->innertext;
            update_post_meta($shop_id, 'maintenance-left', $left_content);
            update_post_meta($shop_id, 'maintenance-right', $right_content); 
            break;
        case "afterservice/":
            $left_content = $html->find(".l-mainColumn-2", 0)->innertext;
            $right_content = $html->find(".l-sideColumn", 0)->innertext;
            update_post_meta($shop_id, 'afterservice-left', $left_content);
            update_post_meta($shop_id, 'afterservice-right', $right_content); 
            break;
        case "fairevent/":
            $left_content = $html->find(".l-mainColumn-2", 0)->innertext;
            $right_content = $html->find(".l-sideColumn", 0)->innertext;
            update_post_meta($shop_id, 'fairevent-left', $left_content);
            update_post_meta($shop_id, 'fairevent-right', $right_content); 
            break;
        case "review/":
            $content = $html->find(".l-mainColumn .l-seclv1", 0)->innertext;
            $review_content = "";
            foreach($html->find(".caset--shopReview--noLink") as $data){
                $review_content .= $data->innertext;
            }
            $right_content = $html->find(".l-sideColumn-2", 0)->innertext;
            update_post_meta($shop_id, 'shop_voice', $content);
            update_post_meta($shop_id, 'reviews', $review_content); 
            break;
        case "shoplist/":
            $content = $html->find(".l-mainColumn .l-seclv1", 0)->innertext;
            update_post_meta($shop_id, 'shoplist', $content);
            break;
        default :
            break;
    }

$html->clear();
}

}

function is_shop_regitered($shop_url){
    $result = true;
    global $wpdb;
    $result = $wpdb->get_results( 
        "
        SELECT * 
        FROM $wpdb->postmeta
        WHERE meta_value = '$shop_url'
        "
    );
    if ($result) {
        return $result[0]->post_id; //=登録されていればID
    } else {
        return false;
    }
}

function CheckId($shopUrl){
    global $wpdb;
    $result = $wpdb->get_results( 
    "
    SELECT * 
    FROM $wpdb->postmeta
    WHERE meta_value = '$shopUrl'
    "
);
    if (empty($result)) {
        return true;
    } else {
        return false;
    }
}
