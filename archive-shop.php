<?php get_header(); ?>
	<div class="row" id="top-main">
	    <div class="col-xs-12">
<article class="l-mainColumn">
		<h2 class="hd2nd mb10">中古車販売店</h2>

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
<div class="caset caset--shopAll blockLink" onclick="location.href='<?php the_permalink(); ?>'">
					<div class="l-wrap--fixed">
				<div class="l-box va-mid" style="
    width: 150px;
">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <img src="<?php echo $img_url ?>" alt="<?php the_title(); ?>" width="80" height="60" title="<?php the_title(); ?>">
							</a>
                            <p class="txt txt-c va-btm mt10"><?php echo $shop_desc ?></p>
				</div>

				<div class="l-gutter20"></div>

				<div class="l-box va-btm">
					<div class="va-top">
						<h3 class="hd2nd lh12">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h3>
								<p class="ttl mt10"></p>
							</div>
					<table>
						<tr>
							<td class="subTxt txt--sub txt-r w80 pr10 pt10">定休日</td>
                            <td class="pt10"><?php echo $holyday ?></td>
						</tr>
						<tr>
							<td class="subTxt txt--sub txt-r w80 pr10 pt10">営業時間</td>
                            <td class="pt10">
<?php echo $time ?>
							</td>
                        </tr>
						<tr>
							<td class="subTxt txt--sub txt-r w80 pr10 pt10">住所</td>
                            <td class="pt10">
<?php echo $address ?>
							</td>
						</tr>
   					</tbody></table>
				</div>

				<div class="l-gutter20 l-gutter20__bl"></div>

				<div class="l-box w180 va-btm">
					<table>
								<tbody><tr>
							<td class="va-btm">
								<div class="daisuBox subTxt txt--sub">
                                <span>掲載台数</span><a class="daisu" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php  
                                echo count_user_posts($user_id);
?></a>台

								</div>
							</td>
						</tr>
					</tbody></table>
				</div>
			</div><!-- /.l-wrap -->
		</div>

<?php endwhile; ?><?php else : ?>
<?php endif; ?>


	</article>
            </div>
        </div>
    </div> <!-- /container -->

<?php get_footer(); ?>
