<?php

require "../../../wp-load.php";
require "./simple_html_dom.php";

query_posts("post_type=post&posts_per_page=1000");
?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php 
$url = get_post_meta($post->ID, "car-url", true);
$html = file_get_contents($url);
if($html){
	if(preg_match("/この中古車はカーセンサーでの掲載が終了しています。/", $html)){
		wp_delete_post($post->ID, true);
	}
}
?>
<?php endwhile; ?><?php else : ?>
<?php endif; ?>
