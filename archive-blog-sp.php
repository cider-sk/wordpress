<?php get_header("sp"); ?>
<div class="container">
    <div class="row" id="top-main">
        <div class="col-xs-12">
            <div id="listTitle" class="blog-list">
                <h2 class="hd2nd mb10">ツクカーBLOG</h2>
            </div>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="article">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="blog-content">
<?php
$text=get_the_content();
if(strlen($text)>100){
    $des=mb_substr(strip_tags($text),0,95).'...';
    echo $des;
    echo '<a href="',the_permalink(),'">続きを読む</a>';
}else{
    echo $text;
}; 
?>
</div>
        <!-- /.article --></div>
    <?php endwhile; ?>
<?php else: ?>
    <div class="article">
        <p>現在お知らせはありません。</p>
    <!-- /.article --></div>
<?php endif; ?>


        </div>
    </div>
</div> <!-- /container -->
<?php get_footer("sp"); ?>
