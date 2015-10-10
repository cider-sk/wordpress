<?php get_header("sp"); ?>
    <div class="container">
        <div class="starter-template cat">
            <section class="siteBody">
                <header class="pageHeader">

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
<div class="bknAllTopBar">
<p class="toolBar_result"><a href="javascript:void(0);" id="menuBtn_sort1"><?php echo $wp_query->found_posts; ?><span>台</span></a></p>
<p class="toolBar_Btn w105"><a href="<?php bloginfo("url") ?>#tabBar" rel="nofollow">絞り込み<br>▼</a></p>
<p class="toolBar_Btn w105"><a href="javascript:void(0);" class="sort-btn open_sort" id="menuBtn_sort1">並べ替え<br>▲</a></p>
</div>

<!-- search -->
<!-- sort -->
<div class="naviSortingArea" style="display: none; top: 210px !important;">
<?php
    $array = explode('&', $_SERVER['QUERY_STRING']);
    foreach ($array as $key => $val) {
        if( strpos($val, 'order') !== FALSE ) { 
            unset($array[$key]);
        }   
    }   
    $str = implode('&', $array);
?>
        <ul>
            <li class="naviSortingArea__Alink">
                <p class="tblTitle">支払総額</p>
                <ul class="tblBtn">
                    <li>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&orderby=sum-value&order=ASC&cast=signed'; ?>" id="s22">安い順</a>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&orderby=sum-value&order=DESC&cast=signed'; ?>" id="s21">高い順</a>
                    </li>
                </ul>
            </li>
            <li class="naviSortingArea__Alink">
                <p class="tblTitle">本体価格</p>
                <ul class="tblBtn">
                    <li>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&orderby=value&order=ASC&cast=signed'; ?>" id="s2">安い順</a>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&orderby=value&order=DESC&cast=signed'; ?>" id="s1">高い順</a>
                    </li>
                </ul>
            </li>
            <li class="naviSortingArea__Alink">
                <p class="tblTitle">年式</p>
                <ul class="tblBtn">
                    <li>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&orderby=year&order=DESC&cast=signed'; ?>" id="s3">新しい順</a>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&orderby=year&order=DESC&cast=signed'; ?>" id="s4">古い順</a>
                    </li>
                </ul>
            </li>
            <li class="naviSortingArea__Alink">
                <p class="tblTitle">排気量</p>
                <ul class="tblBtn">
                    <li>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&orderby=displacement&order=DESC&cast=signed'; ?>" id="s24">小さい順</a>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&orderby=displacement&order=ASC&cast=signed'; ?>" id="s23">大きい順</a>
                    </li>
                </ul>
            </li>
            <li class="naviSortingArea__Alink">
                <p class="tblTitle">走行距離</p>
                <ul class="tblBtnBtn1">
                    <li>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&orderby=distance&order=ASC&cast=signed'; ?>" id="s6">少ない順</a>
                    </li>
                </ul>
            </li>
            <li class="naviSortingArea__Alink">
                <p class="tblTitle">新着順</p>
                <ul class="tblBtnBtn1">
                    <li>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&order=DESC&cast=signed'; ?>" id="s19">新しい順</a>
                    </li>
                </ul>
            </li>
                </ul>
            </li>
            <li><a href="<?php bloginfo('url'); ?><?php 
            $str = "cftsearch_submit=1&post_type=post";
    echo '?'. $str. '&order=DESC&cast=signed'; 
?>" class="tblBtnAllAClear">条件をクリアして表示</a></li>
        </ul>
    </div>

<?php 
 $fuel_array = array(
     1 => 160,
     2 => 480,
     3 => 1600
     ); 
for($i=1;$i <= 3; $i++){ ?>
<div id="tab-contents-<?php echo $i ?>">
<?php ?>
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
