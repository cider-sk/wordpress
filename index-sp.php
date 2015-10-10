<?php get_header("sp"); ?>
    <div class="container">

        <div class="starter-template main">
            <h1 class="top">
<img src="<?php bloginfo("url") ?>/wp-content/uploads/2015/09/筑波大生専門中古車情報サイト（一番上）.png" alt="" class="middle-top">
            </h1>
        <img class="top-baner-2" src="/wp-content/uploads/2015/09/購入者全員に.png" alt="">
	    <h2 class="top">
<a href="http://tsukucar.com/campaign/">
	    <img src="/wp-content/uploads/2015/09/紹介者と購入者にもれなく….png" alt="">
</a>
            </h2>
            <div class="block">
                <h3>こだわりの条件がある人</h3>
                <a href="#p2-c"><img src="<?php bloginfo("template_url"); ?>/image-sp/sagasu.png" alt=""></a>
            </div>
            <div class="block">
                <h3>毎月の維持費を知りたい人</h3>
                <a href="#p3-c"><img src="<?php bloginfo("template_url"); ?>/image-sp/ijihi.png" alt=""></a>
            </div>
            <div id="p2-c"></div>
            <div class="block">
                <h3>中古車情報が一気に欲しい人</h3>
                <a href="http://tsukucar.com/toriyose/"><img src="<?php bloginfo("template_url"); ?>/image-sp/chukosha.png" alt=""></a>
            </div>
            <div id="p2">
                <section id="tabBarSection">
                    <nav class="tabBar_R">
                        <ul id="tabBar" class="tabBar_top">
                            <li><div class="tabBtn tabBtn--1 IS_open" id="makerTabId"><b>メーカー検索</b></div></li>
                            <li><div class="tabBtn tabBtn--2 IS_close" id="bodyTabId"><b>車のタイプ検索</b></div></li>
                            <li><div class="tabBtn tabBtn--3 IS_close" id="searchTabId"><b>複数条件検索</b></div></li>
                        </ul>
                    </nav>
                    <div class="tabBox  tabBox--1 IS_open">
                        <ul class="makerBtns">
                        <?php 
                        $array = array(
                            "toyota" => "トヨタ",
                            "nissan" => "日産",
                            "honda" => "ホンダ",
                            "mazda" => "マツダ",
                            "suzuki" => "スズキ",
                            "mitsubishi" => "三菱",
                            "daihatsu" => "ダイハツ"
                        );
                        foreach($array as $k =>$d){
                        ?>
                          <li><a href="/?cftsearch%5Bmaker%5D%5B0%5D%5B%5D=<?php echo $d ?>&post_type=post&cftsearch_submit=1" rel="external" class="ui-link"><span id="btn_<?php echo $k ?>"></span><span><?php echo $d ?></span></a></li>
                          <?php } ?>
                     </ul>
                  </div><!-- /.tabBox -->
                  <div class="tabBox  tabBox--2 IS_close">
                        <ul class="bodytypeBtns">
                        <?php
                        $array = array(
                                "kcar" => "軽自動車",
                                "hBack" => "ハッチバック",
                                "miniVan" => "ミニバン",
                                "sedan" => "セダン",
                                "suv" => "SUV",
                                "hybrid" => "ハイブリッド",
                                "stWagon" => "ステーションワゴン",
                                "coupe" => "クーペ",
                                "open" => "オープンカー"
                                );
                        foreach($array as $k =>$d){
                        ?>
                            <li><a href="?cftsearch%5Bbody-type%5D%5B0%5D%5B%5D=<?php echo $d ?>&cftsearch_submit=1" rel="external" class="ui-link"><span id="btn_<?php echo $k ?>"></span><span class="text"><?php echo $d ?></span></a></li>
                        <?php } ?>
                                                    </ul>
                    </div><!-- /.tabBox -->
                    <div class="searchBlock_multi tabBox  tabBox--3 IS_close">
                    <div id="multiSearchSection"></div>
<form name="f_combo" id="f_combo" action="/" method="get">
<input type="hidden" name="post_type" value="post">
                        <ul class="searchList" id="TopFirstList">
                            <li>
                                <a href="javascript:void(0);" class="ui-link">
                                    <p class="selectTtl">メーカー・車名</p>
                                    <p class="subTxt" data-toggle="modal" data-target="#myModal" ><span id="selectedCar">指定なし</span></p>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"  data-toggle="modal" data-target="#myModal" class="ui-link">
                                    <p class="selectTtl">グレード/モデル</p>
                                    <p class="subTxt"><span id="selectedBodyType">指定なし</span></p>
                                </a>
                            </li>
                            <li><p class="selectTtl" style="float:left;">価格</p>
                                <p class="subTxt">
                            <select data-role="none" id="select1" name="cftsearch[value][1][]">
                                <option label="下限なし" value="">下限なし</option>
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
                            </select>-
                            <select data-role="none" id="select2" name="cftsearch[value][2][]">
                                <option label="上限なし" value="">上限なし</option>
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
                                </p>
                            </li>
                        </ul>
                        <div class="actionArea">
                            <button type="submit" data-role="none" class="btn_TopSearch" onclick="panel.onSubmit(); javascript:void(0);">この条件で検索<span></span></button>
                        </div><!-- /.actionArea -->
                        <input type="hidden" name="cftsearch_submit" value="1">
                    </div>
                    </form>
                    </section>
            </div>
                <h2 class="hdd2nd searchHistoryB">その他の検索</h2>                
                <ul class="slideLinkL">
                    <li><a title="" id="" href="<?php bloginfo("url"); ?>/price-search/" rel="external" class="ui-link">
                        <div class="listTxtBox"><p class="main" id="">価格から探す</p>
                    </div><!-- /.listTxtBox --></a></li>
                </ul>
                <section id="lastSearchBlock" class="mt15">
    <h2 class="hdd2nd">中古車購入の方法や流れを知りたい！</h2>
    <ul class="osiraseBlock">
        <li>
            <a href="" class="osiraseBox ui-link" rel="external">
                <div class="box_L">
                <img src="<?php bloginfo("template_url"); ?>/image-sp/sp-top-icon.jpg" width="100%" alt="中古車購入ガイド">
                </div>
                <!-- /.boxL -->
                <div class="box_R">車選びから購入手続きまで、
                    <br>役立つ情報を完全網羅！
                    <br>中古車購入のバイブルです。</div>
                <!-- /.boxR -->
            </a>
        </li>
    </ul>
    </section>
    <div id="p3-c"></div>
<div id="p3">
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
<div class="naviSortingArea" style="display: none; position:relative; top:0px !important">
<?php
 $str = "cftsearch_submit=1&post_type=post";
?>
        <ul>
            <li class="naviSortingArea__Alink">
                <p class="tblTitle">支払総額</p>
                <ul class="tblBtn">
                    <li>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&orderby=sum-value&order=ASC&cast=signed#tab-link-box'; ?>" id="s22">安い順</a>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&orderby=sum-value&order=DESC&cast=signed#tab-link-box'; ?>" id="s21">高い順</a>
                    </li>
                </ul>
            </li>
            <li class="naviSortingArea__Alink">
                <p class="tblTitle">本体価格</p>
                <ul class="tblBtn">
                    <li>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&orderby=value&order=ASC&cast=signed#tab-link-box'; ?>" id="s2">安い順</a>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&orderby=value&order=DESC&cast=signed#tab-link-box'; ?>" id="s1">高い順</a>
                    </li>
                </ul>
            </li>
            <li class="naviSortingArea__Alink">
                <p class="tblTitle">年式</p>
                <ul class="tblBtn">
                    <li>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&orderby=year&order=DESC&cast=signed#tab-link-box'; ?>" id="s3">新しい順</a>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&orderby=year&order=ASC&cast=signed#tab-link-box'; ?>" id="s4">古い順</a>
                    </li>
                </ul>
            </li>
            <li class="naviSortingArea__Alink">
                <p class="tblTitle">排気量</p>
                <ul class="tblBtn">
                    <li>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&orderby=displacement&order=ASC&cast=signed#tab-link-box'; ?>" id="s24">小さい順</a>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&orderby=displacement&order=DESC&cast=signed#tab-link-box'; ?>" id="s23">大きい順</a>
                    </li>
                </ul>
            </li>
            <li class="naviSortingArea__Alink">
                <p class="tblTitle">走行距離</p>
                <ul class="tblBtnBtn1">
                    <li>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&orderby=distance&order=ASC&cast=signed#tab-link-box'; ?>" id="s6">少ない順</a>
                    </li>
                </ul>
            </li>
            <li class="naviSortingArea__Alink">
                <p class="tblTitle">新着順</p>
                <ul class="tblBtnBtn1">
                    <li>
                        <a href="<?php bloginfo('url'); ?><?php echo '?'. $str. '&order=DESC&cast=signed#tab-link-box'; ?>" id="s19">新しい順</a>
                    </li>
                </ul>
            </li>
                </ul>
            </li>
            <li><a href="<?php bloginfo('url'); ?><?php 
            $str = "cftsearch_submit=1&post_type=post";
    echo '?'. $str. '&order=DESC&cast=signed#tab-link-box'; 
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
<?php query_posts('posyt_type=post&orderby=title&posts_per_page=8&paged='.$paged); ?>
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


<?php /*
  <p class="pagenation">
                                <span class="noPage">最初</span><span class="noPage">&lt;</span><span class="pageNo">1p/1p</span><span class="noPage">&gt;</span><span class="noPage">最後</span>               </p>
          
                    <div class="sm-footerBox" id="sm_usedcar_search_footer" style="display:none;">
                        <div class="searchTitle"><span id="sm_shashu_name"></span>下記条件で絞込</div>
                        <div class="sm-SearchBox_C">
                            <a href="#" class="conditions" id="sm_fmcc_footer">最新（現行）モデル</a>
                            <a href="#" class="conditions" id="sm_soukou_footer">走行距離5000km以下</a>
                            <a href="#" class="conditions" id="sm_optrep_footer">修復歴なし</a>
                            <a href="#" class="conditions" id="sm_optrnu_footer">登録(届出)済未使用車</a>
                        </div>
                    </div>
                    </div>
<?php */ ?>
</div>
        </div>


<?php 
get_footer("sp");
?>
