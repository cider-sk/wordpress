<!-- サイドバー -->
<div class="l-sideColumn">
<?php wp_reset_query(); ?>

  <section class="l-seclv1 sideBar">
    <h2 class="hd2nd">在庫一覧</h2>
    <div class="sideBar__contents mb10">
<?php 
$arg = array(
    "post_type" => "post",
    "posts_per_page" => 5,
    "cat" => get_cat_id_by_name(get_the_title())
    );
query_posts($arg);
?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
        <div class="sideBar__caset">
            <div class="mb5"><span class="label label--new">NEW</span></div>
            <div class="l-wrap--fixed mb10">
          <div class="l-box">
          <p class="note"><?php echo get_post_meta($post->ID, "car-model", true); ?></p>
          <p class="txt lh12 h2_5em"><a href="<?php the_permalink(); ?>"><?php 
echo mb_substr(get_the_title(), 0, 25); ?>...</a></p>
                <table class="tbl--price w100p">
              <tbody><tr>
                <th>支払総額</th>
                <td><b class="numS"><?php echo get_post_meta($post->ID, "sum-value", true); ?></b>万円</td>
              </tr>
              <tr>
                <th>本体価格</th>
                <td><span class="numS price--hontai"><?php echo get_post_meta($post->ID, "value", true); ?></span>万円</td>
              </tr>
            </tbody></table>
          </div>
          <div class="l-gutter10"></div>
          <div class="l-box w80 txt-c">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="mb5" src="<?php 
          $imgs = get_post_meta($post->ID, "imgList", true); 
$images = explode(",", $imgs);
echo $images[0];
?>" width="80" height="60" alt="<?php the_title(); ?>"></a>
            </div>
        </div>

<?php endwhile; ?><?php else : ?>
<?php endif; ?>
      </div>
 
    </div>
    <p class="txt txt-r"><a href="?page=stocklist">このお店の在庫一覧を見る</a></p>
  </section>

</div>

