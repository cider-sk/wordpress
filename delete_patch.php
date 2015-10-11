<?php
require "../../../wp-load.php";
require "./simple_html_dom.php";

query_posts("post_type=post&posts_per_page=-1");
$i = 0;
?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php 
$i++;
$url = get_post_meta($post->ID, "car-url", true);
$html = file_get_html($url);
if($html){
    $end = $html->find("header.l-pageHeader p")->innertext;
    echo $i.$end.PHP_EOL;
}
?>
<?php endwhile; ?><?php else : ?>
<?php endif; ?>
