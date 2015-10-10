<?php
include "./simple_html_dom.php";
include "../../../wp-load.php";
include "../../../wp-admin/includes/taxonomy.php";
query_posts("post_type=post&posts_per_page=-1&post_status=publish");
if (have_posts()) : 
while (have_posts()) : the_post(); ?>
<?php
$maker = get_post_meta($post->ID, "maker", true);
$model = get_post_meta($post->ID, "model", true);
$id = make_category($maker);
echo make_category($model, $id);
?>
<?php endwhile; ?><?php else : ?>
<?php endif; 

function make_category($slug, $parent = null){
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
        return wp_create_category($slug, $parent);
    }else{
        return $cat_id;
    }
}
