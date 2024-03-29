<?php 
require "../../../wp-load.php";
require "./simple_html_dom.php";

//店舗情報 carsensor
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

//goo
$url_array_goo = array(
    "detail.html",
    "map.html",
    "stock.html",
    );

$users = get_users( $args );
foreach($users as $user){
    $url_car = get_user_meta($user->data->ID, "carsensor", true);
    $url_goo = get_user_meta($user->data->ID, "goo_car", true);
    $tel = get_user_meta($user->data->ID, "tel", true);
    $address = get_user_meta($user->data->ID, "address", true);
    
    //販売店の登録
    $user_info = get_userdata($user->data->ID);
    $user_info->first_name;
    //flag
    $is_what = "";
    if($url_car){ 
        $is_what = "carsensor";
        //カスタム投稿タイプに投稿
        $shop_id = is_shop_regitered($url_car);
        if(!$shop_id){
            $shop_id = regist_shop($user_info->first_name, $url_car, $is_what);
        }
    }elseif($url_goo){
        $is_what = "goo";
        //カスタム投稿タイプに投稿
        preg_match("/http\:\/\/www\.goo\-net\.com\/usedcar_shop\/([0-9]*)\//", $url_goo, $matches);
        //sp用に変換
        $url_car = "http://www.goo-net.com/ipn/usedcar_shop/". $matches[1]."/";
        //カスタム投稿タイプに投稿
        $shop_id = is_shop_regitered($url_car);
        if(!$shop_id){
            $shop_id = regist_shop($user_info->first_name, $url_car."detail.html", $is_what);
        }
    }
    if($shop_id){
        //user_idを記録
        update_post_meta($shop_id, 'user_id', $user->data->ID);
        
        if($is_what == "carsensor"){
            foreach($url_array as $slug){
                //croll and save meta
                croll_shop_info($url_car, $slug, $shop_id, $tel, $address);
            }
        }elseif($is_what == "goo"){
            foreach($url_array_goo as $slug){
                 croll_shop_info_goo($url_car, $slug, $shop_id, $tel, $address);
             }
        }
    }
}

function regist_shop($title, $url, $is_what){
    $context = stream_context_create(array('http' => array(
        'method' => 'GET',
        'header' => 'User-Agent : Mozilla/5.0 (iPhone; CPU iPhone OS 7_0 like Mac OS X; en-us) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A465 Safari/9537.53',//ユーザエージェント
    )));
    if($is_what == "carsensor"){
        $html = file_get_html( $url, true, $context);
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
    }elseif($is_what=="goo"){
        $html = file_get_html( $url, true, $context);
        if($html){
            foreach($html->find("img") as $data ){
                if(strpos($data->src, "http://www.goo-net.com/") === false 
                    && strpos($data->src, "http://www.goo-net.com/") === false
                ){
                    $data->src = "http://www.goo-net.com/".$data->src;
                }
            }
            foreach($html->find("a") as $data ){
                //if(strpos($data->href, "http://www.carsensor.net/") !== false){
                $data->href = "";
                //}
            }
            $shop_content = $html->find(".box_shopDetails", 0)->innertext;
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
                update_post_meta($insert_id,'is_goo',true);
            }
            $html->clear();
            return $insert_id;
        }
    }
}

//更新に使われる
function croll_shop_info_goo($url, $slug, $shop_id, $tel, $address){
    $context = stream_context_create(array('http' => array(
        'method' => 'GET',
        'header' => 'User-Agent : Mozilla/5.0 (iPhone; CPU iPhone OS 7_0 like Mac OS X; en-us) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A465 Safari/9537.53',//ユーザエージェント
    )));
    $html = file_get_html( $url.$slug, true, $context );
    update_post_meta($shop_id, 'tel', $tel); 
    update_post_meta($shop_id, 'address', $address);
    
    //url
    update_post_meta($shop_id, 'shop_url', $url); 
    update_post_meta($shop_id, 'sp', $url); 
    echo $html->find("table.baserTable", 0);
    if($html){
        
        echo $url.$slug;
        foreach($html->find("img") as $data ){
            if(strpos($data->src, "http://picture1.goo-net.com/") === false 
                && strpos($data->src, "http://www.goo-net.com/") === false
            ){
                $data->src = "http://picture1.goo-net.com/".$data->src;
            }
        }
        foreach($html->find("a") as $data ){
                //if(strpos($data->href, "http://www.carsensor.net/") !== false){
                $data->href = "";
                //}
            }
        switch($slug){
        case "detail.html":
            $baser_table = $html->find("table.baserTable", 0)->innertext;
            update_post_meta($shop_id, 'detail', $main_content); 
            break;
        case "map.html":
            //$content = $html->find(".l-seclv1", 0)->innertext;
            //update_post_meta($shop_id, 'map', $content); 
            break;
        case "stock.html":
            //$left_content = $html->find(".l-mainColumn-2", 0)->innertext;
            //$right_content = $html->find(".l-sideColumn", 0)->innertext;
            //update_post_meta($shop_id, 'staff-left', $left_content);
            //update_post_meta($shop_id, 'staff-right', $right_content); 
            break;
        default :
            break;
        }

        $html->clear();
    }

}


//更新に使われる
function croll_shop_info($url, $slug, $shop_id, $tel, $address){
    $context = stream_context_create(array('http' => array(
        'method' => 'GET',
        'header' => 'User-Agent : Mozilla/5.0 (iPhone; CPU iPhone OS 7_0 like Mac OS X; en-us) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A465 Safari/9537.53',//ユーザエージェント
    )));
    $html = file_get_html( $url.$slug, true, $context );
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
