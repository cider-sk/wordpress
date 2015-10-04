<?php get_header("sp"); ?>
    <div class="container">

        <div class="starter-template cat">
            <section class="siteBody">

            
                <header class="pageHeader">
                    <h1 class="pageTtl_long">
                                                                                                                                                                                                                    &nbsp;&nbsp;test                                        </h1>

                

                    <form class="sm-SearchBox_A" name="sm_area_price_search" id="sm_area_price_search" action="" method="get">
<input type="hidden" name="cftsearch_submit" value="1">
<input type="hidden" name="post_type" value="post">

                            <select name="cftsearch[value][1][]" id="sm_price">
                                <option label="価格上限" value="">価格下限</option>
                                <option label="5万円" value="5">5万円</option>
                                <option label="10万円" value="10">10万円</option>
                                <option label="15万円" value="15">15万円</option>
                                <option label="20万円" value="20">20万円</option>
                                <option label="25万円" value="25">25万円</option>
                                <option label="30万円" value="30">30万円</option>
                                <option label="35万円" value="35">35万円</option>
                                <option label="40万円" value="40">40万円</option>
                                <option label="45万円" value="45">45万円</option>
                                <option label="50万円" value="50">50万円</option>
                                <option label="60万円" value="60">60万円</option>
                                <option label="70万円" value="70">70万円</option>
                                <option label="80万円" value="80">80万円</option>
                                <option label="90万円" value="90">90万円</option>
                                <option label="100万円" value="100">100万円</option>
                                <option label="120万円" value="120">120万円</option>
                                <option label="140万円" value="140">140万円</option>
                                <option label="160万円" value="160">160万円</option>
                                <option label="180万円" value="180">180万円</option>
                                <option label="200万円" value="200">200万円</option>
                                <option label="250万円" value="250">250万円</option>
                            </select>
                            <select name="cftsearch[value][2][]" id="sm_price">
                                <option label="価格上限" value="">価格上限</option>
                                <option label="5万円" value="5">5万円</option>
                                <option label="10万円" value="10">10万円</option>
                                <option label="15万円" value="15">15万円</option>
                                <option label="20万円" value="20">20万円</option>
                                <option label="25万円" value="25">25万円</option>
                                <option label="30万円" value="30">30万円</option>
                                <option label="35万円" value="35">35万円</option>
                                <option label="40万円" value="40">40万円</option>
                                <option label="45万円" value="45">45万円</option>
                                <option label="50万円" value="50">50万円</option>
                                <option label="60万円" value="60">60万円</option>
                                <option label="70万円" value="70">70万円</option>
                                <option label="80万円" value="80">80万円</option>
                                <option label="90万円" value="90">90万円</option>
                                <option label="100万円" value="100">100万円</option>
                                <option label="120万円" value="120">120万円</option>
                                <option label="140万円" value="140">140万円</option>
                                <option label="160万円" value="160">160万円</option>
                                <option label="180万円" value="180">180万円</option>
                                <option label="200万円" value="200">200万円</option>
                                <option label="250万円" value="250">250万円</option>
                            </select>

</div>
                            <button type="submit" id="sm_area_price_search_act_top" data-role="none">絞込</button>
                        </div><!-- /.searchBoxSideBtn -->
                    </form>
</header>
<div id="tab_menu_img">
                        <div class="tab_menu clearfix">
                            <img src="<?php bloginfo("url") ?>/wp-content/uploads/2015/09/left-check.png" alt="">
                            <div id="tab-link-box">
                            <a id="left-img" href="javascript:void(0);"></a>
                            <a id="middle-img" href="javascript:void(0);"></a>
                            <a id="right-img" href="javascript:void(0);"></a>
                            </div>
                        </div>
                    </div>

    <div class="pageBody">
                <div id="lockline_main"></div>
<?php 
 $fuel_array = array(
     1 => 160,
     2 => 480,
     3 => 1600
     ); 
for($i=1;$i <= 3; $i++){ ?>
<div id="tab-contents-<?php echo $i ?>">
<?php query_posts($query_string); ?>
     <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
<?php
$user_id = $post->post_author;
$address = get_user_meta($user_id, "address", true);
$present = get_user_meta($user_id, "present", true);
$user_info = get_userdata($user_id);
?>

                                <div class="bknBox bknBox_A" id="bkn_CU3933292882">
                                    <a href="<?php the_permalink(); ?>">
                        <div class="bknBox_top">
                                                        <div class="nameBar">
                                <b class="name_maker"><?php echo get_post_meta($post->ID, "model", true); ?></b>
				<h2 class="name_car"><?php the_title(); ?></h2>

<?php if($present){ ?><p class="present"><?php echo $present ?></p><?php } ?>
                                                            </div>
                                                    </div><!-- /.bknBox_top -->
                        <div class="bknBox_mid">
                            <div class="box_L">
                                <figure>
                                                                    <img height="90" width="120" src="<?php 
 $imgs = get_post_meta($post->ID, "imgList", true); 
$images = explode(",", $imgs);
echo $images[0];

?>" alt="<?php the_title(); ?>" class="bknImg" style="display: block;">
                                                                </figure>
                                <ul class="bknAll_icons">
                                                                                                                                            </ul>
                            </div><!-- /.box_L -->
                            <div class="box_R">
                                <table cellpadding="0" cellspacing="0" class="bknInfoTbl">
                                <tbody>
                                    <tr>
                                        <th>本体</th>
                                        <td class="price_hontai"><b><?php $value=get_post_meta($post->ID,'value',true); valueFont($value); ?></b><small>万円</small></td>
                                        <th>総額</th>
                                        <td class="price_sougaku"><b><?php $value=get_post_meta($post->ID,'sum-value',true); valueFont($value); ?></b></td>
                                    </tr>
                                    <tr>
                                        <th>年式</th>
                                        <td><b><?php echo $year=get_post_meta($post->ID,'year',true); ?></b>年</td>
                                        <th>走行</th>
                                        <td><b><?php echo get_post_meta($post->ID,'distance',true); ?></b>km</td>
                                    </tr>
                                    <tr>
                                        <th>修復</th>
                                        <td><?php 
echo get_post_meta($post->ID, "fix-history", true); ?></td>
                                    </tr>
                                    <tr>
                                        <th>住所</th>
                                        <td colspan="3"><?php 
$user_id = $post->post_author;
echo $address = get_user_meta($user_id, "address", true); ?></td>
                                    </tr>
                                </tbody>
                                </table>
                                                                        <button id="bknDtlFixedBtn2_CU3933292882_1"  onclick="location.href='<?php the_permalink(); ?>#contact_form'; return false;" class="btn_inq" data-role="none"><i>無料</i><span>在庫確認・見積依頼</span></button>
                                                                        </div><!-- /.box_R -->
                            <!--  -->
                        </div><!-- /.bknBox_mid -->
<div class="fuel-fee" style="
    position: absolute;
    margin-top: -47px;
    font-size: 14px;

">
	維持費<span style="color:red;font-size:18px;"><?php 
	if(get_post_meta($post->ID, "is_goo")){
		$fuel=get_post_meta($post->ID,'fuel',true) * 4;
		if(!$fuel || $fuel=="-"){
			$fuel = 12;
		}
	}else{
		$fuel=get_post_meta($post->ID,'fuel',true); 
		if(!$fuel || $fuel=="-"){
			$fuel = 12;
		}
	}
$fuel = (130*$fuel_array[$i])/$fuel;
echo number_format($fuel);
?></span>円/月
</div>
					    </a>
                </div><!-- /.bknBox_A -->

<?php endwhile; ?><?php else : ?>
<?php endif; wp_reset_query(); ?>
</div>
<?php } ?>
                                  
<?php wp_pagenavi(); ?>
            </div><!-- /.pageBody -->
        </section>
        </div>

    </div><!-- /.container -->
<?php get_footer("sp"); ?>
