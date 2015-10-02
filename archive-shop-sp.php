<?php get_header("sp"); ?>
    <div class="container">
        <div class="starter-template main">
            <section class="siteBody">
        <header class="pageHeader" id="top_pageHeader">
            <h1 class="pageTtl_long">中古車販売店</h1>
        </header>
        <div id="lockline_main"></div>
        <div class="pageBody">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php 
//
$user_id = get_post_meta($post->ID, "user_id", true);
$address = get_user_meta($user_id, "address", true);
$tel = get_user_meta($user_id, "tel", true);
$desc = get_user_meta($user_id, "shop_desc", true);
$time = get_user_meta($user_id, "time", true);
$holyday = get_user_meta($user_id, "holyday", true);
$present = get_user_meta($user_id, "present", true);
$img_url = get_user_meta($user_id, "shop_image", true);
?>
            <div class="shopCaset">
                <a href="<?php the_permalink(); ?>" class="bknBox_inner">
                    <div class="bknBox_top">
                        <p class="nameBar">
                        <span class="name_shop"><?php the_title(); ?></span>
                        </p>
                    </div><!-- /.bknBox_top -->
                    <div class="bknBox_mid">
                        <div class="box_L">
                            <figure>
                            <img height="90" width="120" src="<?php echo $img_url ?>" alt="<?php the_permalink(); ?>" class="bknImg">
                            </figure>
                        </div><!-- /.box_L -->
                        <div class="box_R">
                            <table cellpadding="0" cellspacing="0" class="bknInfoTbl">
                                <tbody>
                                   <tr>
                                        <th>営業時間</th>
                                        <td colspan="3"><?php echo $time; ?></td>
                                    </tr>
                                   <tr>
                                        <th>定休日</th>
                                        <td colspan="3"><?php echo $holyday; ?></td>
                                    </tr>
                                   <tr>
                                        <th>掲載台数</th>
                                        <td colspan="3" style="text-align:left;"><b><?php                                 echo count_user_posts($user_id);
?></b><small>台</small></td>
                                    </tr>
                                    <tr>
                                        <th>所在地</th>
                                        <td colspan="3"><?php echo $address; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- /.box_R -->
                    </div><!-- /.bknBox_mid -->
                </a>
            </div>
<?php endwhile; ?><?php else : ?>
<?php endif; ?>
            <p class="goTop"><a rel="external" href="javascript:void(0);" data-role="none" onclick="window.scroll(0,1);return false;">▲東京の中古車販売店TOPへ</a></p>
        </div><!-- /.pageBody -->
    </section>
        </div>
    </div><!-- /.container -->
<?php get_footer("sp"); ?>
