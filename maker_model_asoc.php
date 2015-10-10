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
if(get_post_meta($post->ID, "is_goo", true)){
       get_car_by_shop_goo($goo_url, get_the_title(), $user_id, get_the_permalink()); 
}elseif($car_url){
	get_car_by_shop($car_url, get_the_title(), $user_id, get_the_permalink());
   }
?>
<?php endwhile; ?><?php else : ?>
<?php endif; 

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
