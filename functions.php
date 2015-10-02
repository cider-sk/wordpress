<?php 

//user名からお店のurlをget
function get_shop_url_by_name($shop_name){
/*	query_posts("post_type=shop&posts_per_page=100");
?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php 
	if($shop_name == get_the_title()){
		return get_the_permalink();
	}
?>
<?php endwhile; ?><?php else : ?>
<?php endif; ?>
<?php
*/
}

function get_userinfo_by_user_ID($user_id){
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

function get_cat_id_by_name($name){
    $cats = get_categories();
    foreach($cats as $cat){
        if($cat->name == $name){
            return $cat->cat_ID;
        }
    }
}

function changeYear($num){
    if($num > 1988){ //平成
        echo '(H',$num%100+12,')';
    }
    elseif(1926 < $num && $num < 1989){ /*昭和*/
        echo '(S',$num%100-12,')';       
    }
    else{
        echo '記載なし';
    }
}
function valueFont($val){
    $res=strpos($val,'.');
    if($res == false){
        echo $val;
    }
    else{
        $str = explode('.',$val);
        echo $str[0],'<small>.',$str[1],'</small>';
    }
}

add_action( 'init', 'create_post_type' );

function create_post_type() {
    $labels = array(
        'name' => _x('販売店一覧', 'post type general name'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes'),
        'has_archive' => true
    );
    register_post_type('shop',$args);

    $labels = array(
        'name' => _x('News', 'post type general name'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes'),
        'has_archive' => true
    );
    register_post_type('news',$args);
}

//
function custom_user_contactmethods( $user_contactmethods ) {
    return array(
        'goo_car'  => 'グー販売店URL(detail.htmlは削除)',
        'carsensor'    => 'カーセンサーURL',
        'tel'  => '電話番号',
        'address'    => '住所',
        'holyday' => '定休日',
        'times' => '営業時間',
        'present' => '特典プレゼント',
        'poststatus' => '1:デフォルトで公開する<br>2:デフォルトで下書きにする',
        'shop_image' => 'お店の写真URL',
        'shop_desc' => 'お店の紹介文'
    );
}
add_filter( 'user_contactmethods', 'custom_user_contactmethods' );

/*
 * スマホ対応
 */
add_filter( 'template_include', 'mytheme_template_include' );
function mytheme_template_include( $template ) {
    if ( is_smart_phone() ) {
        $template_sp = str_replace( '.php', '-sp.php', $template );
        if ( file_exists( $template_sp ) )
            $template = $template_sp;
    }
    return $template;
}

function is_smart_phone(){
    $useragents = array(
        'iPhone',          // iPhone
        'iPod',            // iPod touch
        'Android',         // 1.5+ Android
        'dream',           // Pre 1.5 Android
        'CUPCAKE',         // 1.5+ Android
        'blackberry9500',  // Storm
        'blackberry9530',  // Storm
        'blackberry9520',  // Storm v2
        'blackberry9550',  // Storm v2
        'blackberry9800',  // Torch
        'webOS',           // Palm Pre Experimental
        'incognito',       // Other iPhone browser
        'webmate'          // Other iPhone browser
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

