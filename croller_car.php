#!/usr/bin/php
<?php
include "./simple_html_dom.php";
include "../../../wp-load.php";
include "../../../wp-admin/includes/taxonomy.php";
query_posts("post_type=shop&posts_per_page=100&post_status=publish");
if (have_posts()) : 
?>
<?php while (have_posts()) : the_post(); ?>
<?php
$user_id = get_post_meta($post->ID, "user_id", true);
$car_url = get_user_meta($user_id, "carsensor", true);
$goo_url = get_user_meta($user_id, "goo_car", true);
if(get_post_meta($post->ID, "is_goo", true)){
    if($goo_url){
        get_car_by_shop_goo($goo_url, get_the_title(), $user_id, get_the_permalink()); 
    }
}elseif($car_url){
	echo $car_url;
	get_car_by_shop($car_url, get_the_title(), $user_id, get_the_permalink());
	break;
}
?>
<?php endwhile; ?><?php else : ?>
<?php endif; 

function get_car_by_shop($shop_url, $shop_name, $user_id, $tuku_shop_url){
    $cat_id = make_category($shop_name);
    for($i = 1; $i < 5 ; $i ++){
        $html = file_get_html($shop_url."stocklist/?PAGE=". $i);
        //車のURL取得
        if($html){
            foreach($html->find(".caset") as $car){
                $car_single_url = "http://www.carsensor.net".$car->find(".caset--bkn__mainInfo a", 0)->href;
                $car_title = $car->find(".caset--bkn__mainInfo a", 0)->plaintext;
                $car_id = is_car_regitered($car_single_url);
                regist_car($car_single_url, $cat_id, $car_title, $user_id, $shop_url, $car_id, $tuku_shop_url);
            }
            $html->clear();
            unset($html);
        }
        //
    }
}

function get_car_by_shop_goo($shop_url, $shop_name, $user_id, $tuku_shop_url){
    $cat_id = make_category($shop_name);
    for($i = 1; $i < 5 ; $i ++){
        $html = file_get_html($shop_url."stock.html");
        //車のURL取得
        echo $shop_url.PHP_EOL;
        if($html){
            foreach($html->find("table.itemDetail") as $car){
                $car_single_url = "http://www.goo-net.com".$car->find("a", 0)->href;
                $car_title = $car->find(".first .tit2 a", 0)->plaintext;
                $car_img = $car->find(".img2 img", 0)->src;
                $car_id = is_car_regitered($car_single_url);
                regist_car_goo($car_single_url, $cat_id, $car_title, $user_id, $shop_url, $car_id, $car_img, $tuku_shop_url);
            }
            $html->clear();
            unset($html);
        }
    }
}

function regist_car_goo($car_single_url, $cat_id, $car_title, $user_id, $shop_url, $car_id, $car_img, $tuku_shop_url){
    $html = file_get_html($car_single_url);
    if($html){
        foreach($html->find('#contents') as $art) {
            $item["is_goo"] = true;
            //画像
            $item['imgList'] = "";
            //現状は一枚のみ
            $item['imgList'] .= $car_img .",";

            $text = file_get_contents($car_single_url);
            //comment
            $pattern = '/subphoto_comment\[[0-9]*\]=\'(.*?)\';/';
            preg_match_all($pattern, $text, $matches);
            $pattern = '/sub_src\[[0-9]*\]=\'(.*?)\';/';
            foreach($matches[1] as $img_c){
                $img_c = mb_convert_encoding($img_c, "UTF-8", "auto");
                $item['img_c'] .= $img_c.",";
            }
            //img_s
            $pattern = '/sub_src\[[0-9]*\]=\'(.*?)\';/';
            preg_match_all($pattern, $text, $matches_img_s);
            foreach($matches_img_s[1] as $img_s){
                $item['img_s'] .= $img_s.",";
            }
	    //img_l
	    
            $pattern = '/sub_src_b\[[0-9]*\]=\'(.*?)\';/';
            preg_match_all($pattern, $text, $matches_img_l);
            foreach($matches_img_l[1] as $img_l){
                $item['img_l'] .= $img_l.",";
            }

            /*
            for($i = 1 ;$i < 30; $i++){
                $subImg = $art->find("#picNo".$i." img", 0);
                if($subImg){
                    $text = $subImg;
                    $pattern = '/<img src="(.*?)".*onclick="doPhotoChange\([0-9]*.,.\'(.*?)\',.\'.*?\',.\'(.*?)\'/';
                    preg_match($pattern, $text, $matches);
                    if($matches){
                        $item['img_s'] .= $matches[1].",";
                        $item['img_l'] .= $matches[2].",";
                        $item['img_c'] .= $matches[3].",";
                    }
                }else{
                    break;
                }
            }*/

            //お店
            $item["shop_url"] = $tuku_shop_url;
            //燃費
	        //echo $art->find("#carReview", 3);
            $item["fuel"] = $art->find("#carReview ul li .num", 3)->plaintext;
            $item['car-name'] = $car_title;
            $item['car-url'] = $car_single_url;
            //検索項目
            //maker
            $item['maker']     = $art->find('.box_top li', 2)->plaintext;
            //model
            $item['model']     = $art->find('.box_top li', 3)->plaintext;
            //meta-desc
            //value
            $item['value']     = $art->find('.price1', 0)->plaintext;
            //sum-value
            $item['sum-value']     =    $art->find('.price2', 0)->plaintext;
            //駆動方式
            //ハンドル

            $item['handle'] = $art->find('.statusBlock table', 1)->find('td', 2)->plaintext;
            //走行距離
            $item['distance'] = $art->find('table.subData td', 1)->plaintext;
            preg_match("/([0-9]*\.[0-9]*)/", $item['distance'], $match);
            $item['distance'] = $match[1];
            //ミッション

            $item['mission'] = $art->find('.statusBlock table', 1)->find('td', 14)->plaintext;
            //year 年式
            $item['year'] = $art->find('table.subData td', 0)->plaintext; //$art->find('', 0)->plaintext;
            preg_match("/([0-9]*)/", $item['year'], $match);
            $item['year'] = $match[1];
            //ボディタイプ
            $item['body-type'] = $art->find('#infoCatalog td', 3)->plaintext; //$art->find('', 0)->plaintext;
            //color 白 # 黒 # グレー # パール # ゴールド # シルバー # 赤 # 青 # 緑 # 茶 #黄 # オレンジ # ピンク # 紫 # その他

            $item['color'] =  $art->find('.statusBlock table', 1)->find('td', 3)->plaintext; 
            $item['member-limit'] =  $art->find('.statusBlock table', 1)->find('td', 11)->plaintext; 
            //car number

            $item['car-number'] = $art->find('.statusBlock table', 1)->find('td', 13)->plaintext;
            //displacement 排気量
            $item['displacement'] = $art->find('table.subData td', 2)->plaintext;
            //過給器設定モデル
            $item['supercharger'] = $art->find('.statusBlock table', 1)->find('td', 1)->plaintext;

            $item['door'] = $art->find('.statusBlock table', 1)->find('td', 8)->plaintext;
            //エンジン種別
            //inspection 車検 年
            $item['inspection'] =  $art->find('table.subData td', 3)->plaintext;
            //保証
            $item['warranty'] =  $art->find('.afterServiceBlock table', 0)->find('td', 0)->plaintext."<br>".$art->find('.afterServiceBlock table', 0)->find('td', 4)->plaintext;
            //状態
            $item['fix-history'] =  $art->find('.statusBlock table tr td', 1)->plaintext;
            $item['non-smoking'] = $art->find('.statusBlock table tr td', 6)->plaintext;
            $item['regist-offer'] =   $art->find('.statusBlock table tr td', 3)->plaintext;
            $item['echo-car'] =  $art->find('.statusBlock table', 1)->find('td', 10)->plaintext;
            $item['one-owner'] =  $art->find('.statusBlock table', 1)->find('td', 7)->plaintext;

            //option
            foreach($art->find(".statusBlock .on") as $option){
                $item['option'] .= $option->plaintext. ",";
            }
            if(!$car_id){
                $post_value = array(
                    'post_author' => $user_id,//
                    'post_title' => $car_title,// 投稿のタイトル。
                    'post_content' => "",
                    'post_status' => 'draft',//投稿ステータス（下書き）。
                    'post_category' => array($cat_id),
                    'post_type' => 'post', // 投稿タイプ名。
                );
                $car_id = wp_insert_post($post_value);
            } 
            if($car_id){
                foreach($item as $key => $value){
                    update_post_meta($car_id, $key, $value);
                }
            }
            echo $car_id.PHP_EOL;
            return $car_id;
        }
        $html->clear();
        unset($html);
    }
}

function regist_car($car_single_url, $cat_id, $car_title, $user_id, $shop_url, $car_id, $tuku_shop_url){
    $html = file_get_html($car_single_url);
    if($html){
        if($data = $html->find('.l-mainColumn-2')){
        }else{
            $data = $html->find('.l-mainColumn');
        }
        foreach($data as $art) {
            //画像
            $item['imgList'] = "";
            //現状は一枚のみ
            foreach($art->find('img#mainPhoto') as $img){
                $item['imgList'] .= $img->src .",";
            }
            for($i = 1 ;$i < 30; $i++){
                $subImg = $art->find("#picNo".$i." img", 0);
                if($subImg){
                    $text = $subImg;
                    $pattern = '/<img src="(.*?)".*onclick="doPhotoChange\([0-9]*.,.\'(.*?)\',.\'.*?\',.\'(.*?)\'/';
                    preg_match($pattern, $text, $matches);
                    if($matches){
                        $item['img_s'] .= $matches[1].",";
                        $item['img_l'] .= $matches[2].",";
                        $item['img_c'] .= $matches[3].",";
                    }
                }else{
                    break;
                }
	    }
	    print_r($item);
            //お店
            $item["shop_url"] = $tuku_shop_url;
            //燃費
            $text = file_get_contents($car_single_url);
            preg_match("/([0-9]*\.[0-9]*)（km\/L）/", $text, $match);
            $item["fuel"] = $match[1];

            $item['car-name'] = $car_title;
            $item['car-url'] = $car_single_url;
            //検索項目
            //maker
            $item['maker']     = $art->find('.bknDtl_ttl__maker', 0)->plaintext;
            //model
            $item['model']     = $art->find('.bknDtl_ttl__car', 0)->plaintext;
            //meta-desc
            $item['meta-desc']     = $art->find('.bknDtl_ttl__grd', 0)->plaintext;
            //value
            $item['value']     = $art->find('.price--hontai', 0)->plaintext;
            //sum-value
            $item['sum-value']     =    $art->find('.numXXL', 0)->plaintext;
            if($art->find("table.tbl--spec",0)){
                //駆動方式
                $item['drive-system'] = $art->find('table.tbl--spec tr', 0)->find('td', 1)->plaintext;
                //ハンドル
                $item['handle'] = $art->find('table.tbl--spec tr', 1)->find('td', 1)->plaintext;
                //走行距離
                $item['distance'] = $art->find('table.tbl--spec tr', 2)->find('td', 0)->plaintext;
                preg_match("/([0-9]*\.[0-9]*)/", $item['distance'], $match);
                $item['distance'] = $match[1];
                //ミッション
                $item['mission'] = $art->find('table.tbl--spec tr', 1)->find('td', 14)->plaintext;
                //year 年式
                $item['year'] = $art->find('table.tbl--spec tr', 3)->find('td', 0)->plaintext; //$art->find('', 0)->plaintext;
                preg_match("/([0-9]*)/", $item['year'], $match);
                $item['year'] = $match[1];
                //ボディタイプ
                $item['body-type'] = $art->find('table.tbl--spec tr', 3)->find('td', 1)->plaintext; //$art->find('', 0)->plaintext;
                //color 白 # 黒 # グレー # パール # ゴールド # シルバー # 赤 # 青 # 緑 # 茶 #黄 # オレンジ # ピンク # 紫 # その他
                $item['color'] =  $art->find('table.tbl--spec tr', 4)->find('td', 0)->plaintext; 
                $item['member-limit'] =  $art->find('table.tbl--spec tr', 4)->find('td', 1)->plaintext; 
                //car number

                $item['car-number'] =  $art->find('table.tbl--spec tr', 5)->find('td', 0)->plaintext; 
                $item['hukushi'] =  $art->find('table.tbl--spec tr', 5)->find('td', 1)->plaintext; 
                //displacement 排気量
                $item['displacement'] = $art->find('table.tbl--spec tr', 6)->find('td', 0)->plaintext;
                $item['seiki-yunyuu'] =  $art->find('table.tbl--spec tr', 6)->find('td', 1)->plaintext; 
                //過給器設定モデル
                $item['supercharger'] = $art->find('table.tbl--spec tr', 7)->find('td', 0)->plaintext;
                $item['door'] = $art->find('table.tbl--spec tr', 7)->find('td', 1)->plaintext;
                //エンジン種別
                $item['engin'] = $art->find('table.tbl--spec tr', 8)->find('td', 0)->plaintext;
                $item['slide-door'] = $art->find('table.tbl--spec tr', 8)->find('td', 1)->plaintext;
                //inspection 車検 年
                $item['inspection'] =  $art->find('table.tbl--spec tr', 9)->find('td', 0)->plaintext;
                //法廷整備
                $item['law'] =  $art->find('table.tbl--spec tr', 10)->find('td', 0)->plaintext;
                //保証
                $item['warranty'] =  $art->find('table.tbl--spec tr', 11)->find('td', 0)->plaintext;
            }
            if($art->find('table.tbl--spec', 1)){
                //状態
                $item['fix-history'] =  $art->find('table.tbl--spec', 1)->find('tr', 0)->find('td', 0)->plaintext;
                $item['camp-car'] =  $art->find('table.tbl--spec', 1)->find('tr', 0)->find('td', 1)->plaintext;
                $item['teiki-history'] =  $art->find('table.tbl--spec', 1)->find('tr', 1)->find('td', 0)->plaintext;
                $item['new-car'] =  $art->find('table.tbl--spec', 1)->find('tr', 1)->find('td', 1)->plaintext;
                $item['non-smoking'] =  $art->find('table.tbl--spec', 1)->find('tr', 2)->find('td', 0)->plaintext;
                $item['regist-offer'] =  $art->find('table.tbl--spec', 1)->find('tr', 2)->find('td', 1)->plaintext;
                $item['recycle-fee'] =  $art->find('table.tbl--spec', 1)->find('tr', 3)->find('td', 0)->plaintext;
                $item['echo-car'] =  $art->find('table.tbl--spec tr', 8)->find('td', 10)->plaintext;
                $item['one-owner'] =  $art->find('table.tbl--spec', 1)->find('tr', 4)->find('td', 0)->plaintext;
            }

            //option
            foreach($art->find(".l-seclv1", 3)->find(".is-on") as $option){
                $item['option'] .= $option->plaintext. ",";
            }
            if(!$car_id){
                $post_value = array(
                    'post_author' => $user_id,//
                    'post_title' => $car_title,// 投稿のタイトル。
                    'post_content' => "",
                    'post_status' => 'draft',//投稿ステータス（下書き）。
                    'post_category' => array($cat_id),
                    'post_type' => 'post', // 投稿タイプ名。
                );
                $car_id = wp_insert_post($post_value);
            } 
            if($car_id){
                foreach($item as $key => $value){
                    update_post_meta($car_id, $key, $value);
                }
	    }
	    echo $car_id.PHP_EOL;
            return $car_id;
        }
    }
    $html->clear();
    unset($html);
}

function get_user_id_by_shop_url($shop_url){
    global $wpdb;
    $result = $wpdb->get_results( 
        "
        SELECT * 
        FROM $wpdb->usermeta
        WHERE meta_value = '$shop_url'
        "
    );
    if ($result) {
        return $result[0]->user_id; //=登録されていればID
    } else {
        return false;
    }
}

function is_car_regitered($car_url){
    $result = true;
    global $wpdb;
    $result = $wpdb->get_results( 
        "
        SELECT * 
        FROM $wpdb->postmeta
        WHERE meta_value = '$car_url'
        "
    );
    if ($result) {
        return $result[0]->post_id; //=登録されていればID
    } else {
        return false;
    }
}

function make_category($slug){
    //既存カテゴリをすべて取得
    $categories = get_categories( $args );
    //print_r($categories);
    $flag=0;
    foreach($categories as $cat){
        if($slug==$cat->name){
            $flag=1;
            $cat_id=$cat->cat_ID;
            break;
        }
    }
    if($flag!=1){//重複無ければ
        return wp_create_category($slug);
    }else{
        return $cat_id;
    }
}

?>

